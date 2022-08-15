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
