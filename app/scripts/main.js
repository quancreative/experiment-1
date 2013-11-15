console.log('\'Allo \'Allo!');

var tl = new TimelineLite({onUpdate:updateSlider});
tl.set("#timeline-1", {visibility:"visible"})
    .from("#feature-title", 0.5, {left:-200, autoAlpha:0}) // autoAlpha handles both css properties visibility and opacity.
    .from("#feature-desc", 0.5, {left:100, autoAlpha:0}, "-=0.25") //add tween 0.25 seconds before previous tween ends
    .from("#feature-img", 0.5, {scale:0.5, autoAlpha:0}, ".5") // add feature label at start position of this tween


$("#play").click(function() {
    //play() only plays forward from current position. If timeline has finished, play() has nowhere to go.
    //if the timeline is not done then play() or else restart() (restart always restarts from the beginning).

    if(tl.progress() != 1){
        //carl just changed this again
        tl.play();
    } else {
        tl.restart();
    }
});

$("#pause").click(function() {
    tl.pause();
});

$("#reverse").click(function() {
    tl.reverse();
});

$("#resume").click(function() {
    tl.resume();
});

$("#restart").click(function() {
    tl.restart();
});

$("#slider").slider({
    range: false,
    min: 0,
    max: 100,
    step:.1,
    slide: function ( event, ui ) {
        tl.pause();
        //adjust the timeline's progress() based on slider value
        tl.progress( ui.value/100 );
    }
});

function updateSlider() {
    $("#slider").slider("value", tl.progress() *100);
}

$(function(){

    // Keep a mapping of url-to-container for caching purposes.
    var cache = {
        // If url is '' (no fragment), display this div's content.
        '' : $('.bbq-default')
    };

    $(window).bind('hashchange', function(e) {

        // Get the hash (fragment) as a string, with any leading # removed. Note that
        // in jQuery 1.4, you should use e.fragment instead of $.param.fragment().

        console.log(e);

    });

    // Since the event is only triggered when the hash changes, we need to trigger
    // the event now, to handle the hash the page may have loaded with.
    $(window).trigger( 'hashchange' );

});