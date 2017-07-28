/*show and hide metering*/
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 100) {
        $('.slider-side-block').fadeIn();
    } else {
        $('.slider-side-block').fadeOut();
    }
});
/*/show and hide metering*/  