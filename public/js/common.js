// import { CountUp } from './js/countup/countUp.min.js';

// window.onload = function() {
//     var countUp = new CountUp('num1', 2000);
//     countUp.start();
// }

AOS.init();

$(".header_nav_icon_inner").click(function(){
    $(this).parents(".header_nav_icon").find(".header_nav_second").slideToggle(500);
    $(this).parents(".header_nav_icon").siblings(".header_nav_icon").find(".header_nav_second").slideUp(500);
})

$(".header_lang_active").click(function(){
    $(this).parents(".header_lang").find(".header_lang_dropdown").slideToggle(300);
})

$(document).click(function(event){
    let area = $(".header_nav_icon");
    if(!area.is(event.target)&&area.has(event.target).length===0){
        $(this).find(".header_nav_second").slideUp(500);
    }
    let area_lang = $(".header_lang");
    if(!area_lang.is(event.target)&&area_lang.has(event.target).length===0){
        $(this).find(".header_lang_dropdown").slideUp(300);
    }
})

$(".header-menu").click(function(){
    // console.log("!!!");
    $(".header_nav-m").toggleClass("active");
})

$(".header_nav-m_dropdown_title").click(function(){
    $(this).toggleClass("active");
    $(this).parents(".header_nav-m_dropdown_item").find(".header_nav-m_dropdown-second").slideToggle(300);
    $(this).parents(".header_nav-m_dropdown_item").siblings(".header_nav-m_dropdown_item").find(".header_nav-m_dropdown_title").removeClass("active");
    $(this).parents(".header_nav-m_dropdown_item").siblings(".header_nav-m_dropdown_item").find(".header_nav-m_dropdown-second").slideUp(300);
})

$(".header_nav-m_title").click(function(){
    $(this).toggleClass("active");
    $(this).parents(".header_nav-m_item").find(".header_nav-m_dropdown").slideToggle(300);
    $(this).parents(".header_nav-m_item").siblings(".header_nav-m_item").find(".header_nav-m_title").removeClass("active");
    $(this).parents(".header_nav-m_item").siblings(".header_nav-m_item").find(".header_nav-m_dropdown").slideUp(300);
})

$(".footer_top").click(function(){
    $("html,body").animate({ scrollTop:0 },300)
})

// product
$(".component").mouseover(function(){
    let target = $(this).data("target");
    $(target).addClass("active");
    $(this).addClass("active");
    if($(this).parents(".product-box").hasClass("electricCar")) {
        if($(this).hasClass("component-1") || $(this).hasClass("component-3") || $(this).hasClass("component-5")) {
            $(".component-1").addClass("active");
            $(".component-3").addClass("active");
            $(".component-5").addClass("active");
        }else if($(this).hasClass("component-2") || $(this).hasClass("component-4")){
            $(".component-2").addClass("active");
            $(".component-4").addClass("active");
        }
    }else if($(this).parents(".product-box").hasClass("aerospace")){
        if($(this).hasClass("component-2") || $(this).hasClass("component-3")) {
            $(".component-2").addClass("active");
            $(".component-3").addClass("active");
        }
    }
})
$(".component").mouseleave(function(){
    let target = $(this).data("target");
    $(target).removeClass("active");
    $(this).removeClass("active");
    if($(this).parents(".product-box").hasClass("electricCar")) {
        if($(this).hasClass("component-1") || $(this).hasClass("component-3") || $(this).hasClass("component-5")) {
            $(".component-1").removeClass("active");
            $(".component-3").removeClass("active");
            $(".component-5").removeClass("active");
        }else if($(this).hasClass("component-2") || $(this).hasClass("component-4")){
            $(".component-2").removeClass("active");
            $(".component-4").removeClass("active");
        }
    }else if($(this).parents(".product-box").hasClass("aerospace")){
        if($(this).hasClass("component-2") || $(this).hasClass("component-3")) {
            $(".component-2").removeClass("active");
            $(".component-3").removeClass("active");
        }
    }
})

let componentIndex;
$(".product-componentList_item").click(function(){
    let pic = $(this).find(".product-componentList_pic").children("img").attr("src");
    $(".componentModal_pic").children("img").attr("src",pic);
    componentIndex = $(this).parents(".tab-pane").find(".product-componentList_item").index(this);
    
    console.log(componentIndex);

    let picName = $(this).find(".product-componentList_name").text();
    $(".componentModal_name").text(picName);
})


$(".componentModal_arrow").click(function(){
    let componentLength = $(".product-componentList_item").length - 1;
    if($(this).hasClass("prev")){
        if (componentIndex>0){
            componentIndex = componentIndex - 1;
        } else if(componentIndex==0){
            componentIndex = componentLength;
        }
    }else if($(this).hasClass("next")){
        if (componentIndex<componentLength){
            componentIndex = componentIndex + 1;
        } else if (componentIndex == componentLength){
            componentIndex = 0;
        }
    }
    let modalSRC = $(".product-componentList_item").eq(componentIndex).find(".product-componentList_pic").children("img").attr("src");
    let modalName =  $(".product-componentList_item").eq(componentIndex).find(".product-componentList_name").text();
    $(".componentModal_pic").children("img").attr("src", modalSRC);
    $(".componentModal_name").text(modalName);
})

// 檔案
$(".invest_list_title").click(function(){
    $(this).toggleClass("active");
    $(this).parents(".invest_list_item").find(".invest_list_content").slideToggle(500);
})


// youtube
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var done = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
    }
}
function stopVideo() {
    player.stopVideo();
}

var playerHanding,playerRolling;
function onYouTubeIframeAPIReady() {
    playerHanding = new YT.Player("news_video", {
        videoId: "SgUjftmFB4U",
        events: {
            onReady: stopVideo,
        },
    });
}

function stop() {
    playerHanding.stopVideo();
}

function onPlayer(event) {
    event.target.playVideo();
}

$(".modal-backdrop").click(function(){
    playerHanding.stopVideo();
})