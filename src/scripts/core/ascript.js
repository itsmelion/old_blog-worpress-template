$(function () {

});

var scrollSpy = function () {
    var spy;
    var cta = $('.scroll-cta-div');
    var nav = $('#tetherTarget');
    new Tether({
        element: cta,
        target: nav,
        attachment: 'bottom right',
        targetAttachment: 'bottom right',
        constraints: [{
            to: 'window',
            attachment: 'together',
            moveElement: false
        }]
    });
};
scrollSpy();