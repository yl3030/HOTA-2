<?php
    $pageName = "傳動系統零組件";
    $pagePic = "./public/img/product-banner.png";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include("./include/meta.php") ?>
</head>
<body>
    <?php include("./include/header.php") ?>
    <main>
        <?php include("./include/banner.php") ?>

        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb container d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
              <li class="breadcrumb-item"><a>產品資訊</a></li>
              <li class="breadcrumb-item active" aria-current="page">傳動系統零組件</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="product-list mb-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="product-list_item">
                            <a class="product-list_picTop" href="electric-car.php">
                                <img src="./public/img/product-1.png" alt="">
                                <h2>| 電動車</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-list_item">
                            <a class="product-list_picTop" href="fuel-car.php">
                                <img src="./public/img/product-2.png" alt="">
                                <h2>| 燃油車</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-list_item" href="aerospace.php">
                            <a class="product-list_picTop">
                                <img src="./public/img/product-3.png" alt="">
                                <h2>| 航太</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-list_item">
                            <a class="product-list_picBottom" href="motorcycle.php">
                                <img src="./public/img/product-4.png" alt="">
                                <h2>| 重機</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-list_item">
                            <a class="product-list_picBottom" href="agricultural.php">
                                <img src="./public/img/product-5.png" alt="">
                                <h2>| 農建機</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>