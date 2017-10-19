/**
 * Created by Administrator on 2017-10-13.
 */
$(function () {
    var banner = new Swiper('.banner .swiper-container', {
        loop: true,
        pagination: '.banner .swiper-pagination',
        paginationClickable: true,
        autoplay:3000,
        speed:500,
        autoplayDisableOnInteraction : false
    });
    $('.banner .swiper-container').mouseenter(function(){
        banner.stopAutoplay();
    }).mouseleave(function(){
        banner.startAutoplay();
    });
});
$(function () {
    $(".message .sub").click(function () {
        $(".conBox").show();
        $(".blank").show();
    });
    $(".conBox .title .close").click(function () {

        $(".conBox").hide();
        $(".blank").hide();
        $("#titleselect").text();
        $(".bot").html();
    });
    //锚点
    $('ul.ban2 li a').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(0) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({ scrollTop: targetOffset},600);
                return false;
            }
        }
    });
    $(window).scroll(function(){
        if($(window).scrollTop()>300){
            $(".scroll-top").fadeIn();
        }else {
            $(".scroll-top").fadeOut();
        }
    });
    $(".scroll-top").click(function () {
        $("html,body").animate({scrollTop:0},500);
    });
    $(".form").Validform({
        tiptype: 1,

        callback:function(curform){
          var url = $(".form").attr('action');
            $.ajax({
            url: url,
            type: 'POST',
            dataType:'json',
            data:$(curform[0]).serialize(),
            success:function(data){
                  console.log(data);
                  if(data.status==1)
                  {
                    // 将jquery对象转为js对象 重置表单
                    $(curform[0])[0].reset();
                    $.Showmsg("留言成功，谢谢！");
            setTimeout(function(){
               $('#Validform_msg').fadeOut();
            },1500)
                  }
              }
            });
                return false;

        }


    });
});
