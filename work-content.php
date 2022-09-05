<?php
    $pageName = "人才招募";
    $pagePic = "./public/img/recruit-banner.png";
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
              <li class="breadcrumb-item"><a>人才招募</a></li>
              <li class="breadcrumb-item"><a href="work.php">工作機會</a></li>
              <li class="breadcrumb-item active" aria-current="page">職缺內容</li>
            </ol>
        </nav>

        <div class="work_list work_content">
            <div class="work_content_title">
                <h2>職務名稱</h2>
                <h1>堆高機操作(中科廠)</h1>
            </div>
            <div class="work_content_intro">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <h3>工作地點：</h3>
                                <p>台中市大雅區科雅路12號 (中部科學園區)</p>
                            </li>
                            <li>
                                <h3>職務類別：</h3>
                                <p>生管、倉管</p>
                            </li>
                            <li>
                                <h3>工作性質：</h3>
                                <p>全職</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <h3>工作待遇：</h3>
                                <p>月薪30,000~47,000元</p>
                            </li>
                            <li>
                                <h3>上班時段：</h3>
                                <p>日班，08:00~17:00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="work_content_detail">
                <div class="work_content_detail_item">
                    <h2>工作內容</h2>
                    <ul>
                        <li>1.廠內運輸/堆高機</li>
                        <li>2.其它主管交辦事項</li>
                        <li>3.依工作需求須配合加班.(平日晚上)</li>
                        <li>4.需能配合周六輪值班(平均二次/月)</li>
                    </ul>
                </div>
                <div class="work_content_detail_item">
                    <h2>職缺需求</h2>
                    <ul>
                        <li>工作經歷：1年以上</li>
                        <li>學歷要求：高中、專科、大學</li>
                        <li>科系要求：不拘</li>
                        <li>語文條件：不拘</li>
                        <li>具備駕照：輕型機車、普通小型車</li>
                    </ul>
                </div>
                <div class="work_content_detail_item">
                    <h2>其他條件</h2>
                    <p>會開堆高機.具堆高機證照者佳</p>
                </div>
            </div>
            <div class="work_content_btn mb-footer d-flex justify-content-sm-center justify-content-between">
                <a class="btn-back" href="./work.php">返回職缺列表</a>
                <a class="btn-apply" href="./resume.php">我要應徵</a>
            </div>
        </div>


        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>