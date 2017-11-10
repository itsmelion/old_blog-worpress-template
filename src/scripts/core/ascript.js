$(function () {
    var cta = $("#scroll-cta-div");
    window.onscroll = function () {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            cta.fadeIn(200);
        } else {
            cta.fadeOut(300);
        }
    };
});