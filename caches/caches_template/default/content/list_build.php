<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="safe2">
   <div class="inner clear">
        <div class="left fl">
            <div class="title">
                <h3><?php echo $CATEGORYS['1']['catname'];?></h3>
                <p>Building Qualification Services</p>
            </div>
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1514aa0013f82939ff12d3290e7b264&action=category&catid=1&num=3&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','order'=>'listorder ASC','limit'=>'3',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li <?php if($catid==$r[catid]) { ?>class="bg"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="right fr">
            <div class="ban1 clear">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=28cbe0824cac7a9203ed0f788ec76c03&sql=select+%2A+from+%60ld_news%60+a+left+join+ld_news_data+b+on+a.id%3Db.id++where+a.catid%3D%24catid+and+title+like+%27%25%24catname%25%27+&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from `ld_news` a left join ld_news_data b on a.id=b.id  where a.catid=$catid and title like '%$catname%'  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <a  class="ban1-l fl"><img src="<?php echo $r['thumb'];?>" class="transition"></a>
              <div class="ban1-r fr">
                  <a  class="title"><?php echo $r['title'];?></a>
                  <div class="text">
                    <?php echo $r['content'];?>
                  </div>
              </div>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <ul class="ban2 clear">
                <li class="bg"><a href="#liu">代办流程</a></li>
                <li><a href="#cai">所需材料</a></li>
                <li><a href="">在线咨询</a></li>
            </ul>
            <div class="bot">
                <div class="liu" id="liu">
                    <div class="banTitle">代办流程</div>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b2897b6428137154de13a6d4d3c7ec88&sql=select+%2A+from+%60ld_news%60+a+left+join+ld_news_data+b+on+a.id%3Db.id++where+a.catid%3D%24catid+and+title+like+%27%25%E4%BB%A3%E5%8A%9E%E6%B5%81%E7%A8%8B%25%27+&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from `ld_news` a left join ld_news_data b on a.id=b.id  where a.catid=$catid and title like '%代办流程%'  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                     <?php echo $r['content'];?>

                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>


                <div class="liu" id="cai">
                    <div class="banTitle banTitle2">所需材料</div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=18ea09752e1e5a775be967509a9a6907&sql=select+%2A+from+%60ld_news%60+a+left+join+ld_news_data+b+on+a.id%3Db.id++where+a.catid%3D%24catid+and+title+like+%27%25%E6%89%80%E9%9C%80%E6%9D%90%E6%96%99%25%27+&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from `ld_news` a left join ld_news_data b on a.id=b.id  where a.catid=$catid and title like '%所需材料%'  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                    <?php echo $r['content'];?>

                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>


        </div>
   </div>
</div>
<?php include template("content","footer"); ?>
