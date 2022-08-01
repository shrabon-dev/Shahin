$(".testimonial__img__slider").slick({
 arrows:false,
 asNavFor:'.testi__text__slider',
})
$(".testi__text__slider").slick({
    arrows:true,
    prevArrow:'<i class="fas fa-long-arrow-alt-right prev"></i>',
    nextArrow:'<i class="fas fa-long-arrow-alt-left next"></i>',
    asNavFor:'.testimonial__img__slider',
})

$(window).scroll(function() {
    if($(window).scrollTop()>650){
         $(".menu").addClass("fixed__menu")
    }else{
        $(".menu").removeClass("fixed__menu")
    }
})

AOS.init();


$('.design').click(function(){
    $('.two').css("display","none");
    $('.three').css("display","block");
    $('.four').css("display","none");
    $('.five').css("display","block");
})
$('.development').click(function(){
    $('.two').css("display","block");
    $('.three').css("display","none");
    $('.four').css("display","block");
    $('.five').css("display","none");
})
$('.app').click(function(){
    $('.two').css("display","block");
    $('.three').css("display","block");
    $('.four').css("display","none");
    $('.five').css("display","none");
})

$('.all').click(function(){
    $('.two').css("display","block");
    $('.three').css("display","block");
    $('.four').css("display","block");
    $('.five').css("display","block");
})
$('.ui').click(function(){
    $('.two').css("display","block");
    $('.three').css("display","block");
    $('.four').css("display","block");
    $('.five').css("display","block");
})