$(function(){
    $('.our-clients-slider').slick({
        slidesToShow:3,
        slidesToScroll: 1,
        rows: 1,
        arrows: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        infinite: true,
        draggable: true,
        dots: false,
        prevArrow: $('.our-clients-left-arrow'),
        nextArrow: $('.our-client-right-arrow'),
        responsive: [
            {
                breakpoint: 1225,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 630,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
    });

});