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
              <li class="breadcrumb-item active" aria-current="page">履歷登入</li>
            </ol>
        </nav>

        <div class="work_list resume">
            <div class="resume_title">
                <h1>履歷登入</h1>
                <a class="resume_title_download" href="" download="">
                    <div class="download_icon">
                        <img class="normal" src="./public/img/icon-pdf.svg" alt="">
                        <img class="hover" src="./public/img/icon-pdf-white.svg" alt="">
                    </div>
                    <span>求職履歷表下載</span>
                </a>
                <p>請仔細填妥資料，並上傳履歷、相關佐證資料，我們竭誠歡迎有抱負的青年朋友加入，一起創造未來！</p>
            </div>
            <div class="resume_data">
                <div class="resume_data_title">
                    <h2>基本資料</h2>
                    <p><span>*</span>為必填(選)欄位，不能為空白。</p>
                </div>
                <div class="resume_data_table row">
                    <div class="col-12 d-flex">
                        <div class="resume_data_name">職務名稱</div>
                        <div class="resume_data_content">
                            堆高機操作(中科廠)
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="resume_data_name">姓名<span>*</span></div>
                        <div class="resume_data_content">
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="resume_data_name">性別<span>*</span></div>
                        <div class="resume_data_content">
                            <div class="">
                                <div class="resume_data_gender">
                                    <div class="gender">
                                        <div class="gender_circle">
                                            <div class="gender_circle_inner"></div>
                                        </div>
                                        <span>男</span>
                                    </div>
                                    <div class="gender">
                                        <div class="gender_circle">
                                            <div class="gender_circle_inner"></div>
                                        </div>
                                        <span>女</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="resume_data_name">出生日期<span>*</span></div>
                        <div class="resume_data_content">
                            <input type="text" id="datepicker" placeholder="選擇日期">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="resume_data_name">行動電話<span>*</span></div>
                        <div class="resume_data_content">
                            <input type="phone">
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="resume_data_name">聯絡信箱<span>*</span></div>
                        <div class="resume_data_content">
                            <input type="email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="resume_data">
                <div class="resume_data_title">
                    <h2>上傳履歷表</h2>
                </div>
                <div class="resume_data_upload">
                    <div class="resume_data_upload_item">
                        <div class="resume_data_upload_file"></div>
                        <div class="resume_data_upload_btn">
                            <span>選擇檔案</span>
                            <input type="file">
                        </div>
                        <p>（請下載本公司制式求職履歷表，填妥後並上傳檔案）</p>
                    </div>
                </div>
            </div>
            <div class="resume_data">
                <div class="resume_data_title">
                    <h2>上傳個人化附件</h2>
                </div>
                <div class="resume_data_upload">
                    <div class="resume_data_upload_item">
                        <div class="resume_data_upload_file"></div>
                        <div class="resume_data_upload_btn">
                            <span>選擇檔案</span>
                            <input type="file">
                        </div>
                        <p>（僅限 .pdf 或 .docx、2MB以內）</p>
                    </div>
                    <div class="resume_data_upload_item">
                        <div class="resume_data_upload_file"></div>
                        <div class="resume_data_upload_btn">
                            <span>選擇檔案</span>
                            <input type="file">
                        </div>
                        <p>（僅限 .pdf 或 .docx、2MB以內）</p>
                    </div>
                    <div class="resume_data_upload_item">
                        <div class="resume_data_upload_file"></div>
                        <div class="resume_data_upload_btn">
                            <span>選擇檔案</span>
                            <input type="file">
                        </div>
                        <p>（僅限 .pdf 或 .docx、2MB以內）</p>
                    </div>
                </div>
            </div>
            <button class="resume_btn mb-footer">提交履歷</button>
        </div>


        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        // 生日
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        
        // 性別
        $(".gender").click(function(){
            $(this).addClass("active").siblings(".gender").removeClass("active");
        })

        // 上傳檔案
        let input = $(".resume_data_upload_btn");
        input.change(function(e){
            let attachName = e.target.files[0].name;
            let fileName = $(this).parents(".resume_data_upload_item").find(".resume_data_upload_file");
            fileName.text(attachName);
        })
        // let input = document.querySelector('.resume_data_upload_btn');
        // input.addEventListener('change',function(e){
        //     let attachName = e.target.files[0].name;
        //     $(".inquiry-form_attach_name").text(attachName);
        //     $(".inquiry-form_attach_remark").hide();
        //     $(".inquiry-form_attach_delete").show().css("display","flex");
        // });
    </script>
</body>
</html>