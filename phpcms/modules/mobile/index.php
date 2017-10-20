<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_func('global');
pc_base::load_sys_class('format', '', 0);
class index {
	function __construct() {
		$this->db = pc_base::load_model('content_model');
		$this->cate_db = pc_base::load_model('mobile_cate_model');
		$this->siteid = isset($_GET['siteid']) && (intval($_GET['siteid']) > 0) ? intval(trim($_GET['siteid'])) : (param::get_cookie('siteid') ? param::get_cookie('siteid') : 1);
		$this->mobile_site = getcache('mobile_site','mobile');
		$this->cates = getcache('mobile_cate','mobile');
		$this->pages = getcache('mobile_page','mobile');
		$this->mobile = $this->mobile_site[$this->siteid];
		define('MOBILE_SITEURL', $this->mobile['domain'] ? $this->mobile['domain'].'index.php?' : APP_PATH.'index.php?m=mobile&siteid='.$this->siteid);
		if($this->mobile['status']!=1) exit(L('mobile_close_status'));
	}

	//展示首页
	public function init() {
		$mobile = $this->mobile;
		$cates=$this->cates;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$SEO = seo($siteid);
		$CATEGORYS = getcache('category_content_'.$siteid,'commons');
		include template('mobile', 'index');
	}

    //展示列表页
	public function lists() {

		$cates=$this->cates;
		$mobile = $this->mobile;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$catid = intval($_GET['catid']);
		if(!$catid) exit(L('parameter_error'));
		$siteids = getcache('category_content','commons');
		$siteid = $siteids[$catid];
		$CATEGORYS = getcache('category_content_'.$siteid,'commons');
		if(!isset($CATEGORYS[$catid])) exit(L('parameter_error'));
		$CAT = $CATEGORYS[$catid];

		$siteid = $GLOBALS['siteid'] = $CAT['siteid'];
		extract($CAT);
		$setting=string2array($setting);
		$category_template=$setting['category_template'];
		$list_template=$setting['list_template'];
		foreach($cates as $_t) $parentids[] = $_t['parentid'];

		$template = (($cates[$catid]['parentid']==0 || $cates[$cates[$catid]['parentid']]['parentid']==0||$cates[$cates[$cates[$catid]['parentid']]['parentid']]['parentid']==0)&& in_array($catid,array_unique($parentids))) ? $category_template: $list_template;

		$MODEL = getcache('model','commons');
		$modelid = $CAT['modelid'];
		$tablename = $this->db->table_name = $this->db->db_tablepre.$MODEL[$modelid]['tablename'];
		$total = $this->db->count(array('status'=>'99','catid'=>$catid));
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$pagesize = 12;
		$offset = ($page - 1) * $pagesize;

		$list = $this->db->select(array('status'=>'99','catid'=>$catid), '*', $offset.','.$pagesize,'listorder desc,inputtime DESC');

		//构造mobile url规则
		define('URLRULE', 'index.php?m=mobile&c=index&a=lists&catid={$catid}~index.php?m=mobile&c=index&a=lists&catid={$catid}&page={$page}');
		$GLOBALS['URL_ARRAY'] = array('catid'=>$catid);

		$pages = pages($total, $page, $pagesize);
		//SEO
	 	 if(!$setting['meta_title']) $setting['meta_title'] = $catname;
	 	 $SEO = seo($siteid, '',$setting['meta_title'],$setting['meta_description'],$setting['meta_keywords']);

		include template('mobile', $template);
	}



	//展示单页
	public function page() {

		$pages=$this->pages;
		$mobile = $this->mobile;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$catid = intval($_GET['catid']);
		if(!$catid) exit(L('parameter_error'));
		foreach($pages as $_t) $parentids[] = $_t['parentid'];
		$page_template = ($pages[$catid]['parentid']==0 && in_array($catid,array_unique($parentids))) ? 'page_list':'page';
		$this->page_db = pc_base::load_model('page_model');
		$r = $this->page_db->get_one(array('catid'=>$catid));
		if($r) extract($r);

		include template('mobile', $page_template);
	  }

    //展示内容页
	public function show() {
		$mobile = $this->mobile;
		$cates=$this->cates;

		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$catid =intval($_GET['catid']);
		$id = intval($_GET['id']);
		if(!$catid || !$id) exit(L('parameter_error'));
		$siteids = getcache('category_content','commons');
		$siteid = $siteids[$catid];
		$CATEGORYS = getcache('category_content_'.$siteid,'commons');
		$page = intval($_GET['page']);
		$page = max($page,1);

		if(!isset($CATEGORYS[$catid]) || $CATEGORYS[$catid]['type']!=0) exit(L('information_does_not_exist','','content'));
		$this->category = $CAT = $CATEGORYS[$catid];
		$this->category_setting = $CAT['setting'] = string2array($this->category['setting']);
		$siteid = $GLOBALS['siteid'] = $CAT['siteid'];
		$MODEL = getcache('model','commons');
		$modelid = $CAT['modelid'];

		$setting=$CAT['setting'];
		$show_template=$setting['show_template'];
		$tablename = $this->db->table_name = $this->db->db_tablepre.$MODEL[$modelid]['tablename'];
		$r = $this->db->get_one(array('id'=>$id));
		if(!$r || $r['status'] != 99) showmessage(L('info_does_not_exists'),'blank');

		$this->db->table_name = $tablename.'_data';
		$r2 = $this->db->get_one(array('id'=>$id));
		$rs = $r2 ? array_merge($r,$r2) : $r;

		//再次重新赋值，以数据库为准
		$catid = $CATEGORYS[$r['catid']]['catid'];
		$modelid = $CATEGORYS[$catid]['modelid'];

		require_once CACHE_MODEL_PATH.'content_output.class.php';
		$content_output = new content_output($modelid,$catid,$CATEGORYS);
		$data = $content_output->get($rs);
		extract($data);
	  	 	//检查文章会员组权限
		if($groupids_view && is_array($groupids_view)) {
			$_groupid = param::get_cookie('_groupid');
			$_groupid = intval($_groupid);
			if(!$_groupid) {
				$forward = urlencode(get_url());
				showmessage(L('login_website'),APP_PATH.'index.php?m=member&c=index&a=login&forward='.$forward);
			}
			if(!in_array($_groupid,$groupids_view)) {
			$forward = urlencode(get_url());
			showmessage(L('no_priv'),APP_PATH.'index.php?m=member&c=index&a=login&forward='.$forward);}
		} else {
			//根据栏目访问权限判断权限
			$_priv_data = $this->_category_priv($catid);
			if($_priv_data=='-1') {
				$forward = urlencode(get_url());
				showmessage(L('login_website'),APP_PATH.'index.php?m=member&c=index&a=login&forward='.$forward);
			} elseif($_priv_data=='-2') {
				$forward = urlencode(get_url());
				showmessage(L('没有访问权限'),APP_PATH.'index.php?m=member&c=index&a=login&forward='.$forward);
			}
		}

		$this->db->table_name = $tablename;
		//上一页
		$previous_page = $this->db->get_one("
		`catid` = '$catid' AND `listorder`>'$listorder' AND `status`=99
		or `catid` = '$catid' AND `listorder`='$listorder' AND `status`=99 And `id` > '$id'",'*','listorder ASC,id ASC');

		//下一页
		$next_page = $this->db->get_one("
		`catid` = '$catid' AND `listorder`<'$listorder' AND `status`=99
		or `catid` = '$catid' AND `listorder`='$listorder' AND `status`=99 And `id` < '$id'",'*','listorder DESC,id DESC');

		if(empty($previous_page)) {
			$previous_page = array('title'=>L('没有上一篇'), 'thumb'=>IMG_PATH.'nopic_small.gif', 'url'=>'javascript:alert(\''.L('没有上一篇').'\');');
		}else{
			$previous_page['url']=show_url($previous_page['catid'],$previous_page['id']);

		}

		if(empty($next_page)) {
			$next_page = array('title'=>L('没有下一篇'), 'thumb'=>IMG_PATH.'nopic_small.gif', 'url'=>'javascript:alert(\''.L('没有下一篇').'\');');
		}else{
				$next_page['url']=show_url($next_page['catid'],$next_page['id']);
		}

		$SEO = seo($siteid, $catid, $title, $description, $seo_keywords);
		include template('mobile', $show_template);
	}


	//导航页
	function maps() {
		$mobile = $this->mobile;
		$cates=$this->cates;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		include template('mobile', 'maps');
	}

	function search(){
		//获取catid
		$mobile = $this->mobile;
		$cates=$this->cates;
		$c_db = pc_base::load_model('content_model');
		$WAP_SETTING = string2array($WAP['setting']);
		$GLOBALS['siteid'] = max($this->siteid,1);
		$catid=intval($_GET['catid'])?intval($_GET['catid']):0;
		$grouplist = getcache('grouplist','member');
		$_groupid = param::get_cookie('_groupid');
		if(!$_groupid) $_groupid = 8;
		if(!$grouplist[$_groupid]['allowsearch']) {
			/*if ($_groupid==8) showmessage(L('guest_not_allowsearch'));
			else showmessage('');*/
		}


		$keywords=safe_replace($_GET[info][title]);

		$siteids = getcache('category_content','commons');
		$siteid = $siteids[$catid];
		$this->categorys = getcache('category_content_'.$siteid,'commons');
		if(!isset($this->categorys[$catid])) showmessage(L('missing_part_parameters'));
		if(isset($_GET['info']['catid']) && $_GET['info']['catid']) {
			$catid = intval($_GET['info']['catid']);
		} else {
			$_GET['info']['catid'] = 0;
		}
		$modelid = $this->categorys[$catid]['modelid'];
		$modelid = intval($modelid);
		if(!$modelid) showmessage(L('illegal_parameters'));
		$CATEGORYS = $this->categorys;
		pc_base::load_sys_class('form','',0);
		$fields = getcache('model_field_'.$modelid,'model');
			if(isset($_GET['dosubmit'])) {
			$siteid = $this->categorys[$catid]['siteid'];
			$siteurl = siteurl($siteid);
			$c_db->set_model($modelid);
			$tablename = $c_db->table_name;

			$page = max(intval($_GET['page']), 1);

			$sql  = "SELECT * FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99";
			$sql_count  = "SELECT COUNT(*) AS num FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99";
			//构造搜索SQL
			$where = '';
			if(isset($keywords)&&!empty($keywords)){
				$where .= " and a.title like ".'"%'.$keywords.'%"';
			}

			//-----------
			if($where=='') showmessage(L('please_enter_content_to_search'));
			$pagesize = 20;
			$offset = intval($pagesize*($page-1));
			$sql_count .= $where;
			$c_db->query($sql_count);
			$total = $c_db->fetch_array();
			$total = $total[0]['num'];
			if($total!=0) {
				$sql .= $where;
				$order = '';
				$order = $_GET['orderby']=='a.id DESC' ? 'a.id DESC' : 'a.id ASC';
				$sql .= ' ORDER BY '.$order;
				$sql .= " LIMIT $offset,$pagesize";
				$c_db->query($sql);
				$datas = $c_db->fetch_array();
				$pages = pages($total, $page, $pagesize);
			} else {
				$datas = array();
				$pages = '';
			}
		}
		$SEO = seo($siteid, $catid, $keywords);
		if($_GET['ajax']){
			include template('mobile','search-result');
		}else{
			include template('mobile','search');
		}


	}

	/**
	 * 检查阅读权限
	 *
	 */
	protected function _category_priv($catid) {
		$catid = intval($catid);
		if(!$catid) return '-2';
		$_groupid = $this->_groupid;
		$_groupid = intval($_groupid);
		if($_groupid==0) $_groupid = 8;
		$this->category_priv_db = pc_base::load_model('category_priv_model');
		$result = $this->category_priv_db->select(array('catid'=>$catid,'is_admin'=>0,'action'=>'visit'));
		if($result) {
			if(!$_groupid) return '-1';
			foreach($result as $r) {
				if($r['roleid'] == $_groupid) return '1';
			}
			return '-2';
		} else {
			return '1';
		}
	 }

}
?>
