console.log('\'Allo \'Allo!');


var webapp = {
    'page' : {

    }
}

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

//$("#slider").slider({
//    range: false,
//    min: 0,
//    max: 100,
//    step:.1,
//    slide: function ( event, ui ) {
//        tl.pause();
//        //adjust the timeline's progress() based on slider value
//        tl.progress( ui.value/100 );
//    }
//});

function updateSlider() {
//    $("#slider").slider("value", tl.progress() *100);
}

$(function(){


});