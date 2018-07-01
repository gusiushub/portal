$('.slider-advertising').slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1238,
            settings: {
                centerPadding: '40px',
                slidesToShow: 4
            }
        },
        {
            breakpoint: 1026,
            settings: {
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 800,
            settings: {
                centerPadding: '40px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});