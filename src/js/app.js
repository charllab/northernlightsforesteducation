jQuery(function () {

    jQuery('.owl-carousel-content').owlCarousel({
        loop: true,
        margin:-200,
        autoplay: false,
        center: true,
        nav: true,
        navText: ["<div class='myprevimage'></div>","<div class='mynextimage'></div>"],
        responsive: {
            0: {
                items: 1
            },
            1200: {
                items: 3
            }
        }
    });

    jQuery('.owl-carousel-logos').owlCarousel({
        loop: true,
        margin:-100,
        autoplay: false,
        center: true,
        nav: true,
        navText: ["<div class='myprevimage'></div>","<div class='mynextimage'></div>"],
        responsive: {
            0: {
                items: 1
            },
            1200: {
                items: 3
            }
        }
    });

});
