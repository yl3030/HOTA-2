<?php
    $pageName = "企業願景";
    $pagePic = "./public/img/intro-banner.png";
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
              <li class="breadcrumb-item"><a href="./index.php">首頁</a></li>
              <li class="breadcrumb-item"><a>關於和大</a></li>
              <li class="breadcrumb-item"><a>和大集團</a></li>
              <li class="breadcrumb-item active" aria-current="page">企業願景</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="vision_banner" data-aos="fade-up" data-aos-duration="800">
            <div class="vision_banner_pic">
                <img src="./public/img/hope-pic1.png" alt="">
            </div>
            <h2>
                成為AI創新製造<br>
                傳動系統之領導者
            </h2>
        </div>

        <div class="mb-footer">
            <div class="container">
                <p class="text-common" data-aos="fade-up" data-aos-duration="800">
                    和大深根精密傳動製造技術，隨著資訊科技與工業技術的演進，以「成為AI創新製造傳動系統之領導者」為企業願景，以帶領臺灣汽車傳動零組件產業進入國際舞臺為目標，為實現組織願景，積極落實四大經營理念形塑企業文化，以新產品、新技術、新思維深耕齒輪製造本業，立足臺灣，佈局全球，朝向年營收百億企業邁進。
                </p>
    
                <div class="vision_content">
                    <div class="vision_item" data-aos="fade-up" data-aos-duration="800">
                        <div class="vision_item_pic"><img src="./public/img/hope-pic2.png" alt=""></div>
                        <div class="vision_item_text">
                            <div class="vision_item_text_inner">
                                <h3>經營理念</h3>
                                <p>淨零碳排、智慧製造技術創新、人才培育客戶滿意</p>
                            </div>
                        </div>
                    </div>
                    <div class="vision_item" data-aos="fade-up" data-aos-duration="800">
                        <div class="vision_item_pic"><img src="./public/img/hope-pic3.png" alt=""></div>
                        <div class="vision_item_text">
                            <div class="vision_item_text_inner">
                                <h3>環安衛政策</h3>
                                <p>全員環保、污染預防遵守法規、持續改善災害預防、諮商參與</p>
                            </div>
                        </div>
                    </div>
                    <div class="vision_item" data-aos="fade-up" data-aos-duration="800">
                        <div class="vision_item_pic"><img src="./public/img/hope-pic4.png" alt=""></div>
                        <div class="vision_item_text">
                            <div class="vision_item_text_inner">
                                <h3>品質政策</h3>
                                <p>
                                    高品質<br>
                                    重效率<br>
                                    零缺點
                                </p>
                            </div>
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