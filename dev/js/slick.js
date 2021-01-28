;(()=>{
    $('.indexAboutMeSlider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button type="button" class="indexAboutMeSliderBtn slick-prev"></button>',
        nextArrow: '<button type="button" class="indexAboutMeSliderBtn slick-next"></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 762,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ],
    });
})();