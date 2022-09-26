$(window).on("scroll", function() {
    if ($(".navbar").offset().top > 40) {
        $(".navbar").addClass("navbar-fixed");
    } else {
        $(".navbar").removeClass("navbar-fixed");
    }
})

$(document).ready(function() {
    var portafolioIsotope = $('.portafolio-container').isotope({
        itemSelector: '.portafolio-item'
    });

    $('#portafolio-filters li').on("click", function() {
        $("#portafolio-filters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        portafolioIsotope.isotope({
            filter: $(this).data('filter')
        });
    });

    $('.popup-image').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        gallery: {
            enabled: true,
            navigateByImgClick: true
        }
    });



});