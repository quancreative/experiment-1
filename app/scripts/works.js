// Site-specifc namespace
var webapp = webapp || {};

webapp.page.works = (function () {

    var public = {
        'init' : function(){

        },
        'call' : function(val){

            console.log('calling')

        }

    }

    return public;
}.call(webapp));
