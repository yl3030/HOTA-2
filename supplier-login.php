<?php
    $pageName = "供應商登入";
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
             <li class="breadcrumb-item active" aria-current="page">供應商登入</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>


       <form action="" class="supplier-form form-login">
            <div class="d-flex align-items-center flex-wrap supplier-form_item">
                <label for="">代碼</label>
                <input type="text">
            </div>
            <div class="d-flex align-items-center flex-wrap supplier-form_item">
                <label for="">密碼</label>
                <input type="text">
            </div>
            <button>登入</button>
        </form>

        <div class="supplier-form_link d-flex flex-wrap align-items-center justify-content-center">
            <div class="supplier-form_remark">
                首次登入本網站者請先進行帳號註冊，以建立啟用帳號的確認作業，謝謝！
            </div>
            <a href="supplier-signin-step1.php">帳號註冊</a>
            <a href="supplier-passwordHelp.php">忘記密碼？</a>
            <a href="supplier-passwordChange.php">密碼變更</a>
            
        </div>

        <?php include("./include/supplier-contact.php") ?>
    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>