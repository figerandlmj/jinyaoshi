<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="web/css/phone_base.css">
    <link rel="stylesheet" href="web/css/jinyaoshi.css">
    <link rel="stylesheet" href="web/css/swiper.css">
    <style>
        .roundabout-moveable-item
        {
            width: 646px;
            height: 416px;
            cursor: pointer;
        }

    </style>

</head>
<body>
<div class="container">
    <!-- leftMenu-->
    <div class="left-menu">
        <ul class="mui-flex" style="margin-top: 79px;">
            <li class="cell" style="text-align: center">
                <img src="web/images/logo1.png" alt="" width="74">
            </li>
        </ul>
        <div class="nav-wrap">
            <a href="index.php" class="font-white">
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">首页</li>
                </ul>
            </a>
            <a href="index.php?c=index&a=combo" class="font-a0a0a0">
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">套餐介绍</li>
                </ul>
            </a>
            <a href="index.php?c=index&a=list&catid=31" class="font-a0a0a0" >
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">最新优惠</li>
                </ul>
            </a>
            <!--<a href="" class="font-a0a0a0">-->
            <ul class="mui-flex nav font-a0a0a0" data-child="0">
                <li class="cell bb-a0a0a0">
                    关于我们
                </li>
            </ul>
            <div class="nav-child hide font-a0a0a0">
                <a href="index.php?c=index&a=detail&catid=57"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            公司简介
                        </li>
                    </ul>
                </a>
                <a href="index.php?c=index&a=team"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            团队介绍
                        </li>
                    </ul>
                </a>
                <a href="index.php?c=index&a=cooperate"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            合作品牌
                        </li>
                    </ul>
                </a>
            </div>
            <!--</a>-->
            <ul class="mui-flex nav font-a0a0a0" data-child="0">
                <li class="cell bb-a0a0a0">新闻动态</li>
            </ul>
            <div class="nav-child hide font-a0a0a0">
                <a href="index.php?c=index&a=list&catid=41"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            新闻列表
                        </li>
                    </ul>
                </a>
                <a href="index.php?c=index&a=list&catid=43"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            视频展示
                        </li>
                    </ul>
                </a>
            </div>
            <a href="index.php?c=index&a=list&catid=44" class="font-a0a0a0" >
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">装修百问</li>
                </ul>
            </a>
            <a href="index.php?c=index&a=city" class="font-a0a0a0" >
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">我的小区</li>
                </ul>
            </a>
        </div>
    </div>
    <!-- end leftMenu-->



    <!-- 主内容-->
    <div class="main">
        <!-- head-->
        <div class="head">
            <!-- left-menu-->
                <span class="left-menu-icon menu-btn" data-menu="0">

                </span>
            <!-- end left-menu-->
            <span style="margin-left: 45px;font-size: 16px;">金钥匙装饰</span>

        </div>
        <!-- end head-->
        <!-- banner-->
        <div class="banner swiper-container" style="z-index: 0">
            <div class="swiper-wrapper">
<!--                --><?php
//                 foreach($banner as $value){
//
//                     ?>
<!--                     <div class="swiper-slide">-->
<!--                         <img src="--><?php //echo $value['thumb'] ?><!--" alt="" width="100%" >-->
<!--                     </div>-->
<!--                --><?php
//                 }
//
//                ?>
                <div class="swiper-slide">
                    <img src="web/images/jys_banner.jpg" alt="" width="100%" >
                </div>
                <div class="swiper-slide">
                    <img src="web/images/jys_banner.jpg" alt="" width="100%" >
                </div>

            </div>
            <div class="swiper-pagination" style="bottom: 20px;"></div>
        </div>
        <!-- end banner-->

        <!-- 优势-->
        <div class="advantage " style="margin-top: -13px;z-index: 999">
            <ul class="mui-flex">
                <li class="cell">
                    <img src="web/images/jys_img1.jpg" alt="" width="100%">
                </li>
                <li class="cell ml7">
                    <img src="web/images/jys_img2.jpg" alt="" width="100%">
                </li>
                <li class="cell ml7">
                    <img src="web/images/jys_img3.jpg" alt="" width="100%">
                </li>
            </ul>
            <ul class="mui-flex" style="margin-top: 7px;">
                <li class="cell">
                    <img src="web/images/jys_img4.jpg" alt="" width="100%">
                </li>
                <li class="cell ml7">
                    <img src="web/images/jys_img5.jpg" alt="" width="100%">
                </li>
                <li class="cell ml7">
                    <img src="web/images/jys_img6.jpg" alt="" width="100%">
                </li>
            </ul>
            <ul class="mui-flex" style="padding-top: 25px;padding-bottom: 55px;">
                <li class="cell">
                    <img src="web/images/jys_title1.png" alt="" style="width: 80%;margin-left: 10%;">
                </li>
            </ul>
        </div>
        <!-- end 优势-->

        <!-- 新闻动态-->
        <div class="news-box ">

            <!-- title-->
            <ul class="title mui-flex" style="padding-top: 15px;padding-bottom: 14px;">
                <li class="cell">
                    <a href="index.php?c=index&a=list&catid=43"><img src="web/images/jys_module1.png" alt="" width="100%"></a>
                </li>
            </ul>
            <!-- end title-->
            <!-- 视频-->
            <ul class="mui-flex">
                <li class="cell">
                     <?php
                        foreach($video as $value){
                    ?>
                    <a href="index.php?c=index&a=show_video&catid=43&id=<?php echo $value['id'] ?>"> <img src="<?php echo $value['thumb'] ?>" alt="" width="100%"></a>
                    <?php } ?>
                </li>
            </ul>
            <!-- end 视频-->
            <!-- 新闻列表-->
<!--            <ul class="news-list-focus">-->
<!--                <li style="width: 20%;" class="fl">-->
<!--                    <p class="date">06</p>-->
<!--                    <p class="y_m">2015-12</p>-->
<!--                </li>-->
<!--                <li style="width: 80%;" class="fr">-->
<!--                    <p class="title-name">怎样让用户觉得更有价值？金钥匙系列解金钥匙系列解金钥匙系列解金钥匙系列解金钥匙系列解</p>-->
<!--                    <div class="news-description">-->
<!--                        2015年春节过后，金钥匙的流量已经超纪录，暴增到每天有独立用户访问量100万人。这个数据间接表明，金钥匙的用户价值确实巨大。金钥匙除了能···-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
            <?php
            foreach($news as $value){


                ?>
                <ul class="news-list">
                    <li style="width: 20%;" class="fl">
                        <p class="date"><?php echo date("d",$value['inputtime']) ?></p>
                        <p class="y_m"><?php echo date("Y-m",$value['inputtime']) ?></p>
                    </li>
                    <li style="width: 80%;" class="fr">
                        <p class="title-name" style="margin-top: 5px;"><?php echo $value['title'] ?></p>
                        <div class="news-description" style="margin-top: 10px;">
                            <?php echo $value['description'] ?>
                        </div>
                    </li>
                </ul>

                <?php
            }
            ?>
            <!-- end 新闻列表-->

        </div>
        <!-- end 新闻动态-->
        <!-- 丰富体验-->
        <div class="experience" style="margin-top: 12px;">
            <!-- title-->
            <ul class="title mui-flex" style="padding-top: 15px;padding-bottom: 14px;">
                <li class="cell">
                    <a href="index.php?c=index&a=combo"><img src="web/images/jys_module2.png" alt="" width="100%"></a>
                </li>
            </ul>
            <!-- end title-->

            <!--form提交表单-->
            <div class="form">
                <form action="index.php?c=index&a=getplan" method="post">
                    <ul class="mui-flex">
                        <li class=" fixed" style="width: 25%;">
                            <input type="text" name="area" placeholder="建筑面积㎡">
                        </li>
                        <li class=" fixed" style="width: 25%;margin-left: 7px;">
                            <select name="city_name" class="City_select">
                                <option value="">请选择小区</option>
                            </select>
                        </li>
                        <li class="cell" style="margin-left: 10px;color: #ffffff;font-size: 11px;line-height: 13px;">
                            今日已有 <span style="color: #f39700;font-size: 14px;" id="num"></span> 人<br/>
                            获取装修方案<br/>
                            <span style="color:#a0a0a0; ">装修风格</span>
                        </li>
                    </ul>
                    <ul class="mui-flex mt10">
                        <li class=" fixed" style="width: 50%;">
                            <input type="text" name="name" placeholder="姓名">
                        </li>
                        <li class="cell" style="margin-left: 10px;">
                            <select name="style_name" class="Style_select" >
                                <option value="">请选择风格</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="mui-flex mt10">
                        <li class=" fixed" style="width: 50%;">
                            <input type="text" name="phone" placeholder="手机号">
                        </li>
                        <li class="cell" style="margin-left: 10px;">
                            <input type="submit" class="btn-red btn-plan" value="获取方案">
                        </li>
                    </ul>
                </form>
            </div>
            <!-- end form-->
            <!-- 照片墙-->
            <div class="gallery mt10">
                <ul class="mui-flex">
                    <li class=" fixed" style="width: 75%;">
                        <!--<div style="background: url(images/jys_p1.jpg) no-repeat; height: 105px;background-size: 100%"> </div>-->
                        <img src="web/images/jys_p1.jpg" id="img1" alt="" width="100%" >
                    </li>
                    <li class="cell" >
                        <img src="web/images/jys_p2.jpg" id="img" alt="" width="100%" >
                    </li>
                </ul>
                <ul class="mui-flex">
                    <li class="cell" >
                        <img src="web/images/jys_p3.jpg" alt="" width="100%" >
                    </li>
                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p4.jpg" alt="" width="100%" >
                    </li>
                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p5.jpg" alt="" width="100%" >
                    </li>
                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p6.jpg" alt="" width="100%" >
                    </li>
                </ul>
                <ul class="mui-flex">
                    <li class="cell" >
                        <img src="web/images/jys_p7.jpg" alt="" width="100%" >
                    </li>
                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p8.jpg" alt="" width="100%" >
                    </li>
                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p9.jpg" alt="" width="100%" >
                    </li>
                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p10.jpg" alt="" width="100%">
                    </li>
                </ul>
                <ul class="mui-flex">
                    <li class="cell" >
                        <img src="web/images/jys_p11.jpg"  alt="" width="100%" >
                    </li>
                    <li class="fixed" style="margin-left: 5px;width: 47%;">
                        <img src="web/images/jys_p12.jpg" id="img2" alt="" width="100%" >
                    </li>

                    <li class="cell" style="margin-left: 5px;">
                        <img src="web/images/jys_p13.jpg"  alt="" width="100%" >
                    </li>
                </ul>
            </div>
            <!-- end 照片墙-->

            <!-- title-->
            <ul class="mui-flex" style="padding-top: 19px;padding-bottom: 23px;">
                <li class="cell">
                    <img src="web/images/jys_title2.png" alt="" style="width: 80%;margin-left: 10%;">
                </li>
            </ul>
            <!-- end title-->
        </div>
        <!-- end 丰富体验-->

        <!-- 风格展示-->
        <div class="style-display swiper-container" style="padding-bottom: 20px">


            <div class="swiper-wrapper">
                <div class="swiper-slide padding-0-43">
                    <ul class="mui-flex">
                        <li class="cell"><img src="web/images/jys_s1.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"><img src="web/images/jys_s2.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s3.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s4.jpg" alt="" width="100%"></li>
                    </ul>

                </div>
                <div class="swiper-slide padding-0-43">
                    <ul class="mui-flex">
                        <li class="cell"><img src="web/images/jys_s5.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"><img src="web/images/jys_s6.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s7.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s8.jpg" alt="" width="100%"></li>
                    </ul>
                </div>
            </div>
            <div class="swiper-pagination style-pagination" style="bottom: 0px;"></div>
        </div>
        <!-- end 风格展示-->

        <!-- 小banner-->
        <div class="small-banner" style="margin-top: 15px;">
            <img src="web/images/jys_b1.jpg" alt="" width="100%">
        </div>
        <!-- end xiaobanner-->
        <!-- 合作品牌-->
        <div class="brand-wrap">
            <ul class="title mui-flex" style="padding-top: 15px;padding-bottom: 14px;">
                <li class="cell">
                    <a href=""> <img src="web/images/jys_module3.png" alt="" width="100%"></a>
                </li>
            </ul>

            <!-- 合作品牌滑动-->
            <div class="brand-swiper swiper-container">

                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <ul class="mui-flex">
                            <li class="cell"><img src="http://www.jysgcd.com/uploadfile/2016/0202/20160202035933328.png" alt="" width="100%"></li>
                            <li class="cell"><img src="http://www.jysgcd.com/uploadfile/2016/0202/20160202030400123.png" alt="" width="100%"></li>
                            <li class="cell"><img src="http://www.jysgcd.com/uploadfile/2016/0202/20160202040043559.png" alt="" width="100%"></li>
                        </ul>
                        <ul class="mui-flex">
                            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="http://www.jysgcd.com/uploadfile/2016/0202/20160202035509153.png" alt="" width="100%"></li>
                            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="http://www.jysgcd.com/uploadfile/2016/0202/20160202032049589.png" alt="" width="100%"></li>
                            <li class="cell" style="position: relative;"><img src="web/images/jys_empty.png" alt="" style="top: -50%;"  width="100%"></li>
                        </ul>
                    </div>
                    <div class="swiper-slide ">
                        <ul class="mui-flex">
                            <li class="cell"><img src="http://www.jysgcd.com/uploadfile/2016/0202/20160202030912800.png" alt="" width="100%"></li>
                            <li class="cell"><img src="http://www.jysgcd.com/uploadfile/2016/0202/20160202031208795.png" alt="" width="100%"></li>
                            <li class="cell"><img src="http://www.jysgcd.com/uploadfile/2016/0202/20160202031616981.png" alt="" width="100%"></li>
                        </ul>
                        <ul class="mui-flex">
                            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="http://www.jysgcd.com/uploadfile/2016/0202/20160202031700508.png" alt="" width="100%"></li>
                            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="http://www.jysgcd.com/uploadfile/2016/0202/20160202031436487.png" alt="" width="100%"></li>
                            <li class="cell" style="position: relative;"><img src="web/images/jys_empty.png" alt="" style="top: -50%;"  width="100%"></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-pagination style-pagination" style="bottom: 0px;"></div>
            </div>

        </div>
        <!-- end 合作品牌-->
        <!-- 优秀团队-->
        <div class="team-wrap">
            <ul class="title mui-flex" style="padding-top: 15px;padding-bottom: 14px;">
                <li class="cell">
                    <a href=""> <img src="web/images/jys_module4.png" alt="" width="100%"></a>
                </li>
            </ul>
            <div class="team-swiper" style="height: 450px;">
                <ul>
                    <li><span><img src="http://www.jysgcd.com/uploadfile/2016/0203/20160203111739984.jpg" width="100%" height="" alt=""></span></li>
                    <li><span><img src="http://www.jysgcd.com/uploadfile/2016/0203/20160203112240768.jpg" width="100%" height="" alt=""></span></li>
                    <li><span><img src="http://www.jysgcd.com/uploadfile/2016/0203/20160203113414197.jpg" width="100%" height="" alt=""></span></li>

                    <li><span><img src="http://www.jysgcd.com/uploadfile/2016/0203/20160203113126762.jpg" width="100%" height="" alt=""></span></li>
                    <li><span><img src="web/images/W020141229602971344597.jpg" width="100%" height="" alt=""></span></li>
                </ul>
            </div>
        </div>
        <!-- end 优秀团队-->
        <!-- 联系我们-->
        <div class="contact-us">
            <ul class="title mui-flex" style="padding-top: 15px;padding-bottom: 14px;">
                <li class="cell">
                    <a href=""> <img src="web/images/jys_module5.png" alt="" width="100%"></a>
                </li>
            </ul>
            <ul class="muiflex">
                <li class="cell"></li>
                <li class="cell" style="position: relative;text-align: center">
                    <img src="web/images/jys_phone_icon.png" alt="" width="15">

                    <p style="font-weight: bold;font-size: 14px;color: #ffffff">电话</p>

                    <p style="color:#c9c9c9;font-size: 12px;">0553-3855888</p>

                    <p style="color:#c9c9c9;font-size: 12px;">我们的工作时间8:30-5:30</p>
                </li>
                <li class="cell"></li>
            </ul>
            <ul class="muiflex">
                <li class="cell"></li>
                <li class="cell" style="position: relative;text-align: center">
                    <img src="web/images/line.png" alt=""><br/>
                    <img src="web/images/jys_mail_icon.png" alt="" width="18">

                    <p style="font-weight: bold;font-size: 14px;color: #ffffff">邮箱</p>

                    <p style="color:#c9c9c9;font-size: 12px;">jysgcd@163.com</p>

                    <p style="color:#c9c9c9;font-size: 12px;">jysgcd@163.com</p>
                </li>
                <li class="cell"></li>
            </ul>
            <ul class="muiflex" style="padding-bottom: 35px;">
                <li class="cell"></li>
                <li class="cell" style="position: relative;text-align: center">
                    <img src="web/images/line.png" alt=""><br/>
                    <img src="web/images/jys_address_icon.png" alt="" width="12">

                    <p style="font-weight: bold;font-size: 14px;color: #ffffff">地址</p>

                    <p style="color:#c9c9c9;font-size: 12px;">安徽省 芜湖市 镜湖区</p>

                    <p style="color:#c9c9c9;font-size: 12px;">欧亚达正元家居一楼C厅</p>
                </li>
                <li class="cell"></li>
            </ul>

            <a href="#top">
                <img src="web/images/jys_top-icon.png" alt="" width="30" style="position: absolute;bottom: 0;left: 50%;margin-left: -15px;display: block">
            </a>

        </div>
        <!-- end 联系我们-->

        <!-- footer-->
        <div class="footer">
            Copyright © 2015金钥匙装饰 皖ICP备10011451号-6
        </div>
        <!-- end footer-->

    </div>
    <!-- end 主内容-->

</div>
</body>
<script src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/swiper.min.js"></script>
<script src="web/js/index.js"></script>
<script src="web/js/jquery.roundabout.js"></script>
<script src="web/js/jquery.roundabout-shapes.js"></script>

<script>
    $(document).ready(function() {
        $('.team-swiper ul').roundabout({
                autoplay: true,
                autoplayDuration: 3000,
                autoplayPauseOnHover: false,
                shape: 'figure8',
                minOpacity: 1

        });
    });
</script>
<script>
    //banner滑动
    var banner = new Swiper('.banner', {
        autoplay: 3000,//可选选项，自动滑动
        loop : true,//是否循环
        pagination : '.swiper-pagination',//分页器
        autoHeight:true,//内容高度自适应
        paginationClickable :true,//分页是否可以点击
    })
    //样式滑动
    var swiper = new Swiper('.style-display', {
        pagination: '.style-pagination',
        paginationClickable: true,
        autoplay:3000,
    });
    //合作品牌滑动
    var swiper = new Swiper('.brand-swiper', {
        pagination: '.style-pagination',
        paginationClickable: true,
        autoplay:3000,
    });

   // //优秀团队滑动
   // var swiper = new Swiper('.team-swiper', {
   //     pagination: '.style-pagination',
   //     paginationClickable: true,
   //     autoplay:3000,
   // });



    //照片墙图片高度
    var imgHeight= $('#img').height();

    $('#img1').height(imgHeight);



    //ajax获取今日记录

    $.ajax({

        type :"POST",
        dataType: "json",
        url: "index.php?c=index&a=get_today",
        success:function(data){
            var length=data.length;
            for(var i=0;i<length;i++){
                $('#num').html(data[i].num);
            }


        }
    });

    //ajax 加载小区
    $.ajax({

        type :"POST",
        dataType: "json",
        url: "index.php?c=index&a=getcity",
        success:function(data){
            var length=data.length;
            for(var i=0;i<length;i++){
                var html = "<option id='city_id" + data[i].id + "'value='" + data[i].city_name + "' >" + data[i].city_name + "</option>";
                $(".City_select").append(html);
            }
        }
    });

    //ajax 加载装修风格
    $.ajax({

        type :"POST",
        dataType: "json",
        url: "index.php?c=index&a=getstyle",
        success:function(data){
            var length=data.length;
            for(var i=0;i<length;i++){
                var html = "<option id='style_id" + data[i].id + "'value='" + data[i].style_name + "' >" + data[i].style_name + "</option>";
                $(".Style_select").append(html);
            }
        }
    });
    // 获取方案，表单验证
    $(".btn-plan").on("click",function(){
        var regArea=/^([+-]?)\d*\.?\d+$/;
        var regPhone = /(^13\d{9}$)|(^14)[5,7]\d{8}$|(^15[0,1,2,3,5,6,7,8,9]\d{8}$)|(^17)[6,7,8]\d{8}$|(^18\d{9}$)/g ;//手机
        var area=$("input[name='area']").val();
        var city_name=$("select[name='city_name']").val();
        var style_name=$("select[name='style_name']").val();
        var name=$("input[name='name']").val();
        var phone=$("input[name='phone']").val();
        if(area==""){
            alert("请输入建筑面积！");
            return false;
        }else if(!regArea.test(area)){
            alert("请正确输入建筑面积！");
            return false;
        }else if(city_name==""){
            alert("请选择小区！");
            return false;
        }else if(name==""){
            alert("请输入姓名！");
            return false;
        }else if(phone==""){
            alert("请输入手机号！");
            return false;
        }else if(!regPhone.test(phone)){
            alert("请正确输入手机号！");
            return false;
        }else if(style_name==""){
            alert("请选择风格！");
            return false;
        }
        // $(".form").submit();
    })


</script>
</html>
<ul class="mui-flex">
                        <li class=" fixed" style="width: 25%;">
                            <input type="text" name="area" placeholder="建筑面积㎡">
                        </li>
                        <li class=" fixed" style="width: 25%;margin-left: 7px;">
                            <select name="city_name" class="City_select">
                                <option value="">请选择小区</option>
                            </select>
                        </li>
                        <li class="cell" style="margin-left: 10px;color: #ffffff;font-size: 11px;line-height: 13px;">
                            今日已有 <span style="color: #f39700;font-size: 14px;" id="num"></span> 人<br/>
                            获取装修方案<br/>
                            <span style="color:#a0a0a0; ">装修风格</span>
                        </li>
                    </ul>
                    <ul class="mui-flex mt10">
                        <li class=" fixed" style="width: 50%;">
                            <input type="text" name="name" placeholder="姓名">
                        </li>
                        <li class="cell" style="margin-left: 10px;">
                            <select name="style_name" class="Style_select" >
                                <option value="">请选择风格</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="mui-flex mt10">
                        <li class=" fixed" style="width: 50%;">
                            <input type="text" name="phone" placeholder="手机号">
                        </li>
                        <li class="cell" style="margin-left: 10px;">
                            <input type="submit" class="btn-red btn-plan" value="获取方案">
                        </li>
                    </ul>