<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="main">
    <ul class="base2Title redBg">
      <li class="bg"><a href="<?php echo list_url(6);?>">公司介绍</a></li>
      <li><a href="<?php echo list_url(28);?>">联系我们</a></li>

    </ul>
    <div class="company">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=07ea35fbd1553fd5f4ed2155251c8fa4&sql=select+%2A+from+ld_about_data++where+id%3D%271%27&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_about_data  where id='1' LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
      <?php echo $r['jianjie'];?>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=07ea35fbd1553fd5f4ed2155251c8fa4&sql=select+%2A+from+ld_about_data++where+id%3D%271%27&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_about_data  where id='1' LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="our">
      <?php echo $r['chengnuo'];?>
    </div>
    <div class="te">
          <?php echo $r['tese'];?>
        
        <h3 class="base3Title">我们企业的方针</h3>
        <div class="text">
            诚信为本，全心全意维护客户利益； 周到细致，关注客户的每一个细节； 客观求实，
            最大限度降低客户风险
        </div>
        <div class="teText">
            我们"凝聚专业智慧，<br>
            创造卓越品牌"与您一起成长!
        </div>
    </div>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<?php include template("mobile","footer"); ?>
