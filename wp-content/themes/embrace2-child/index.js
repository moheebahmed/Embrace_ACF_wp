
$(document).ready(function ($) {
    var owl = $(".three-slider-box");
    owl.owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        // autoplay: true,
        autoplayTimeout: 4000,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
    $('.accordion .accordion__header').on('click', function () {
        var $currentAccordion = $(this).parent();
        var $content = $currentAccordion.find('.accordion__content');
        var $icon = $currentAccordion.find('#accordion-icon');
        var isOpen = $content.height() > 0;
        $('.accordion__content').height(0);
        $('.accordion #accordion-icon').removeClass('ri-subtract-fill').addClass('ri-add-line');
        if (!isOpen) {
            $content.height($content[0].scrollHeight);
            $icon.removeClass('ri-add-line').addClass('ri-subtract-fill');
        }
    });
});
