<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="about new">
    <div class="inner">
        <div class="box">
            <ul class="aboutUl clear">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6235afe21a27ef20b022ecfb558a8081&action=category&catid=5&order=listorder+desc&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'5','order'=>'listorder desc','limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li <?php if($catid==$r[catid]) { ?>class="bg"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <ul class="newUl">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45db4a867d41b13e08ddd6a257c6f880&action=lists&catid=%24catid&order=listorder+desc&num=2&return=data&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li class="clear">
                            <a class="left fl"><img src="<?php echo $r['thumb'];?>"></a>
                            <div class="right fr">
                                <div class="month clear">
                                    <h2 class="fl"><?php echo date('d',$r['inputtime']);?></h2>
                                    <p class="fl"><?php echo date('M',$r['inputtime']);?>.<?php echo date('Y',$r['inputtime']);?></p>
                                </div>
                                <a href="<?php echo $r['url'];?>" class="title"><?php echo $r['title'];?></a>
                                <div class="text">
                                  <?php echo $r['description'];?>
                                </div>
                                <a href="<?php echo $r['url'];?>" class="more transition">View more+</a>
                            </div>
                        </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
        <div class="pages"><?php echo $pages;?></div>
    </div>
</div>
<?php include template("content","footer"); ?>
