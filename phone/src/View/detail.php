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
        <span style="margin-left: 55px;color: #ffffff"> <?php echo $data['title'] ?></span>
    </div>
    <!-- end header-->
    <!-- 内容-->
    <div class="content" style="background-color: #e6e6e6;padding-bottom: 42px;">

        <div class="content-panel" style="padding-bottom: 42px;">

            <div class="content-title">
                <?php echo $data['title'] ?>
            </div>
            <!-- 视频内容-->
            <div class="video-text">
                <?php echo $data['content'] ?>
            </div>
            <!-- end 视频内容-->
        </div>
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