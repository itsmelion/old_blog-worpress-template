$(function () {
    var cta = $("#scroll-cta-div");
    cta.hide();
    window.onscroll = function () {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            cta.fadeIn(230);
        } else {
            cta.fadeOut(230);
        }
    };
});