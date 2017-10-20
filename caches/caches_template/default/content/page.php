<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="main">
    <div class="safe">
        <div class="inner">
            <div class="baseTitle">
                <h3>八大员、技工证书培训取证</h3>
                <!-- <p>Building Qualification Services</p> -->
            </div>
            <div class="new2Text">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d2f55009c3d5e2ed5be78e2e9903543b&sql=select+%2A+from+ld_page++where+catid%3D%27%24catid%27&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_page  where catid='$catid' LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php echo $r['content'];?>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>


</div>
<?php include template("content","footer"); ?>
