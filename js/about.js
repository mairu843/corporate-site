jQuery(window).on('scroll', function () {
    　if (620 > jQuery(this).scrollTop()) {
    　　jQuery('.header-list-a').removeClass('change-black');
    　} else {
    　　jQuery('.header-list-a').addClass('change-black');
    　}
    });