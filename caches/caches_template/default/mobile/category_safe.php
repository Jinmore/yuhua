<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="main">
    <ul class="base2Title redBg">
        <li class="bg"><a href="">安全生产许可证</a></li>
    </ul>
    <ul class="dai">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c41f6028b0643fa07df726b323831eda&sql=select+%2A+from+ld_category++where+parentid%3D%272%27&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_category  where parentid='2' LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li class="clear">
            <div class="left fl">
                <h3><?php echo $r['catname'];?></h3>
            </div>
            <div class="right fl">
                <div class="title clear">
                    <a href="<?php echo list_url($r[catid]);?>" class="fl">代办流程</a>
                    <div class="line fl"></div>
                    <a href="<?php echo list_url($r[catid]);?>" class="fl">所需材料</a>
                </div>
                <div class="text">
                   <?php echo $r['description'];?>
                </div>
                <div class="title2">在线咨询</div>
            </div>
        </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>
<?php include template("mobile","footer"); ?>
