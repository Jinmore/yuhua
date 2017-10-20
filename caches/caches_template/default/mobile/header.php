<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <!--允许全屏-->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="<?php echo JS_PATH;?>mobile/mobile.js"></script>
    <link href="<?php echo CSS_PATH;?>mobile/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>mobile/base.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>mobile/index.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>mobile/media.css" rel="stylesheet" type="text/css">
    <script src="<?php echo JS_PATH;?>mobile/jquery-1.8.3.min.js"></script>
    <script src="<?php echo JS_PATH;?>mobile/swiper.min.js"></script>
    <script src="<?php echo JS_PATH;?>mobile/Validform_v5.3.2.js"></script>
		<?php
		$arr=array("1","2");
		if(!isset($catid)):?>
		  <script src="<?php echo JS_PATH;?>mobile/slide.min.js"></script>
		<?php endif;?>

    <script src="<?php echo JS_PATH;?>mobile/index.js"></script>
    <script>
        $(function () {
            $('#slide3d').slideCarsousel({slideType:'3d',indicatorEvent:'mouseover'});
        })
    </script>
</head>
<body class="body">
<div class="inner">
    <div class="header clear">
        <a href="<?php echo APP_PATH;?>index.php?m=mobile" class="logo fl"><img src="<?php echo IMG_PATH;?>mobile/logo_03.png"></a>
        <div class="navList fr">
            <span class="span1"></span>
            <span class="span2"></span>
            <span class="span3"></span>
        </div>
        <ul class="smallUl">
            <li><a href="<?php echo APP_PATH;?>index.php?m=mobile">首页</a></li>
          
						<?php $n=1;if(is_array(subcate(0))) foreach(subcate(0) AS $s) { ?>
						  <?php if($s[catid]==5) { ?>
							<li><a href="<?php echo list_url(17);?>"><?php echo $s['catname'];?></a></li>
							<?php } else { ?>
							<li><a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
							<?php } ?>
						<?php $n++;}unset($n); ?>

        </ul>
    </div>
		<?php if(!isset($catid)) { ?>
    <div class="banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=256f11f67862d5365c362385d77ac27c&action=lists&catid=31&num=10&order=listorder+desc&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$info = $mobile_tag->lists(array('catid'=>'31','order'=>'listorder desc','limit'=>'10',));}?>
					     <?php $n=1;if(is_array($info)) foreach($info AS $i) { ?>
							 	<div class="swiper-slide"><img src="<?php echo $i['thumb'];?>"></div>
							 <?php $n++;}unset($n); ?>
							 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
		<?php } ?>
