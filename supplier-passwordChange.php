<?php
    $pageName = "密碼變更";
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
             <li class="breadcrumb-item active" aria-current="page">密碼變更</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>


        <form action="" class="supplier-form form-passwordChange">
            <div class="form-passwordChange_item">
                <label for="">代碼</label>
                <input type="text">
            </div>
            <div class="form-passwordChange_item">
                <label for="">現有密碼</label>
                <input type="password">
            </div>
            <div class="form-passwordChange_item">
                <label for="">新密碼</label>
                <input type="password">
            </div>
            <div class="form-passwordChange_item">
                <label for="">再次確認新密碼</label>
                <input type="password">
            </div>
            <button>確認變更</button>
        </form>


        <?php include("./include/supplier-contact.php") ?>
    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>