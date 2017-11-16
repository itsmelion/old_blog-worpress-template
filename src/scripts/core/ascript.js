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

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    };

    var query = getParameterByName('destination'),
        jobboard = $('#jobBoard');
    // console.log('Query:' + query + '\nType: ' + typeof query);
    // console.log('jobboard:' + jobboard + '\nType: ' + typeof jobboard);
    // console.log(jobboard.length)
    if (query != null && jobboard.length) {
        jobboard.html(
            '<iframe src="//crm.planetexpat.org/ext_opportunities?destination=' + query + '" frameborder="0" class="job-board"><p>Your Browser is not cool. It Doesn\'t support iFrames</p></iframe>'
        );
    } else if (query == null && jobboard.length) {
        jobboard.html(
            '<iframe src="//crm.planetexpat.org/ext_opportunities" frameborder="0" class="job-board"><p>Your Browser is not cool. It Doesn\'t support iFrames</p></iframe>'
        )
    } else {
        return 0;
    }


});