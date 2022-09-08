<?php
    $pageName = "工具機";
    $pagePic = "./public/img/tool-banner.png";
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
              <li class="breadcrumb-item active" aria-current="page">工具機</li>
            </ol>
        </nav>

       <?php include("./include/pageTitle.php") ?>

       <div class="product-list mb-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-list_item">
                            <a class="product-list_picTool" href="machineTool-content.php">
                                <img src="./public/img/tool-1.png" alt="">
                                <h2>| 滾齒機</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-list_item">
                            <a class="product-list_picTool" href="machineTool-content.php">
                                <img src="./public/img/tool-2.png" alt="">
                                <h2>| 刮齒機</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-list_item">
                            <a class="product-list_picTool" href="machineTool-content.php">
                                <img src="./public/img/tool-3.png" alt="">
                                <h2>| 倒角機</h2>
                                <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-list_item">
                            <a class="product-list_picTool">
                                <img src="./public/img/tool-4.png" alt="">
                                <h2>| 伺服壓床</h2>
                                <!-- <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-list_item">
                            <a class="product-list_picTool">
                                <img src="./public/img/tool-5.png" alt="">
                                <h2>| 齒輪量測機</h2>
                                <!-- <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-list_item">
                            <a class="product-list_picTool">
                                <img src="./public/img/tool-6.png" alt="">
                                <h2>| 自動化整合服務</h2>
                                <!-- <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div> -->
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