<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="format-detection" content="telephone=no">
    <link href="<?php echo CSS_PATH;?>default/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>default/base.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>default/index.css" rel="stylesheet" type="text/css">
    <script src="<?php echo JS_PATH;?>default/jquery-1.8.3.min.js"></script>
    <script src="<?php echo JS_PATH;?>default/swiper.min.js"></script>
    <script src="<?php echo JS_PATH;?>default/Validform_v5.3.2.js"></script>
    
    <?php
    $arr=array("1","2");
    if(in_array($catid,$arr) || !isset($catid)):?>
    <script src="<?php echo JS_PATH;?>default/slide.js"></script>
    <?php endif;?>
    <script src="<?php echo JS_PATH;?>default/index.js"></script>
    <!--[if lt IE 10]>
    <div id="lowerbroswer">
        <div class="zk centerbox">
            <div class="centerbox-cont">
                <h1>您的浏览器已经过时了!</h1>
                <p>请升级浏览器以更好地体验我们的网站。</p>
                <div class="btns">
                    <a href="http://www.google.cn/chrome/" target="_blank">
                        <img src="<?php echo IMG_PATH;?>default/1.png" alt="chrome" />
                        <h4>Google Chrome</h4>
                    </a>
                    <a href="http://www.mozilla.org/firefox/new/" target="_blank">
                        <img src="<?php echo IMG_PATH;?>default/2.png" alt="firefox" />
                        <h4>Firefox</h4>
                    </a>
                    <a href="http://www.opera.com/" target="_blank">
                        <img src="<?php echo IMG_PATH;?>default/3.png" alt="opera" />
                        <h4>Opera</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#lowerbroswer').show();
    </script>
    <![endif]-->
</head>
<body>
<div class="top">
    <div class="inner">
        <a href="" class="logo fl"><img src="<?php echo IMG_PATH;?>default/logo_03.png"></a>
        <div class="right fr clear">
            <div class="qq fl">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2984135233&site=qq&menu=yes">
                    <img border="0" src="http://wpa.qq.com/pa?p=2:2984135233:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
                </a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2984135233&site=qq&menu=yes">
                    <img border="0" src="http://wpa.qq.com/pa?p=2:2984135233:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
                </a>
            </div>
            <div class="line fl"></div>
            <div class="icon fl"><img src="<?php echo IMG_PATH;?>default/icon_03.png"></div>
            <div class="text fl">
                <div class="title1">咨询电话</div>
                <h3><?php echo CONTACT_TEL;?><br>
                    <?php echo CONTACT_PHONE;?>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="nav">
    <div class="inner">
        <ul class="list clear">
            <li class="<?php if(!isset($catid)) { ?>bg<?php } ?>">
                <a href="<?php echo APP_PATH;?>">首页</a>
            </li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6a6a3a33093806fa2f0822ab58a5225e&action=category&catid=0&num=25&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'25',));}?>
    		      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li class="<?php if($r[catid]==$catid || $top_parentid==$r[catid]) { ?>bg<?php } ?>"><a href="<?php if($r[catid]==5) { ?><?php echo $CATEGORYS['17']['url'];?><?php } else { ?><?php echo $r['url'];?><?php } ?>"><?php echo $r['catname'];?></a></li>
    		      <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<?php if(isset($catid)){
  if($catid==1 || $top_parentid==1)
    $ccid=19;
  elseif($catid==2 || $top_parentid==2)
   $ccid=20;
  elseif($catid==3 || $top_parentid==3)
   $ccid=24;
  elseif($catid==4 || $top_parentid==4)
   $ccid=25;
 elseif($catid==5 || $top_parentid==5)
  $ccid=25;
  elseif($catid==6 || $top_parentid==6)
   $ccid=29;

}

?>


<?php if(!isset($catid)) { ?>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1455201f30b4330c5df2465163eb1efc&action=lists&catid=8&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'listorder desc','limit'=>'20',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="swiper-slide"><img src="<?php echo $r['thumb'];?>"></div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<?php } else { ?>
<div class="banner2">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ddc0c237e60735e75de7b344c31438cf&action=lists&catid=%24ccid&order=listorder+desc&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$ccid,'order'=>'listorder desc','limit'=>'1',));}?>
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <img src="<?php echo $r['thumb'];?>">
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<?php } ?>
