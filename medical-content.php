<?php
    $pageName = "";
    $pagePic = "./public/img/medical-banner.png";
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
        <nav class="breadcrumb-medical" aria-label="breadcrumb">
           <ol class="breadcrumb container d-flex justify-content-end">
             <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
             <li class="breadcrumb-item"><a>產品資訊</a></li>
             <li class="breadcrumb-item"><a href="medical.php">產品資訊</a></li>
             <li class="breadcrumb-item active" aria-current="page">電動輪椅</li>
           </ol>
       </nav>

       <div class="product-componentList medical-tab">
           <nav class="product-componentList_tab">
                <div class="nav nav-tabs container" id="nav-tab" role="tablist">
                  <a href="#" class="nav-link">UP-B1 基本型</a>
                  <a href="#" class="nav-link">UP-BX1 軸距延伸型</a>
                  <a href="#" class="nav-link">UP-E1 座椅上升型</a>
                  <a href="#" class="nav-link active">UP-EX1 豪華型</a>
                </div>
            </nav>
       </div>

       <div class="medical_slider">
           <div class="container">
               <div class="d-flex flex-wrap align-items-center">
                    <div class="medical_slider_left">
                        <h1>UP-EX1 豪華型</h1>
                        <p class="text-common">『諧和UNISON』是國內豪華電動輪椅品牌，操控靈活、乘坐穩定又安全，搭配軸距延伸及座椅上升功能，提供您最大的使用便利，讓您可輕鬆於室內或室外使用。全系列採用世界大廠控制系統，使用上更安心，另搭載照明燈、煞車燈與方向燈組，提供您更佳的行車安全。</p>
                        <div class="swiper-container medicalSmall d-lg-block d-none">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="medicalSmall_pic">
                                        <img src="./public/img/medical-wheelchair1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicalSmall_pic">
                                        <img src="./public/img/medical-wheelchair2.png" alt="">
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="medical_slider_right">
                        <div class="swiper-container medicalBig">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="medicalBig_pic">
                                        <img src="./public/img/medical-wheelchair1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicalBig_pic">
                                        <img src="./public/img/medical-wheelchair2.png" alt="">
                                    </div>
                                </div>
                            </div>     
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper-container medicalSmall d-lg-none">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="medicalSmall_pic">
                                        <img src="./public/img/medical-wheelchair1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicalSmall_pic">
                                        <img src="./public/img/medical-wheelchair2.png" alt="">
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
               </div>
           </div>
       </div>
       
       <div class="medical_content">
           <div class="container">
            <h2 class="title-content">產品內容</h2>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="medical_content_pic">
                        <img src="./public/img/medical-wheelchair3.png" alt="">
                    </div>
                    <p>PG大廠控制器</p>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="medical_content_pic">
                        <img src="./public/img/medical-wheelchair4.png" alt="">
                    </div>
                    <p>前照明燈與方向燈</p>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="medical_content_pic">
                        <img src="./public/img/medical-wheelchair5.png" alt="">
                    </div>
                    <p>燈組與方向燈</p>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="medical_content_pic">
                        <img src="./public/img/medical-wheelchair6.png" alt="">
                    </div>
                    <p>扶手可上掀設計</p>
                </div>
            </div>
           </div>
       </div>

       <div class="medical_feature">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-md-6 order-md-1 order-2">
                        <div class="medical_feature_left">
                            <ul>
                                <li>◎室內外均適用</li>
                                <li>◎厚實骨架、堅固耐用</li>
                                <li>◎烤漆外型、質感極佳</li>
                                <li>◎扶手可上掀及寬度可調設計</li>
                                <li>◎沙發型座椅</li>
                                <li>◎座椅可後躺功能</li>
                                <li>◎符合ISO 7176國際標準規範</li>
                                <li>◎衛署醫器製字第004908號</li>
                            </ul>
                        </div>
                   </div>
                   <div class="col-md-6 order-md-2 order-1">
                        <div class="medical_feature_right">
                            <img src="./public/img/medical-wheelchair7.png" alt="">
                        </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="medical_special gray-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="./public/img/medical-wheelchair8.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="medical_special_text">
                            <h2>電動座椅上升</h2>
                            <p>依循身形狀態與活動需求進行高度調整，隨時調整合適的座高，有助於提升轉移位的效率與安全性，也能讓使用者方便取得高處物品，生活更輕鬆。</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>

        <div class="medical_special">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="./public/img/medical-wheelchair9.png" alt="">
                    </div>
                    <div class="col-md-6 order-md-1 order-2">
                        <div class="medical_special_text">
                            <h2>電動軸距延伸</h2>
                            <p>藉由縮短前後軸距讓迴轉半徑變小，操作性及靈活性變更高，讓使用者不受狹窄空間所限制，讓駕馭更加靈巧敏捷。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="medical_spec">
            <div class="container">
                <table class="table-common d-md-table d-none">
                    <tr>
                        <td class="table-common_title" colspan="4">產品規格</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">總長(cm)</td>
                        <td>117</td>
                        <td class="table-common_name">最大載重(kg)</td>
                        <td>136</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">總寬(cm)</td>
                        <td>69</td>
                        <td class="table-common_name">續航力(km)</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">座寬</td>
                        <td>18" / 20"</td>
                        <td class="table-common_name">極速(km/h)</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">座高(cm)</td>
                        <td>58</td>
                        <td class="table-common_name">最大安全爬坡度</td>
                        <td>10°</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">前輪尺寸(充氣胎)</td>
                        <td>9"</td>
                        <td class="table-common_name">燈具 / 方向燈</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">後輪尺寸(充氣胎)</td>
                        <td>14"</td>
                        <td class="table-common_name">馬達規格</td>
                        <td>450W x 2顆</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">迴轉半徑(cm)</td>
                        <td>90</td>
                        <td class="table-common_name">電池規格</td>
                        <td>12V50Ah x 2組</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">過階高度(cm)</td>
                        <td>6</td>
                        <td class="table-common_name">控制器</td>
                        <td>PG VR2</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">電動座椅上升(cm)</td>
                        <td>23</td>
                        <td class="table-common_name">總重(kg)</td>
                        <td>148</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">電動軸距延伸(cm)</td>
                        <td>20</td>
                        <td class="table-common_name">總重(不含電池)(kg)</td>
                        <td>116</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">後躺角度(手動)</td>
                        <td>90°~135°</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="table-common d-md-none">
                    <tr>
                        <td class="table-common_title" colspan="2">產品規格</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">總長(cm)</td>
                        <td>117</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">最大載重(kg)</td>
                        <td>136</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">總寬(cm)</td>
                        <td>69</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">續航力(km)</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">座寬</td>
                        <td>18" / 20"</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">極速(km/h)</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">座高(cm)</td>
                        <td>58</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">最大安全爬坡度</td>
                        <td>10°</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">前輪尺寸(充氣胎)</td>
                        <td>9"</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">燈具 / 方向燈</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">後輪尺寸(充氣胎)</td>
                        <td>14"</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">馬達規格</td>
                        <td>450W x 2顆</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">迴轉半徑(cm)</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">電池規格</td>
                        <td>12V50Ah x 2組</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">過階高度(cm)</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">控制器</td>
                        <td>PG VR2</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">電動座椅上升(cm)</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">總重(kg)</td>
                        <td>148</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">電動軸距延伸(cm)</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">總重(不含電池)(kg)</td>
                        <td>116</td>
                    </tr>
                    <tr>
                        <td class="table-common_name">後躺角度(手動)</td>
                        <td>90°~135°</td>
                    </tr>
                </table>
                <ul>
                    <li>＊行車續航力依電池情況、溫度、地型路況、騎乘者與攜帶物品之重量而有所不同，此為80公斤乘坐者，於平坦道路狀況下所測得的數據。</li>
                    <li>＊規格配備以實車為主，本公司保有變更設計之權利。</li>
                </ul>
            </div>
        </div>
        
        <div class="medical_video">
            <div class="container">
                <h2 class="title-content">影片展示</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="medical_video_pic" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php include("./include/contact.php") ?>
    </main>

    <?php include("./include/videoPopup.php") ?>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>

        var swiperSmall = new Swiper(".medicalSmall", {
            slidesPerView: 2,
            spaceBetween: 15,
            loop: true,
            speed: 800,
        })

        var swiperBig = new Swiper(".medicalBig", {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: "fade",
            speed: 800,
            fadeEffect: {
                crossFade: true,
            },
            thumbs: {
                swiper: swiperSmall,
            },
        })
    </script>


</body>
</html>