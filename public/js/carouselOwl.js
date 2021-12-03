$(document).ready(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 50,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 2,
            },
        },
    });
});
