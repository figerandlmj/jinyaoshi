<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="web/css/phone_base.css">
    <link rel="stylesheet" href="web/css/jinyaoshi.css">
    <link rel="stylesheet" href="web/css/swiper.css">

</head>
<body>
<div class="container">

    <!-- header-->
    <div class="header">

        <a href="index.php?c=index&a=combo"><span class="back-arrow"></span></a>
        <span style="margin-left: 55px;color: #ffffff">套餐详情</span>
    </div>
    <!-- end header-->
    <!-- 内容-->
    <div class="content" style="background-color: #e6e6e6;padding-bottom: 42px;">
        <!-- video-->
        <embed src="<?php echo $data['videourl'] ?>" quality="high" width="100%" height="187" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
        <!--end video-->
        <!-- detail-->
        <div class="gray-top mt10"></div>
        <div style="padding: 0 7px;">
            <div class="plan-box">
                <ul class="mui-flex">
                    <li class="cell" style="border-right: 1px dashed #dcdcdc ">
                        <span style="color: #b60006;font-size: 36px;"><?php echo $data['price'] ?> <span style="font-size: 16px;">元/㎡</span></span><br/>
                        <span style="font-size: 9px;color: #707070">一口价</span>
                    </li>
                    <li class="cell">
                        <p class="font-10 ml15">设计风格：<?php echo $data['style'] ?></p>
                        <p class="font-10 mt10 ml15">人群定位：<?php echo $data['dingwei'] ?></p>
                    </li>
                </ul>
                <ul class="mui-flex mt22">
                    <li class="cell">
                        <p class="font-707070 mb8">色彩方案</p>
                        <?php
                        foreach($data['color'] as $colors){
                        ?>
                            <img src="<?php echo $colors['url'] ?>" alt="<?php echo $colors['alt'] ?>" width="37">
                        <?php
                        }
                        ?>

                    </li>
                </ul>
                <ul class="mui-flex mt22">
                    <li class="cell">
                        <p class="font-707070 mb8">设计说明</p>
                        <div>
                            <?php echo $data['description'] ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end detail-->


        <a href="#top">
            <img src="web/images/jys_top-icon.png" alt="" width="30" style="position: absolute;bottom: 0;left: 50%;margin-left: -15px;display: block">
        </a>

    </div>
    <!-- end 内容-->

    <!-- footer-->
    <div class="footer">
        Copyright © 2015金钥匙装饰 皖ICP备10011451号-6
    </div>
    <!-- end footer-->

</div>

</body>
</html>