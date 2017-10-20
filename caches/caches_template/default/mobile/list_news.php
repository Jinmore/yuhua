<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="main">
    <ul class="base2Title redBg">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=99d1a0d8464ff062c8d1c3a6025aee4f&sql=select+%2A+from+ld_category++where+parentid%3D%275%27&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_category  where parentid='5' LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li <?php if($catid==$r[catid]) { ?>class="bg"<?php } ?>><a href="<?php echo list_url($r[catid]);?>"><?php echo $r['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="news">
        <ul>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=e8901f26a74be750a545c5c7d134c86e&action=lists&catid=%24catid&order=listorder+desc&num=6&return=data&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$mobile_total = $mobile_tag->count(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($mobile_total, $page, $pagesize, $urlrule);$data = $mobile_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="clear">
                <a href="<?php echo show_url($catid,$r[id]);?>" class="left fl"><img src="<?php echo IMG_PATH;?>mobile/news_12.jpg"></a>
                <a href="<?php echo show_url($catid,$r[id]);?>" class="right fr">
                    <div class="title">
                      <?php echo $r['title'];?>
                    </div>
                    <div class="text">
                        <?php echo $r['description'];?>
                    </div>
                    <div class="more">View more+</div>
                </a>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
          <div class="pages"><?php echo $pages;?></div>
    </div>
</div>
<?php include template("mobile","footer"); ?>
