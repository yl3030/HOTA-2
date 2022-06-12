// import { CountUp } from './js/countup/countUp.min.js';

// window.onload = function() {
//     var countUp = new CountUp('num1', 2000);
//     countUp.start();
// }

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