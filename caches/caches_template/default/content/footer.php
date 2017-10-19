<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
    <div class="inner">
        <div class="topF">
            <div class="baseTitle">
                <h3>联系我们</h3>
                <p>contact us</p>
            </div>
            <div class="mid clear">
                <div class="left fl">
                    <div class="text">感谢您来到北京裕华丹青科技发展有限公司网站，有什么问题请您留言或使用以下方式联系我们，我们将尽快给您回复，谢谢！</div>
                    <p><img src="<?php echo IMG_PATH;?>default/f_03.png"><?php echo CONTACT_TEL;?>  /  <?php echo CONTACT_PHONE;?></p>
                    <p><img src="<?php echo IMG_PATH;?>default/f_06.png"><?php echo CONTACT_TEL;?></p>
                    <p><img src="<?php echo IMG_PATH;?>default/f_08.png">北京市海淀区西三环紫竹院路31号华澳中心（北京香格里拉饭店西侧）1015室</p>
                    <ul class="clear">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
                <div class="right fr">
                    <form class="form"  method="post"  action="<?php echo APP_PATH;?>index.php?m=content&c=index&a=send">
                        <input type="text" placeholder="姓名" name="name" datatype="s" nullmsg="请输入姓名！" errormsg="姓名为中文或英文！">
                        <input type="text" placeholder="电话" name="tel" datatype="m" nullmsg="请输入手机号！" errormsg="手机号格式不正确！">
                        <input type="text" placeholder="邮箱" name="email" datatype="e" nullmsg="请输入您的邮箱！" errormsg="邮箱格式不正确！">
                        <textarea placeholder="留言内容" name="message" class="scroll"></textarea>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy clear">
        <div class="inner">
            <div class="left fl">Copyright © 2017 北京裕华丹青科技发展有限公司. All Rights Reserved<span><?php echo ICP;?></span></div>
            <div class="right fr">24小时服务电话: <?php echo CONTACT_PHONE;?></div>
        </div>
    </div>
</div>
<div class="scroll-top"></div>
</body>
</html>
<script type="text/javascript">
$(function(){
  setInterval(function(){
    $('#Validform_msg').fadeOut(500);
  },3000);
})

</script>
