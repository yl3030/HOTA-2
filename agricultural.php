<?php
    $pageName = "農建機";
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

        <div class="agricultural product-box">
            <div class="product_top">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb container d-flex justify-content-end">
                     <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                     <li class="breadcrumb-item"><a>產品資訊</a></li>
                     <li class="breadcrumb-item"><a href="transmission.php">傳動系統零組件</a></li>
                     <li class="breadcrumb-item active" aria-current="page">農建機</li>
                   </ol>
               </nav>
               
               <!-- title -->
               <?php include("./include/pageTitle.php") ?>
            </div>

            <div class="agricultural_content product-box_content">
                <img class="agricultural_main product-box_main" src="./public/img/agricultural.png" alt="">

                <div class="component component-1" data-target="#component-pic-1">
                    <div class="component_inner">
                        <img class="component_icon_dash" src="./public/img/icon-dashCircle.svg" alt="">
                        <img class="component_icon" src="./public/img/icon-plus_1.svg" alt="">
                    </div>
                </div>
                <div class="component component-2" data-target="#component-pic-2">
                    <div class="component_inner">
                        <img class="component_icon_dash" src="./public/img/icon-dashCircle.svg" alt="">
                        <img class="component_icon" src="./public/img/icon-plus_1.svg" alt="">
                    </div>
                </div>
                <img class="component-pic component-pic-1" id="component-pic-1" src="./public/img/agricultural-1.png">
                <img class="component-pic component-pic-2" id="component-pic-2" src="./public/img/agricultural-2.png">
            </div>           
        </div>

        <div class="product-componentList">
            <nav class="product-componentList_tab">
                <div class="nav nav-tabs container" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="gearbox-tab" data-bs-toggle="tab" data-bs-target="#gearbox" type="button" role="tab" aria-controls="gearbox" aria-selected="true">變速箱及後橋零件</button>
                </div>
            </nav>
            <div class="product-componentList_tabContent">
                <div class="container">
                    <div class="tab-content pb-footer" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="gearbox" role="tabpanel" aria-labelledby="gearbox-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-3.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic2.svg" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/car-pic.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱6</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱7</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/noproduct.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>

    <?php include("./include/component-modal.php") ?>

    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>