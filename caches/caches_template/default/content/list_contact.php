<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="about contact">
    <div class="inner">
        <div class="box">
            <ul class="aboutUl clear">
                <li><a href="<?php echo $CATEGORYS['6']['url'];?>">公司介绍</a></li>
                <li class="bg"><a href="<?php echo $CATEGORYS['28']['url'];?>">联系我们</a></li>
            </ul>
        </div>
        <div class="txt">
          <?php echo $CATEGORYS['28']['description'];?>
        </div>
        <div class="map clear">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=05c2ead6cc6a7769040e8bc86dc2958b&sql=select+%2A+from+ld_news+a+left+join+ld_news_data+b+on+a.id%3Db.id+where+a.id%3D27&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_news a left join ld_news_data b on a.id=b.id where a.id=27 LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="left fl"><img src="<?php echo $r['thumb'];?>"></div>
            <div class="right fr">
                <div class="title">公司地址</div>
                <div class="bot">
                  <?php echo $r['content'];?>

                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>
