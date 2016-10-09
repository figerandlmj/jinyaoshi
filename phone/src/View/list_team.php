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
        <span style="margin-left: 55px;color: #ffffff">优秀团队</span>
    </div>
    <!-- end header-->
    <!-- 内容-->
    <div class="content" style="background-color: #e6e6e6;padding-bottom: 42px;">

        <!-- 列表-->
        <?php

        foreach($data as $value){

            ?>

            <a href="index.php?c=index&a=show&id=<?php echo $value['id'] ?>">
                <ul class="team-list mui-flex" style="margin-bottom: 7px;">
                    <li class="cell">
                        <ul class="mui-flex">
                            <li class="cell fixed" style="width: 26%;">
                                <img src="<?php echo $value['thumb'] ?>" alt="" width="100%">
                            </li>
                            <li class=" cell fixed fr" style="width: 70%;margin-left: 3%;">
                                <p class="member-name"><?php echo $value['title'] ?></p>
                                <div class="member-intro"><?php echo $value['description'] ?></div>
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