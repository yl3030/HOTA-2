<?php
    $pageName = "滾齒機";
    $pagePic = "./public/img/tool-banner.png";
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
        <nav class="breadcrumb-medical" aria-label="breadcrumb">
           <ol class="breadcrumb container d-flex justify-content-end">
             <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
             <li class="breadcrumb-item"><a>產品資訊</a></li>
             <li class="breadcrumb-item"><a href="machineTool-list.php">工具機</a></li>
             <li class="breadcrumb-item active" aria-current="page">滾齒機</li>
           </ol>
       </nav>

       <div class="product-componentList medical-tab tool-tab">
           <nav class="product-componentList_tab">
                <div class="nav nav-tabs container" id="nav-tab" role="tablist">
                  <a href="#" class="nav-link active">HGH 150/250</a>
                  <a href="#" class="nav-link">臥式 HGH 80</a>
                </div>
            </nav>
       </div>

       <div class="tool_pic">
           <img src="./public/img/tool-7.png" alt="">
       </div>

       <div class="tool_spec">
           <div class="container">
               <div class="tool_spec_inner">
                <table class="table-common">
                    <tr>
                        <td class="table-common_title" colspan="5">產品規格</td>
                    </tr>
                    <tr>
                        <td class="table-common_secondTitle">項目</td>
                        <td class="table-common_secondTitle">敘述</td>
                        <td class="table-common_secondTitle">單位</td>
                        <td class="table-common_secondTitle">HGH 250</td>
                        <td class="table-common_secondTitle">HGH 150</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="2">工件</td>
                        <td class="bg-tran">最大工件外徑</td>
                        <td class="bg-tran">mm</td>
                        <td>250</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">最大模數</td>
                        <td class="bg-tran">mm</td>
                        <td>6</td>
                        <td>4 (6)</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">徑向進給 X 軸 </td>
                        <td class="bg-tran">刀具軸至工件軸中心距離</td>
                        <td class="bg-tran">mm</td>
                        <td>25~215</td>
                        <td>25~190</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">軸向進給 Z 軸</td>
                        <td class="bg-tran">最大行程</td>
                        <td class="bg-tran">mm</td>
                        <td>250</td>
                        <td>250</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">刀具頭迴轉 A 軸</td>
                        <td class="bg-tran">迴轉角度</td>
                        <td class="bg-tran"></td>
                        <td>±45º</td>
                        <td>±45º</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">刀具軸向進給 V 軸</td>
                        <td class="bg-tran">最大行程</td>
                        <td class="bg-tran">mm</td>
                        <td>180</td>
                        <td>140 (180)</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="3">刀具主軸 B 軸</td>
                        <td class="bg-tran">最大刀具長度</td>
                        <td class="bg-tran">mm</td>
                        <td>220</td>
                        <td>160 (200)</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">最高轉速</td>
                        <td class="bg-tran">rpm</td>
                        <td>1500</td>
                        <td>1500</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">最大刀具外徑</td>
                        <td class="bg-tran">mm</td>
                        <td>130</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">工件迴轉主軸 C 軸</td>
                        <td class="bg-tran">最高轉速</td>
                        <td class="bg-tran">rpm</td>
                        <td>300</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="3">電力規格</td>
                        <td class="bg-tran">工作電壓</td>
                        <td class="bg-tran">V AC</td>
                        <td>3Φ 380</td>
                        <td>3Φ 380</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">頻率</td>
                        <td class="bg-tran">Hz</td>
                        <td>50-60</td>
                        <td>50-60</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">控制電壓</td>
                        <td class="bg-tran">V DC</td>
                        <td>24</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="2">油壓單元</td>
                        <td class="bg-tran">馬達</td>
                        <td class="bg-tran">KW</td>
                        <td>1.5</td>
                        <td>1.5</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">油箱</td>
                        <td class="bg-tran"></td>
                        <td>80 Liter</td>
                        <td>80 Liter</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="2">控制器</td>
                        <td class="bg-tran">－－</td>
                        <td class="bg-tran"></td>
                        <td>SIEMENS / FANUC</td>
                        <td>SIEMENS / FANUC</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">伺服控制軸(伺服軸)</td>
                        <td class="bg-tran"></td>
                        <td>B、C、X、Z、A、V</td>
                        <td>B、C、X、Z、A、V</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="4">操作介面</td>
                        <td class="bg-tran">型式/語言</td>
                        <td class="bg-tran"></td>
                        <td>對話式 / 中文或英文</td>
                        <td>對話式 / 中文或英文</td>
                    </tr>
                    <tr>
                        <td class="bg-tran" rowspan="3">加工方式</td>
                        <td class="bg-tran"></td>
                        <td>標準6種加工模式</td>
                        <td>標準6種加工模式</td>
                    </tr>
                    <tr>
                        <td class="bg-tran"></td>
                        <td>鼓型齒 / 蝸輪</td>
                        <td>鼓型齒 / 蝸輪</td>
                    </tr>
                    <tr>
                        <td class="bg-tran"></td>
                        <td>雙層齒加工</td>
                        <td>雙層齒加工</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">切削模式</td>
                        <td class="bg-tran">切削方式</td>
                        <td class="bg-tran"></td>
                        <td>乾式 / 溼式</td>
                        <td>乾式 / 溼式</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">機台尺寸</td>
                        <td class="bg-tran">寬 x 深 x 高</td>
                        <td class="bg-tran">mm</td>
                        <td>2688 x 2630 x 2885</td>
                        <td>2688 x 2630 x 2885</td>
                    </tr>
                    <tr>
                        <td class="bg-tran">機台重量</td>
                        <td class="bg-tran">－－</td>
                        <td class="bg-tran">KG</td>
                        <td>9000</td>
                        <td>9000</td>
                    </tr>
                </table>

               </div>
           </div>
       </div>
       
        
        <div class="medical_video">
            <div class="container">
                <h2 class="title-content">影片展示</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="medical_video_pic video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-1">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-2">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-3">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-4">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-5">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="medical_video_pic video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-6">
                            <img src="./public/img/news-pic6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php include("./include/contact.php") ?>
    </main>

    <?php include("./include/videoPopup.php") ?>

    <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" onclick="stop()">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="news_videoBox">
                        <div>
                            <div id="news_video-1" class="news_video_main"></div>
                            <div id="news_video-2" class="news_video_main"></div>
                            <div id="news_video-3" class="news_video_main"></div>
                            <div id="news_video-4" class="news_video_main"></div>
                            <div id="news_video-5" class="news_video_main"></div>
                            <div id="news_video-6" class="news_video_main"></div>
                        </div>
                        <p data-bs-dismiss="modal" class="close_btn">close</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        var video1, video2, video3, video4, video5, video6;
        function onYouTubeIframeAPIReady() {
            video1 = new YT.Player("news_video-1", {
                videoId: "SgUjftmFB4U",
                events: {
                    onReady: stopVideo,
                },
            });
            video2 = new YT.Player("news_video-2", {
                videoId: "IzVqamf7XhE",
                events: {
                    onReady: stopVideo,
                },
            });
            video3 = new YT.Player("news_video-3", {
                videoId: "cCZ-QTGgcko",
                events: {
                    onReady: stopVideo,
                },
            });
            video4 = new YT.Player("news_video-4", {
                videoId: "ASxOA4vPBVg",
                events: {
                    onReady: stopVideo,
                },
            });
            video5 = new YT.Player("news_video-5", {
                videoId: "GjMWlZkwZt8",
                events: {
                    onReady: stopVideo,
                },
            });
            video6 = new YT.Player("news_video-6", {
                videoId: "UCIsDJgHdlA",
                events: {
                    onReady: stopVideo,
                },
            });
        }

        function stop() {
            video1.stopVideo();
            video2.stopVideo();
            video3.stopVideo();
            video4.stopVideo();
            video5.stopVideo();
            video6.stopVideo();
        }
    </script>

</body>
</html>