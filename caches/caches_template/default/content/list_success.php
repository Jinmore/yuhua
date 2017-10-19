<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="success">
    <div class="inner">
        <div class="base2Title base2Title2">成功案例</div>
        <ul class="anUl clear">

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c359f9af1eade3893e3eefc1c9af3689&action=lists&catid=%24catid&order=listorder+desc&num=12&return=data&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li>
              <a href="<?php echo IMG_PATH;?>default/anPic_03.jpg" target="_blank">
                  <div class="top">
                      <p><img src="<?php echo IMG_PATH;?>default/an_03.png"><?php echo $r['title'];?></p>
                  </div>
                  <img src="<?php echo IMG_PATH;?>default/anPic_03.jpg">
                  <div class="bot"><?php echo $r['timeaddr'];?></div>
              </a>
          </li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
        <div class="pages">
          <?php echo $pages;?>
        </div>

    </div>

</div>
<?php include template("content","footer"); ?>
