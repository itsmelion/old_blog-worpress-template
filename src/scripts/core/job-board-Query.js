$(function () {
    
    var getParameterByName = function(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    };

    var concatQuery = function () {
        var args = Array.prototype.slice.call(arguments),
            query = '';
        for (var i = 0, param; i < args.length; i++) {
            param = getParameterByName(args[i]);
            if(param != null){
                query += args[i] + '=' + param + '&';
            }
        };
        return query;
    };

    var queryString = concatQuery('destination', 'region', 'type', 'position', 'expertise'),
        jobboard = $('#jobBoard');
    // console.log('Query:' + query + '\nType: ' + typeof query);
    // console.log('jobboard:' + jobboard + '\nType: ' + typeof jobboard);
    // console.log(jobboard.length)
    if (queryString != null && jobboard.length) {
        jobboard.html(
            '<iframe src="//crm.planetexpat.org/ext_opportunities?' + queryString + '" frameborder="0" class="job-board"><p>Your Browser is not cool. It Doesn\'t support iFrames</p></iframe>'
        );
    } else if (queryString == null && jobboard.length) {
        jobboard.html(
            '<iframe src="//crm.planetexpat.org/ext_opportunities" frameborder="0" class="job-board"><p>Your Browser is not cool. It Doesn\'t support iFrames</p></iframe>'
        )
    } else {
        return 0;
    }


});