<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="main">
    <ul class="base2Title redBg">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=99d1a0d8464ff062c8d1c3a6025aee4f&sql=select+%2A+from+ld_category++where+parentid%3D%275%27&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_category  where parentid='5' LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li <?php if($catid==$r[catid]) { ?>class="bg"<?php } ?>><a href="<?php echo list_url($r[catid]);?>"><?php echo $r['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="news2">
        <div class="top">
            <div class="title"><?php echo $title;?></div>
            <p>发布时间：<?php echo date('Y-m-d',strtotime($inputtime));?><span>浏览次数：<span id="hits" style="margin:0 1px;"></span>次</span>来源：<?php if(!empty($copyfrom)) { ?><?php echo $copyfrom;?><?php } else { ?>裕华丹青<?php } ?></p>
        </div>
        <div class="bot">
        <?php echo $content;?>
        </div>
        <div class="prev">
          <a href="<?php echo $previous_page['url'];?>" > 上一篇：<?php echo $previous_page['title'];?></a>
          <a href="<?php echo $next_page['url'];?>" > 下一篇：<?php echo $next_page['title'];?></a>

        </div>
    </div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>

<?php include template("mobile","footer"); ?>
