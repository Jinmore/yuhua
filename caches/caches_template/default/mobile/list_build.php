<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="main">
    <ul class="base2Title redBg">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2e1dbdc57697476e02cbf19c4ce6157b&sql=select+%2A+from+ld_category++where+parentid%3D%271%27&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_category  where parentid='1' LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li <?php if($catid==$r[catid]) { ?>class="bg"<?php } ?>><a href="<?php echo list_url($r[catid]);?>"><?php echo $r['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
   <div class="build2">
       <div class="top">
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=28cbe0824cac7a9203ed0f788ec76c03&sql=select+%2A+from+%60ld_news%60+a+left+join+ld_news_data+b+on+a.id%3Db.id++where+a.catid%3D%24catid+and+title+like+%27%25%24catname%25%27+&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from `ld_news` a left join ld_news_data b on a.id=b.id  where a.catid=$catid and title like '%$catname%'  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
         <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
           <div class="top-1 clear">
               <a href="" class="left fl"><img src="<?php echo $r['thumb'];?>"></a>
               <div class="right fr">
                   <div class="title"><?php echo $r['title'];?></div>
                   <div class="text">
                     <?php echo str_cut($r[content],250,'');?>

                   </div>
               </div>
           </div>
           <?php $n++;}unset($n); ?>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           <ul class="clear">
               <li><a href="#dai">代办流程</a></li>
               <li><a href="#xu">所需材料</a></li>
               <li><a href="javascript:;">在线咨询</a></li>
           </ul>
       </div>
       <div class="bot">
           <div class="box box1">
               <div class="title" id="dai">代办流程</div>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b2897b6428137154de13a6d4d3c7ec88&sql=select+%2A+from+%60ld_news%60+a+left+join+ld_news_data+b+on+a.id%3Db.id++where+a.catid%3D%24catid+and+title+like+%27%25%E4%BB%A3%E5%8A%9E%E6%B5%81%E7%A8%8B%25%27+&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from `ld_news` a left join ld_news_data b on a.id=b.id  where a.catid=$catid and title like '%代办流程%'  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

               <?php echo $r['content'];?>

              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

           </div>
           <div class="box">
               <div class="title" id="xu">所需材料</div>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=18ea09752e1e5a775be967509a9a6907&sql=select+%2A+from+%60ld_news%60+a+left+join+ld_news_data+b+on+a.id%3Db.id++where+a.catid%3D%24catid+and+title+like+%27%25%E6%89%80%E9%9C%80%E6%9D%90%E6%96%99%25%27+&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from `ld_news` a left join ld_news_data b on a.id=b.id  where a.catid=$catid and title like '%所需材料%'  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

               <?php echo $r['content'];?>

              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

           </div>
       </div>
   </div>
</div>
<script type="text/javascript">
  $(function(){
    $(".box").find("img").css({"width":"580px"});
  })
</script>
<?php include template("mobile","footer"); ?>
