<?php
    $pageName = "醫療輔具";
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
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb container d-flex justify-content-end">
             <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
             <li class="breadcrumb-item"><a>產品資訊</a></li>
             <li class="breadcrumb-item active" aria-current="page">醫療輔具</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>

       <div class="product-list mb-footer">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="product-list_item">
                           <a class="product-list_picBottom" href="medical-content.php">
                               <img src="./public/img/medical-product1.png" alt="">
                               <h2>| 電動輪椅</h2>
                               <div class="product-list_arrow"><img src="./public/img/icon_arrow-more.svg" alt=""></div>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="product-list_item">
                           <a class="product-list_picBottom" href="medical-content.php">
                               <img src="./public/img/medical-product2.png" alt="">
                               <h2>| 電動代步車</h2>
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