<?php
    $pageName = "燃油車";
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

        <div class="fuelCar product-box">
            <div class="product_top">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb container d-flex justify-content-end">
                     <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                     <li class="breadcrumb-item"><a>產品資訊</a></li>
                     <li class="breadcrumb-item"><a href="transmission.php">傳動系統零組件</a></li>
                     <li class="breadcrumb-item active" aria-current="page">燃油車</li>
                   </ol>
               </nav>
               
               <?php include("./include/pageTitle.php") ?>
            </div>

            <div class="fuelCar_content product-box_content">
                <img class="fuelCar_main product-box_main" src="./public/img/fuelCar.png" alt="">

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
                <div class="component component-3" data-target="#component-pic-3">
                    <div class="component_inner">
                        <img class="component_icon_dash" src="./public/img/icon-dashCircle.svg" alt="">
                        <img class="component_icon" src="./public/img/icon-plus_1.svg" alt="">
                    </div>
                </div>
                <div class="component component-4" data-target="#component-pic-4">
                    <div class="component_inner">
                        <img class="component_icon_dash" src="./public/img/icon-dashCircle.svg" alt="">
                        <img class="component_icon" src="./public/img/icon-plus_1.svg" alt="">
                    </div>
                </div>
                <div class="component component-5" data-target="#component-pic-5">
                    <div class="component_inner">
                        <img class="component_icon_dash" src="./public/img/icon-dashCircle.svg" alt="">
                        <img class="component_icon" src="./public/img/icon-plus_1.svg" alt="">
                    </div>
                </div>
                <img class="component-pic component-pic-1" id="component-pic-1" src="./public/img/fuelCar-1.png">
                <img class="component-pic component-pic-2" id="component-pic-2" src="./public/img/fuelCar-2.png">
                <img class="component-pic component-pic-3" id="component-pic-3" src="./public/img/fuelCar-3.png">
                <img class="component-pic component-pic-4" id="component-pic-4" src="./public/img/fuelCar-4.png">
                <img class="component-pic component-pic-5" id="component-pic-5" src="./public/img/fuelCar-5.png">
            </div>           
        </div>

        <div class="product-componentList">
            <nav class="product-componentList_tab">
                <div class="nav nav-tabs container" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="gearBox-tab" data-bs-toggle="tab" data-bs-target="#gearBox" type="button" role="tab" aria-controls="gearBox" aria-selected="true">變速箱零組件</button>
                  <button class="nav-link" id="torque-tab" data-bs-toggle="tab" data-bs-target="#torque" type="button" role="tab" aria-controls="torque" aria-selected="false">扭力轉換系統零組件</button>
                  <button class="nav-link" id="transmission-tab" data-bs-toggle="tab" data-bs-target="#transmission" type="button" role="tab" aria-controls="transmission" aria-selected="false">傳動軸</button>
                  <button class="nav-link" id="differential-tab" data-bs-toggle="tab" data-bs-target="#differential" type="button" role="tab" aria-controls="differential" aria-selected="false">差速器</button>
                </div>
            </nav>
            <div class="product-componentList_tabContent">
                <div class="container">
                    <div class="tab-content pb-footer" id="nav-tabContent">
                        <div class="tab-pane fade show active" data-id="#gearBox" id="gearBox" role="tabpanel" aria-labelledby="gearBox-tab">
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
                        <div class="tab-pane fade" data-id="#torque" id="torque" role="tabpanel" aria-labelledby="torque-tab">
                            <div class="row">
                                <!-- <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-3.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱1</span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic2.svg" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/car-pic.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-6</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-7</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/noproduct.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱2-9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" data-id="#transmission" id="transmission" role="tabpanel" aria-labelledby="transmission-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-3.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic2.svg" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/car-pic.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-6</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-7</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/noproduct.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱3-9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" data-id="#differential" id="differential" role="tabpanel" aria-labelledby="differential-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-3.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/compete-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic2.svg" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/commitee-pic1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/car-pic.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-6</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-2.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-7</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/banner-1.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product-componentList_item" data-bs-toggle="modal" data-bs-target="#componentModal">
                                        <div class="product-componentList_pic"><img src="./public/img/noproduct.png" alt=""></div>
                                        <div class="text d-flex">
                                            <img src="./public/img/arrow-lightgreen-right.svg" alt="">
                                            <span class="product-componentList_name">零件名稱4-9</span>
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