$(function(){

    /*
     Modernizr.load([{
     'load' : 'scripts/works.js',
     'complete' : function(){
     console.log('load completed');
     webapp.init();
     }
     }]);
     */

    // Keep a mapping of url-to-container for caching purposes.
    var cache = {
        // If url is '' (no fragment), display this div's content.
        '' : $('.bbq-default')
    };

    $(window).bind('hashchange', function(e) {

        // Get the hash (fragment) as a string, with any leading # removed. Note that
        // in jQuery 1.4, you should use e.fragment instead of $.param.fragment().

        console.log(e.currentTarget.location.hash);
        var tl = new TimelineLite({onUpdate:updateSlider});
        tl.from("#main-nav",.75, {top: -500, autoAlpha: 0 });
        tl.from("#page-content", 1, {autoAlpha: 0 })
            .from("#feature-title", 0.5, {left:-200, autoAlpha:0}) // autoAlpha handles both css properties visibility and opacity.
            .from("#feature-desc", 0.5, {left:100, autoAlpha:0}, "-=0.25") //add tween 0.25 seconds before previous tween ends
            .from("#feature-img", 0.5, {scale:0.5, autoAlpha:0}, ".5") // add feature label at start position of this tween

    });

    // Since the event is only triggered when the hash changes, we need to trigger
    // the event now, to handle the hash the page may have loaded with.
    $(window).trigger( 'hashchange' );

});