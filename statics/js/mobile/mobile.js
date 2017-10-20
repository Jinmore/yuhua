(function () {
    var jsVer = 27;
    var phoneWidth = parseInt(window.screen.width);
    var phoneScale = phoneWidth/640;

    var ua = navigator.userAgent;
    if (/Android (\d+\.\d+)/.test(ua)){
        var version = parseFloat(RegExp.$1);
        // andriod 2.3
        if(version>4.1){
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi, initial-scale = '+phoneScale+', maximum-scale = '+phoneScale+', user-scalable=0">');
        }else{
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
        }
        // 其他系统
    } else {
        document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
    }
})();