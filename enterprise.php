<?php
    $pageName = "關係企業";
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
              <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
              <li class="breadcrumb-item"><a>關於和大</a></li>
              <li class="breadcrumb-item"><a>和大集團</a></li>
              <li class="breadcrumb-item active" aria-current="page">關係企業</li>
            </ol>
        </nav>

        
        <div class="enterprise">
            <?php include("./include/pageTitle.php") ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a href="http://www.hahota.cn/" target="_blank">和旺汽车部件(淮安)有限公司</a>
                            <p>機車、卡車、產業機械之傳動齒輪與軸類</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a href="https://www.kafo.com.tw/tw" target="_blank">高鋒工業股份有限公司【4510】</a>
                            <p>龍門加工中心機、五軸同動加工中心機、立式加工中心機、臥式加工中心機</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a>和嬴精工股份有限公司</a>
                            <p>汽車活塞環、汽機車零件加工</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a href="http://www.hahota.cn/">聚大智能科技股份有限公司</a>
                            <p>智能製造整合系統</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a>HOTATECH, INC.</a>
                            <p>美國加州銷售服務據點</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a href="https://www.duro.com.tw/tw/" target="_blank">華豐橡膠工業股份有限公司【2109】</a>
                            <p>各類橡膠輪胎製品</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enterprise_item">
                            <a href="http://www.gl-t.co.jp/" target="_blank">GLOBAL TECHNOS LTD.</a>
                            <p>日本大阪銷售服務據點</p>
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