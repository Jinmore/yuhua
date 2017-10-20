/**
 * Created by Administrator on 2017-08-03.
 */


 $(function () {
     var banner = new Swiper('.banner .swiper-container', {
         loop: true,
         pagination: '.banner .swiper-pagination',
         paginationClickable: true,
         autoplay:300000,
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
    var swiper = new Swiper('.zi .swiper-container', {
        loop: false,
        autoplayDisableOnInteraction : false,
        paginationClickable: true,
        slidesPerView: 2,
        spaceBetween: 0,
        nextButton: '.zi .swiper-button-next',
        prevButton: '.zi .swiper-button-prev'
    });
});
$(function () {
    function h() {
        $("body").css({"padding-bottom":$(".copy").outerHeight()});
    }
    h();
    $(window).resize(function () {
        h();
    });
    $('.navList').click(function(){
        if($('.smallUl').css('display')=='none'){
            $('.smallUl').slideDown();
            $(this).find('.span1').css({"transform":"rotate(-45deg)","margin-top":10});
            $(this).find(".span2").css({"opacity":0});
            $(this).find('.span3').css({"transform":"rotate(45deg)","margin-top":-24});
        }else{
            $('.smallUl').slideUp();
            $(this).find('.span1').css({"transform":"rotate(0deg)","margin-top":0});
            $(this).find(".span2").css({"opacity":1});
            $(this).find('.span3').css({"transform":"rotate(0deg)","margin-top":0});
        }
    });
    $('.build2 .top ul li a').click(function() {
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
    $(".registerform").Validform({
        tiptype: 1
    });
});



