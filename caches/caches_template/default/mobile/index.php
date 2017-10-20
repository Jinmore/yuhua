<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<div class="main">
    <div class="zi">
        <div class="baseTitle">
            <h3>资质代理</h3>
            <p>Qualification agent</p>
        </div>
        <div class="ziCon">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2e1dbdc57697476e02cbf19c4ce6157b&sql=select+%2A+from+ld_category++where+parentid%3D%271%27&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ld_category  where parentid='1' LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <a class="swiper-slide" href="<?php echo list_url($r[url]);?>">
                        <div class="box">
                            <div class="pic"><img src="<?php echo IMG_PATH;?>mobile/zi_<?php echo $n;?>.png" class="img1"><img src="<?php echo IMG_PATH;?>mobile/zi2_<?php echo $n;?>.png" class="img2"></div>
                        </div>
                        <div class="title"><?php echo $r['catname'];?></div>
                        <div class="text"><?php echo $r['description_er'];?></div>
                        <div class="arrow"><img src="<?php echo IMG_PATH;?>mobile/arrow_03.png"></div>
                    </a>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <a class="swiper-slide" href="<?php echo list_url(2);?>">
                        <div class="box">
                            <div class="pic"><img src="<?php echo IMG_PATH;?>mobile/zi_4.png" class="img1"><img src="<?php echo IMG_PATH;?>mobile/zi2_4.png" class="img2"></div>
                        </div>
                        <div class="title"><?php echo $CATEGORYS['2']['catname'];?></div>
                        <div class="text"><?php echo $CATEGORYS['2']['description'];?></div>
                        <div class="arrow"><img src="<?php echo IMG_PATH;?>mobile/arrow_03.png"></div>
                    </a>
                    <a class="swiper-slide" href="<?php echo page_url(32);?>">
                        <div class="box">
                            <div class="pic"><img src="<?php echo IMG_PATH;?>mobile/zi_5.png" class="img1"><img src="<?php echo IMG_PATH;?>mobile/zi2_5.png" class="img2"></div>
                        </div>
                        <div class="title">八大员、技工证书培训取证</div>
                        <div class="text">为企业代办建筑类资质、简化条</div>
                        <div class="arrow"><img src="<?php echo IMG_PATH;?>mobile/arrow_03.png"></div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-prev"><img src="<?php echo IMG_PATH;?>mobile/prev_03.png"></div>
            <div class="swiper-button-next"><img src="<?php echo IMG_PATH;?>mobile/prev_05.png"></div>
        </div>
    </div>
    <div class="an">
        <div class="baseTitle">
            <h3>成功案例</h3>
            <p>success case</p>
        </div>
        <div id="slide3d" class="slide-carousel slide-3d">
            <ul  class="item-list">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=497fbf4d643320b7545cd9759ec8632d&action=lists&catid=4&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$data = $mobile_tag->lists(array('catid'=>'4','order'=>'listorder desc','limit'=>'20',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="item<?php echo $n;?>">
                    <div class="item-content">
                        <a href="javascript:void(0);">
                            <img class="cover-img" src="<?php echo IMG_PATH;?>mobile/an1_03.jpg" alt="">
                        </a>
                    </div>
                </li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="controls">
                <a  class="item-prev glyphicon glyphicon-menu-left" href="javascript:void(0);"><img src="<?php echo IMG_PATH;?>mobile/an2_06.png"></a>
                <a  class="item-next glyphicon glyphicon-menu-right" href="javascript:void(0);"><img src="<?php echo IMG_PATH;?>mobile/an2_09.png"></a>
            </div>
        </div>
    </div>
    <div class="six">
        <div class="baseTitle">
            <h3>六大步骤，让服务更高效</h3>
            <p>SIX STEPS TO MAKE SERVICES MORE EFFICIENT</p>
        </div>
        <ul class="sixUl clear">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=8a5e297b53ddc57511ab90358ff22041&action=lists&catid=16&order=listorder+desc%2Cid+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$data = $mobile_tag->lists(array('catid'=>'16','order'=>'listorder desc,id desc','limit'=>'20',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a ><img src="<?php echo $r['thumb'];?>"><p><?php echo $r['title'];?></p></a></li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="jie">
        <div class="baseTitle">
            <h3>公司介绍</h3>
            <p>Company Profile</p>
        </div>
        <div class="text">
        <?php echo $CATEGORYS['27']['description'];?>
        </div>
    </div>
</div>
<?php include template("mobile","footer"); ?>
