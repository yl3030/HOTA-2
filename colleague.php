<?php
    $pageName = "同仁專區";
    $pagePic = "./public/img/supplier-banner.png";
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
             <li class="breadcrumb-item"><a>和大集團</a></li>
             <li class="breadcrumb-item active" aria-current="page">同仁專區</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>


       <div class="colleague_link">
            <a href="https://owa.hota.com.tw/owa/auth/logon.aspx" target="_blank">進入Web Mail系統</a>
            <a href="">電子簽核</a>
       </div>
       

    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>