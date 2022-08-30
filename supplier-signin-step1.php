<?php
    $pageName = "";
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
        <nav class="d-lg-none" aria-label="breadcrumb">
            <ol class="breadcrumb container d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item"><a>和大集團</a></li>
                <li class="breadcrumb-item"><a>供應商專區</a></li>
                <li class="breadcrumb-item active" aria-current="page">帳號註冊</li>
            </ol>
        </nav>

        <!-- title -->
        <h1 class="title-page d-lg-none" data-aos="fade-up" data-aos-duration="800">帳號註冊</h1>

        <div class="supplier_signin_btn d-lg-none">
            <div class="container">
                <a class="active" href="supplier-signin-step1.php">1.檢查供應商代碼</a>
                <a href="supplier-signin-step2.php">2.建立身份資料</a>
                <a href="supplier-signin-step3.php">3.申請完成</a>
            </div>
        </div>

        

       <div class="d-flex supplier_signin">
            <div class="supplier_signin_tab d-lg-block d-none">
                <h1>帳號註冊</h1>
                <div class="supplier_signin_btn">
                    <a class="active" href="supplier-signin-step1.php">1.檢查供應商代碼</a>
                    <a href="supplier-signin-step2.php">2.建立身份資料</a>
                    <a href="supplier-signin-step3.php">3.申請完成</a>
                </div>
            </div>
            <div class="supplier_signin_content step1">
                <div class="inner">
                    <!-- breadcrumb -->
                    <nav class="d-lg-block d-none" aria-label="breadcrumb">
                        <ol class="breadcrumb container d-flex justify-content-end">
                            <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                            <li class="breadcrumb-item"><a>和大集團</a></li>
                            <li class="breadcrumb-item"><a>供應商專區</a></li>
                            <li class="breadcrumb-item active" aria-current="page">帳號註冊</li>
                        </ol>
                    </nav>
                    <div class="supplier_signin_numInput">
                        <div class="d-flex flex-wrap justify-content-between supplier_signin_numInput_form">
                            <input type="number" placeholder="請輸入代碼">
                            <button>檢查供應商代碼</button>
                        </div>
                        <div class="supplier_signin_numInput_comfirm">
                            <label for="">代碼確認</label>
                            <p>和大工業股份有限公司</p>
                        </div>
                        <button>下一步</button>
                    </div>
                </div>
            </div>
       </div>

       <?php include("./include/supplier-contact.php") ?>
    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>