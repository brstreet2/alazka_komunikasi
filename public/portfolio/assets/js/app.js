$(window).on('load', function() {

    //  Masonry Initialization
    $('.masonry').masonry({
        itemSelector: '.masonry-item',
        columnWidth: 200,
        gutter: 20,
        columnWidth: ".masonry-sizer",
        percentPostition: true
    });
    //  End Masonry Initialization

    //  btn-to-top Animation
    $('.btn-to-top').on('click', function() {
        $('html', 'body').animate({ 
            scrollTop: "0",
        }, 1500);
    });
    //  End Animation

    //  Initialize Animate on Scroll Library
    AOS.init();
    //  End Initialize
    
    //  Portfolio Isotope
    const portfolioIstope = $('.portfolio-container').isotope({ 
        itemSelector: '.portfolio-item',
    });
    //  End Portfolio Isotope

    //  Filter On Click
    $('.portfolio-filters li').on('click', function(){ 
        $('.portfolio-filters li').removeClass('filter-active');
        $(this).addClass("filter-active");
        //  Isotope Filtering
        portfolioIstope.isotope({ 
            filter: $(this).data('filter'),
        });
        //  End Isotope Filtering
        // AOS Re-initialization
        AOS.init();
    });
    //  End Filter on Click

    $('.slider-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});