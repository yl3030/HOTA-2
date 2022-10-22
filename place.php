<?php
    $pageName = "全球據點";
    $pagePic = "./public/img/place-banner.png";
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

        <div class="place">
            <!-- breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb container d-flex justify-content-end">
                  <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                  <li class="breadcrumb-item"><a>關於和大</a></li>
                  <li class="breadcrumb-item active" aria-current="page">全球據點</li>
                </ol>
            </nav>
            
            <?php include("./include/pageTitle.php") ?>
            
            <div class="container">
                <p class="text-common" data-aos="fade-up" data-aos-duration="800">
                    和大集團建立了遍佈全球的營運版圖，幫助我們挖掘及提供多元化的優質投資機會。我們的經營範圍橫跨各洲，在多個主要城市設立當地據點，從而能夠在這些重要市場中拓展更遠大的宏觀，憑藉遍及全球的據點，我們能夠更深入地掌握市場，洞悉具體的投資機會。
                </p>
            </div>
    
            <div class="place_map">
                <img class="place_map_bg" src="./public/img/map.svg" alt="" data-aos="fade-up" data-aos-duration="800">
                <div class="place_map_pin pin-america" data-pin="#list-america">
                    <img class="pin-shadow" src="./public/img/shadow.png" alt="">
                    <img class="pin" src="./public/img/pin-america.svg" alt="">
                    <div class="place_map_list">
                        <ul>
                            <li>
                                <span>洛杉磯 辦事處</span>
                                <img src="./public/img/icon-person.svg" alt="">
                                <img src="./public/img/icon-earth.svg" alt="">
                            </li>
                            <li>
                                <span>底特律 辦事處</span>
                                <img src="./public/img/icon-earth.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="place_map_pin pin-maxico" data-pin="#list-maxico">
                    <img class="pin-shadow" src="./public/img/shadow.png" alt="">
                    <img class="pin" src="./public/img/pin-maxico.svg" alt="">
                    <div class="place_map_list">
                        <ul>
                            <li>
                                <span>蒙特雷 辦事處</span>
                                <img src="./public/img/icon-earth.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="place_map_pin pin-china" data-pin="#list-china">
                    <img class="pin-shadow" src="./public/img/shadow.png" alt="">
                    <img class="pin" src="./public/img/pin-china.svg" alt="">
                    <div class="place_map_list">
                        <ul>
                            <li>
                                <span>淮安 辦事處</span>
                                <img src="./public/img/icon-person.svg" alt="">
                                <img src="./public/img/icon-repair.svg" alt="">
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="place_map_pin pin-japan" data-pin="#list-japan">
                    <img class="pin-shadow" src="./public/img/shadow.png" alt="">
                    <img class="pin" src="./public/img/pin-japan.svg" alt="">
                    <div class="place_map_list">
                        <ul>
                            <li>
                                <span>大阪 辦事處</span>
                                <img src="./public/img/icon-person.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="place_map_pin pin-taiwan" data-pin="#list-taiwan">
                    <img class="pin-shadow" src="./public/img/shadow.png" alt="">
                    <img class="pin" src="./public/img/pin-taiwan.svg" alt="">
                    <div class="place_map_list">
                        <ul>
                            <li>
                                <span>中科廠</span>
                                <img src="./public/img/icon-person.svg" alt="">
                                <img src="./public/img/icon-repair.svg" alt="">
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大里廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大埔美一廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大埔美二廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大埔美三廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="place_map_list-m d-sm-none d-block">
                    <div class="place_map_list" id="list-america">
                        <ul>
                            <li>
                            <span>洛杉磯 辦事處</span>
                                <img src="./public/img/icon-person.svg" alt="">
                                <img src="./public/img/icon-earth.svg" alt="">
                            </li>
                            <li>
                                <span>底特律 辦事處</span>
                                <img src="./public/img/icon-earth.svg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="place_map_list" id="list-maxico">
                        <ul>
                            <li>
                                <span>蒙特雷 辦事處</span>
                                <img src="./public/img/icon-earth.svg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="place_map_list" id="list-china">
                        <ul>
                            <li>
                                <span>淮安 辦事處</span>
                                <img src="./public/img/icon-person.svg" alt="">
                                <img src="./public/img/icon-repair.svg" alt="">
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="place_map_list" id="list-japan">
                        <ul>
                            <li>
                                <span>大阪 辦事處</span>
                                <img src="./public/img/icon-person.svg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="place_map_list" id="list-taiwan">
                        <ul>
                            <li>
                                <span>中科廠</span>
                                <img src="./public/img/icon-person.svg" alt="">
                                <img src="./public/img/icon-repair.svg" alt="">
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大里廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大埔美一廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大埔美二廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                            <li>
                                <span>大埔美三廠</span>
                                <img src="./public/img/icon-gear.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="place_map_intro d-flex flex-wrap align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <img src="./public/img/icon-person.svg" alt="">
                        <span>銷售服務</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="./public/img/icon-repair.svg" alt="">
                        <span>研發技術</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="./public/img/icon-gear.svg" alt="">
                        <span>生產製造</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="./public/img/icon-earth.svg" alt="">
                        <span>倉儲中心</span>
                    </div>
                </div>
            </div>
    
            <div class="place_list pb-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>臺灣 臺中｜中科廠(總部)</h2>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+886 4 2569 2299</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+886 4 2569 0622</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">E-MAIL</span>
                                        <a href="mailto:sales@hota.com.tw" target="_blank" class="inform-content">sales@hota.com.tw</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">42881臺灣臺中市大雅區科雅路12號</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/EPqbPAAP1KccQ5j39" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-person.svg" alt="">
                                    <img src="./public/img/icon-repair.svg" alt="">
                                    <img src="./public/img/icon-gear.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>臺灣 臺中｜大里廠</h2>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+886 4 2491 2191</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+886 4 2491 2191</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">41278臺灣臺中市大里區仁化路115號</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/Lv399gpC9ztV5K8L6" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-gear.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>臺灣 嘉義｜大埔美一、二廠</h2>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+886 5 2955 699</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+886 5 2956 599</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">62255臺灣嘉義縣大埔美園區五路16、18號</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/AtinNxxvXgncHLQVA" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-gear.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>臺灣 嘉義｜大埔美三廠</h2>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+886 5 2955 699</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+886 5 2956 599</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">622011嘉義縣大林鎮大埔美園區三路29號<br>(91地號)</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/uEEx2tMeCJrVFu628" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-gear.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>中國 淮安｜辦事處</h2>
                                <h3>和旺汽⻋部件(淮安)有限公司</h3>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+86 517 89959988</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+86 517 89959180</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">E-MAIL</span>
                                        <a href="mailto:zc@hahota.cn" target="_blank" class="inform-content">zc@hahota.cn</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">WEB</span>
                                        <a href="www.hahota.com" target="_blank" class="inform-content">www.hahota.com</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">中国江苏省淮安市经济开发区深圳东路126号</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/4j54tnL7qjh4AyjM8" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-person.svg" alt="">
                                    <img src="./public/img/icon-repair.svg" alt="">
                                    <img src="./public/img/icon-gear.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>日本 大阪｜辦事處</h2>
                                <h3>株式会社 グローバルテクノス</h3>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+81 6 6195 2071</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+81 6 6324 1001</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">E-MAIL</span>
                                        <a href="mailto:ono@gl-t.co.jp" target="_blank" class="inform-content">ono@gl-t.co.jp</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">WEB</span>
                                        <a href="www.gl-t.co.jp" target="_blank" class="inform-content">www.gl-t.co.jp</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">〒533-0033 大阪市東淀川区東中島2-9-15日大和生ビル906</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/RZBg5HHcZNk3Jv3v7" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-person.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>美國 洛杉磯｜辦事處</h2>
                                <h3>HOTATECH, INC.</h3>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+1 626 401 3888</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+1 626 387 5451</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">E-MAIL</span>
                                        <a href="mailto:sales@hotaglobal.com" target="_blank" class="inform-content">sales@hotaglobal.com</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">WEB</span>
                                        <a href="www.hotatech.com" target="_blank" class="inform-content">www.hotatech.com</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">15348 E. Valley Blvd., City of Industry, CA91746, USA</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/HjxCB1ZhAR5NV72m8" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-person.svg" alt="">
                                    <img src="./public/img/icon-earth.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>美國 底特律｜辦事處</h2>
                                <h3>SOLO WORLD PARTNERS</h3>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+1 734 282 7200</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+1 734 282 7100</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">E-MAIL</span>
                                        <a href="mailto:acrysler@solowp.com" target="_blank" class="inform-content">acrysler@solowp.com</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">WEB</span>
                                        <a href="solowp.com" target="_blank" class="inform-content">solowp.com</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">13725 Pennsylvania Road, Riverview, MI48193, USA</span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/Wi3r3Wdwqu4TEVWEA" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-earth.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="place_list_content">
                                <h2>墨西哥 蒙特雷│辦事處</h2>
                                <h3>SOLO World Partners de Mexico, S. de R. L. de C.V.</h3>
                                <ul>
                                    <li>
                                        <span class="inform-title">TEL</span>
                                        <span class="inform-content">+52-81-4162-3624</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">FAX</span>
                                        <span class="inform-content">+1-248-856-2642</span>
                                    </li>
                                    <li>
                                        <span class="inform-title">E-MAIL</span>
                                        <a href="mailto:info@solowp.com" target="_blank" class="inform-content">info@solowp.com</a>
                                    </li>
                                    <li>
                                        <span class="inform-title">ADD</span>
                                        <span class="inform-content">
                                            Avenida Internacional #170<br>
                                            Fracc. Vynmsa Escobedo Industrial Park<br>
                                            Escobedo, N.L., C.P. 66050｜Mexico
                                        </span>
                                    </li>
                                </ul>
                                <div class="place_list_bottom">
                                    <a href="https://goo.gl/maps/FevbBfJwiy4pwuQ2A" target="_blank">顯示地圖</a>
                                    <img src="./public/img/icon-earth.svg" alt="">
                                </div>
                            </div>
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