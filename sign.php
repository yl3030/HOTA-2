<?php
    $pageName = "電子簽核";
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
             <li class="breadcrumb-item"><a>同仁專區</a></li>
             <li class="breadcrumb-item active" aria-current="page">電子簽核</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>


       <div class="colleague_sign">
            <div class="container">
                <div class="colleague_sign_item">
                    <div class="colleague_sign_title">
                        <span>總管理處</span>
                        <img src="./public/img/triangle-white-down.svg" alt="">
                    </div>
                    <ul class="colleague_sign_list">
                        <li><a href="" target="_blank">假單</a></li>
                        <li><a href="" target="_blank">加班單</a></li>
                        <li><a href="" target="_blank">出差單</a></li>
                    </ul>
                </div>
                <div class="colleague_sign_item">
                    <div class="colleague_sign_title">
                        <span>資訊處</span>
                        <img src="./public/img/triangle-white-down.svg" alt="">
                    </div>
                    <ul class="colleague_sign_list">
                        <li><a href="" target="_blank">假單</a></li>
                        <li><a href="" target="_blank">加班單</a></li>
                        <li><a href="" target="_blank">出差單</a></li>
                    </ul>
                </div>
            </div>
       </div>
       

    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        $(".colleague_sign_title").click(function(){
            $(this).parents(".colleague_sign_item").find(".colleague_sign_list").slideToggle(300);
        })
        $(document).click(function (event) {
            var sign = $(".colleague_sign_item");
            if (!sign.is(event.target) && sign.has(event.target).length === 0) {
                $(".colleague_sign_list").slideUp(300);
            }
        });
    </script>

</body>
</html>