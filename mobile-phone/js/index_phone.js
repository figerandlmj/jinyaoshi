/**
 * Created by Administrator on 2015/12/24.
 */
$(function(){

    //        banner

    if (window.chrome) {
        $('.banner li').css('background-size', '100% 100%');
    }
    $('.banner').unslider({
        arrows: false,
        fluid: true,
        dots:true
    });

//    菜单点击
    $('.right-menu').click(function(){
        if(!$(this).data('menu')){
            $(".menus").fadeIn();
            $(this).data('menu',1);
        }
        else{
            $(".menus").fadeOut();
            $(this).data('menu',0);
        }
    });
    $('.news-list li').eq(4).css({height:"90px"});
//    快速通道触碰效果
//        $(".channel-li").click(function(){
//           var index = $(this).index();
//            console.log(index);
//            if(index==0){
//               $(this).find('img').attr("src","images/supplier-focus.png");
//            }
//            if(index==1){
//                $(this).find('img').attr("src","images/internet-focus.png");
//
//            }
//            if(index==2){
//                $(this).find('img').attr("src","images/mail-focus.png");
//            }
//            if(index==3){
//                $(this).find('img').attr("src","images/hengxin-focus.png");
//            }
//
//        });

    //function load (){
    //    document.addEventListener('touchstart',touch, false);
    //    document.addEventListener('touchmove',touch, false);
    //    document.addEventListener('touchend',touch, false);
    //
    //    function touch (event){
    //        var event = event || window.event;
    //
    //        var oInp = document.getElementById("supplier");
    //        var oInp = document.getElementById("internet");
    //
    //        switch(event.type){
    //            case "touchstart":
    //                $("#supplier").find('img').attr("src","images/supplier-focus.png");
    //                $("#internet").find('img').attr("src","images/internet-focus.png");
    //                break;
    //            case "touchend":
    //                $("#supplier").find('img').attr("src","images/supplier.png");
    //                $("#internet").find('img').attr("src","images/internet.png");
    //                break;
    //            case "touchmove":
    //                event.preventDefault();
    //                $("#supplier").find('img').attr("src","images/supplier-focus.png");
    //                $("#internet").find('img').attr("src","images/internet-focus.png");
    //                break;
    //        }
    //
    //    }
    //}
    //window.addEventListener('load',load, false);



})