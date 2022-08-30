<?php
    $pageName = "密碼協助";
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
             <li class="breadcrumb-item"><a>供應商專區</a></li>
             <li class="breadcrumb-item active" aria-current="page">密碼協助</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>


       <p class="passwordHelp_intro">請輸入申請時的E-mail，系統將回傳密碼至該信箱</p>

        <form action="" class="supplier-form form-passwordHelp">
            <input type="text" placeholder="請輸入E-mail">
            <button>填完送出</button>
        </form>


        <?php include("./include/supplier-contact.php") ?>
    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>