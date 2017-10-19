<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="message">
<?php include template("content","select"); ?>
    <!--弹出的内容-->
    <div class="conBox scroll">
        <div class="title clear">
            <h3 class="fl" id="titleselect">一级承修类承装（修、试）电力设施许可证</h3>
            <div class="close fr"></div>
        </div>
        <div class="bot">


        </div>
    </div>
    <div class="blank"></div>
</div>
<div class="main">
    <div class="zi">
        <div class="inner">
            <div class="baseTitle">
                <h3>资质代理</h3>
                <p>Qualification agent</p>
            </div>
            <ul class="clear">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1514aa0013f82939ff12d3290e7b264&action=category&catid=1&num=3&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','order'=>'listorder ASC','limit'=>'3',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>">
                        <div class="icon">
                            <img src="<?php echo IMG_PATH;?>default/zi_<?php echo $n;?>.png" class="img1">
                            <img src="<?php echo IMG_PATH;?>default/zi2_<?php echo $n;?>.png" class="img2">
                        </div>
                        <div class="title1"><?php echo $r['catname'];?></div>
                        <div class="text"><?php echo $r['description_er'];?></div>
                        <div class="arrow"></div>
                    </a>
                </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li>
                    <a href="<?php echo $CATEGORYS['2']['url'];?>">
                        <div class="icon">
                            <img src="<?php echo IMG_PATH;?>default/zi_4.png" class="img1">
                            <img src="<?php echo IMG_PATH;?>default/zi2_4.png" class="img2">
                        </div>
                        <div class="title1"><?php echo $CATEGORYS['2']['catname'];?></div>
                        <div class="text"><?php echo $CATEGORYS['2']['description'];?></div>
                        <div class="arrow"></div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="icon">
                            <img src="<?php echo IMG_PATH;?>default/zi_5.png" class="img1">
                            <img src="<?php echo IMG_PATH;?>default/zi2_5.png" class="img2">
                        </div>
                        <div class="title1">八大员、技工证书培训取证</div>
                        <div class="text">为企业代办建筑类资质、简化条</div>
                        <div class="arrow"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="you">
        <div class="baseTitle">
            <h3>核心优势</h3>
            <p>core advantages</p>
        </div>
        <img src="<?php echo $CATEGORYS['15']['image'];?>">
    </div>
    <div class="an">
        <div class="inner">
            <div class="baseTitle">
                <h3>成功案例</h3>
                <p>success case</p>
            </div>
            <div id="box">
                <pre class="prev"><img src="<?php echo IMG_PATH;?>default/pre_03.png"></pre>
                <pre class="next"><img src="<?php echo IMG_PATH;?>default/pre_05.png"></pre>
                <ul>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1ca02b38fe8a13602e72102f932a6a6b&action=lists&catid=4&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'listorder desc','limit'=>'20',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><img src="<?php echo $r['thumb'];?>"></li>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </ul>
            </div>
        </div>
    </div>
    <div class="six">
        <div class="inner">
            <div class="baseTitle">
                <h3>六大步骤，让服务更高效</h3>
                <p>SIX STEPS TO MAKE SERVICES MORE EFFICIENT</p>
            </div>
            <ul class="clear">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6a125f80614718ee164761eb19503774&action=lists&catid=16&order=listorder+desc%2Cid+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder desc,id desc','limit'=>'20',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li><a href="javascript:;"><img src="<?php echo $r['thumb'];?>"><p><?php echo $r['title'];?></p></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </ul>
        </div>
    </div>
    <div class="inner">
        <div class="news">
            <div class="baseTitle">
                <h3>新闻动态</h3>
                <p>news</p>
            </div>
            <div class="mid clear">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=245788e4ddb94b995c7ce835859670bc&action=position&posid=1&order=listorder+desc%2Cid+desc&start=0&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder desc,id desc','limit'=>'1',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <div class="left fl"><img src="<?php echo $r['thumb'];?>"></div>
              <div class="right fr">
                  <div class="time"><?php echo date('m',$r['inputtime']);?>/<?php echo date('d',$r['inputtime']);?></div>
                  <a href="<?php echo $r['url'];?>" class="title"><?php echo $r['title'];?></a>
                  <div class="text">
                    <?php echo str_cut(strip_tags($r[description]),500);?>
                  </div>
                  <a href="<?php echo $r['url'];?>" class="more">点击更多</a>
              </div>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
            <ul class="clear">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=72d36e12d136609440022b68d5e3b60c&action=position&posid=1&order=listorder+desc%2Cid+desc&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder desc,id desc','limit'=>'1,3',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li>
                  <div class="time"><?php echo date('m',$r['inputtime']);?>/<?php echo date('d',$r['inputtime']);?></div>
                  <a href="<?php echo $r['url'];?>" class="title"><?php echo $r['title'];?></a>
                  <div class="text">
                    <?php echo str_cut(strip_tags($r[description]),200);?>
                  </div>
                  <a href="<?php echo $r['url'];?>" class="more">
                      <img src="<?php echo IMG_PATH;?>default/more_03.png" class="img1">
                      <img src="<?php echo IMG_PATH;?>default/more2_03.png" class="img2">
                  </a>
              </li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>
