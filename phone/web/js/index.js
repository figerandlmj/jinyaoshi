/**
 * Created by Administrator on 2016/1/29.
 */

$(function(){

    //二级菜单点击事件
    $('.nav').click(function(){

        if(!$(this).data("child")){
            $(this).next().slideDown();
            $(this).data("child",1)
        }else{
            $(this).next().slideUp();
            $(this).data("child",0)
        }

    });

    //left menu点击事件
    $('.menu-btn').click(function(){


        if(!$(this).data('menu')){

            $('.main').animate({left:"270px"});
            $('.left-menu').animate({left:"0px"});
            $(this).data('menu',1);

        }else{

            $('.main').animate({left:"0px"});
            $('.left-menu').animate({left:"-270px"});
            $(this).data('menu',0);

        }
    });

    //获取方案点击事件
    $('.btn-join,.cancle').click(function(){
        if(!$('.mask01').data("alert")){
            $('.mask01').show();
            $('.mask01').data('alert',1);
        }else{
            $('.mask01').hide();
            $('.mask01').data('alert',0);
        }
    });
    //添加小区
    $('.btn-join02,.cancle02').click(function(){
        if(!$('.mask02').data("alert")){
            $('.mask02').show();
            $('.mask02').data('alert',1);
        }else{
            $('.mask02').hide();
            $('.mask02').data('alert',0);
        }
    });


})
