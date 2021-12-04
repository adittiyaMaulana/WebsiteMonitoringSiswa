$(document).ready(function () {
    var owlInformasi = $(".owl-informasi");
    var owlStrukturOrganisasi = $(".owl-struktur-organisasi");

    owlInformasi.owlCarousel({
        items: 2,
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

    owlStrukturOrganisasi.owlCarousel({
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
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });


});
