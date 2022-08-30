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
                <a href="supplier-signin-step1.php">1.檢查供應商代碼</a>
                <a class="active" href="supplier-signin-step2.php">2.建立身份資料</a>
                <a href="supplier-signin-step3.php">3.申請完成</a>
            </div>
        </div>

        

        <div class="d-flex supplier_signin">
            <div class="supplier_signin_tab d-lg-block d-none">
                <h1>帳號註冊</h1>
                <div class="supplier_signin_btn">
                    <a href="supplier-signin-step1.php">1.檢查供應商代碼</a>
                    <a class="active" href="supplier-signin-step2.php">2.建立身份資料</a>
                    <a href="supplier-signin-step3.php">3.申請完成</a>
                </div>
            </div>
            <div class="supplier_signin_content step2">
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
                    <div class="supplier_signin_inform">
                        <p>請輸入以下資訊：</p>
                        <div class="supplier_signin_inform_item">
                            <label for="">供應商</label>
                            <input type="text" value="和大工業股份有限公司">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">密碼</label>
                            <input type="password">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">再次輸入密碼</label>
                            <input type="password">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">使用者名稱</label>
                            <input type="text">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">E-mail</label>
                            <input type="email">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">公司地址</label>
                            <input type="address">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">聯絡電話</label>
                            <input type="number">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">傳真</label>
                            <input type="number">
                        </div>
                        <div class="supplier_signin_inform_item">
                            <label for="">行動電話</label>
                            <input type="number">
                        </div>
                        <div class="supplier_signin_inform_btn">
                            <a href="supplier-signin-step1.php">上一步</a>
                            <a href="supplier-signin-step3.php">下一步</a>
                        </div>
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