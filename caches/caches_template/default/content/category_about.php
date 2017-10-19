<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="about">
    <div class="inner">
        <div class="box">
            <ul class="aboutUl clear">
                <li class="bg"><a href="<?php echo $CATEGORYS['6']['url'];?>">公司介绍</a></li>
                <li><a href="<?php echo $CATEGORYS['28']['url'];?>">联系我们</a></li>
            </ul>
        </div>
        <div class="baseBox">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=07ea35fbd1553fd5f4ed2155251c8fa4&sql=select+%2A+from+ld_about_data++where+id%3D%271%27&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_about_data  where id='1' LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <?php echo $r['jianjie'];?>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </div>
    </div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=07ea35fbd1553fd5f4ed2155251c8fa4&sql=select+%2A+from+ld_about_data++where+id%3D%271%27&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_about_data  where id='1' LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="Promise">
        <div class="inner">
            <div class="baseBox baseBox2">
              <?php echo $r['chengnuo'];?>
            </div>
        </div>
    </div>
    <div class="inner">
        <div class="te clear">
            <div class="left fl">
                <div class="baseBox baseBox2">
                    <?php echo $r['tese'];?>
                </div>
                <div class="baseBox baseBox2">
                  <?php echo $r['content'];?>
                </div>

            </div>
            <div class="right fr"><img src="<?php echo IMG_PATH;?>default/te_04.png"></div>
        </div>
    </div>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<?php include template("content","footer"); ?>
