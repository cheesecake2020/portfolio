$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
    });

    // メニューボタン切り替え
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

// タイピングアニメーション
    var typed = new Typed(".typing", {
        strings: ["Freelance Engineer", "Designer", "Blogger"],
        typeSpeed: 100,
        BackSpeed: 60,
        loop: true
    });
    var typed = new Typed(".typing-2", {
        strings: ["Freelance Engineer", "Designer", "Blogger"],
        typeSpeed: 100,
        BackSpeed: 60,
        loop: true
    });
    
    
    // スライダー
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav:false
            },
            600:{
                items: 2,
                nav:false
            },
            1000:{
                items: 3,
                nav:false
            }
        }
    })
});