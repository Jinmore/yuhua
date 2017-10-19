<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="search">
    <div class="inner">
        <div class="base2Title base2Title2">查询工具</div>

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a496de38a584acddb4b2521f8f2530be&action=category&catid=3&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'3','order'=>'listorder ASC','limit'=>'20',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <div class="box">
              <div class="title"><img src="<?php echo IMG_PATH;?>default/search_03.png"><?php echo $r['catname'];?></div>
              <ul class="clear">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ee119b0b8b016a2042931fff7f598287&action=lists&catid=%24r%5Bcatid%5D&order=listorder+desc&moreinfo=1&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data2 = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder desc','moreinfo'=>'1','limit'=>'20',));}?>
                <li class="clear">
                <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?>
                    <a href=""><?php echo $v['title'];?></a>
                    <?php if($n%4==0) { ?>
                  
                    <?php } ?>
                <?php $n++;}unset($n); ?>
                </li>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </ul>
          </div>
          <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<?php include template("content","footer"); ?>
