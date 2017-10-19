<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="about new new2">
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
        <div class="new2Top">
            <div class="title">住建部取消四项设计施工一体化资质的通知</div>
            <p>发布时间：<?php echo date('Y-m-d',strtotime($inputtime));?><span>浏览次数：<span id="hits" style="margin:0 1px;"></span>次</span>来源：<?php if(!empty($copyfrom)) { ?><?php echo $copyfrom;?><?php } else { ?>裕华丹青<?php } ?></p>
        </div>
        <div class="new2Text">
         <?php echo $content;?>
        </div>
        <div class="up clear">
          <a href="<?php echo $previous_page['url'];?>" class="fl"> 上一篇：<?php echo $previous_page['title'];?></a>
          <a href="<?php echo $next_page['url'];?>" class="fr"> 下一篇：<?php echo $next_page['title'];?></a>
        </div>
    </div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>
