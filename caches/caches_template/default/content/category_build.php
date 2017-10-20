<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="main">
    <div class="safe">
        <div class="inner">
            <div class="baseTitle">
                <h3>建筑资质服务</h3>
                <p>Building Qualification Services</p>
            </div>
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1514aa0013f82939ff12d3290e7b264&action=category&catid=1&num=3&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','order'=>'listorder ASC','limit'=>'3',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="clear">
                    <div class="left fl">
                        <h3><?php echo $r['catname'];?></h3>
                    </div>
                    <div class="right fl clear">
                        <div class="right-1 fl">
                            <div class="box">
                                <div class="title clear">
                                    <a href="<?php echo $r['url'];?>" class="fl">代办流程</a>
                                    <div class="line fl"></div>
                                    <a href="<?php echo $r['url'];?>" class="fl">所需材料</a>
                                </div>
                                <div class="text">
                                  <?php echo $r['description'];?>
                                </div>
                            </div>
                        </div>
                        <div class="right-2 fr">
                            <div class="box2">
                                <a href="">在线咨询</a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </ul>
        </div>
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
    <div class="you you2">
        <div class="baseTitle">
            <h3>核心优势</h3>
            <p>core advantages</p>
        </div>
        <img src="<?php echo $CATEGORYS['15']['image'];?>">
    </div>
</div>
<?php include template("content","footer"); ?>
