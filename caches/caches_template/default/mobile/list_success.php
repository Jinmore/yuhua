<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="success">
    <ul class="base2Title redBg">
        <li class="bg"><a href="<?php echo list_url($catid);?>"><?php echo $catname;?></a></li>
    </ul>
    <div class="successBox">
        <ul class="successUl clear">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=e8901f26a74be750a545c5c7d134c86e&action=lists&catid=%24catid&order=listorder+desc&num=6&return=data&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$mobile_total = $mobile_tag->count(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($mobile_total, $page, $pagesize, $urlrule);$data = $mobile_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a href="<?php echo $r['thumb'];?>" target="_blank">
                    <div class="pic"><img src="<?php echo thumb($r[thumb],236,334);?>"></div>
                    <p>建筑企业资质证书</p>
                </a>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="pages"><?php echo $pages;?></div>
</div>
<?php include template("mobile","footer"); ?>
