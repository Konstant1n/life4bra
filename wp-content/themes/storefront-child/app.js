let prev = document.querySelector(".feed_left");
let next = document.querySelector(".feed_right");
let slide1 = document.querySelector(".feed1");
let slide2 = document.querySelector(".feed2");
let slide3 = document.querySelector(".feed3");

next.onclick = function () {
    let curentSlide = document.querySelector(".feed_active");
    curentSlide.classList.remove("feed_active");
    curentSlide.classList.add("feed_not");

    let nextSlide = curentSlide.nextElementSibling;
    if (nextSlide) {
        nextSlide.classList.remove("feed_not");
        nextSlide.classList.add("feed_active")
    } else {
        nextSlide = document.querySelector(".feed_block div");
        nextSlide.classList.remove("feed_not");
        nextSlide.classList.add("feed_active")
    }
}

prev.onclick = function () {
    let curentSlide = document.querySelector(".feed_active")
    curentSlide.classList.remove("feed_active");
    curentSlide.classList.add("feed_not");

    let prevSlide = curentSlide.previousElementSibling;
    if (prevSlide) {
        prevSlide.classList.remove("feed_not");
        prevSlide.classList.add("feed_active")
    } else {
        prevSlide = document.querySelector(".feed3");
        prevSlide.classList.remove("feed_not");
        prevSlide.classList.add("feed_active")
    }
}



/* Promo slider */

jQuery(document).ready(function($) {
    var imgHead = [
        '/wp-content/themes/storefront-child/images/imgCsaHead/img1.webp',
        '/wp-content/themes/storefront-child/images/imgCsaHead/img2.webp',
        '/wp-content/themes/storefront-child/images/imgCsaHead/img.png',
    ], i=1;
    function csaHead(){
    
    if(i > (imgHead.length-1)){
        $('.csa-head').animate({'opacity':'0'},1500,function(){
            i=1;
            $('.csa-head').css({'background-image':'url('+imgHead[0]+')'});
        });
        $('.csa-head').animate({'opacity':'1'},1500);
    }else{
        var ss123 = $('.csa-head');
        $('.csa-head').animate({'opacity':'0'},1500,function(){
            $('.csa-head').css({'background-image':'url('+imgHead[i]+')'});
            i++;
        });
        $('.csa-head').animate({'opacity':'1'},1500);
    }
    
    }
    var intervalCsaHead = setInterval(csaHead,5000);

});
    
   