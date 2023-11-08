const swiper_thumbnail = new Swiper(".swiper_thumbnail", {
    slidesPerView: 5,
    spaceBetween: 10,
})
const swiper = new Swiper('.swiper_main', {
    loop: true,                         
    // autoplay: {                         
    //     delay: 2000,  
    // },                   
    navigation: {                       
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper_thumbnail,
    },
})