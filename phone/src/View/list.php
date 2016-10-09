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

        <a href="index.php"><span class="back-arrow"></span></a>
        <span style="margin-left: 55px;color: #ffffff"><?php echo $catname['catname'] ?></span>
    </div>
    <!-- end header-->
    <!-- 内容-->
    <div class="content" style="background-color: #e6e6e6;padding-bottom: 42px;">

        <!-- 列表-->
        <?php
        foreach($data as $value){

            ?>
            <a href="index.php?c=index&a=show&id=<?php echo $value['id'] ?>">
                <ul class="newsList mui-flex" style="margin-bottom: 7px;">
                    <li class="cell">
                        <ul class="mui-flex">
                            <li class="cell fixed" style="width: 14%;">
                                <span style="font-size: 25px;font-family: impact"><?php echo date('d',$value['inputtime']) ?></span><br/>
                                <span style="font-size: 7px;"><?php echo date('Y.m',$value['inputtime']) ?></span>
                            </li>
                            <li class=" cell fixed fr" style="width: 86%;">
                                <p class="member-name"><?php echo $value['title'] ?></p>
                                <div class="news-info">
                                    <?php echo $value['description'] ?>
                                </div>
                                <div class="hit_num">
                                    <img src="web/images/hit_icon.png" alt="">点击<?php echo $value['views'] ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </a>

            <?php
        }
        ?>
        <!-- end 列表-->

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