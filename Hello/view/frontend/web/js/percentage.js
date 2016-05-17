// console.debug('testtttt');

define([
    'jquery'
    ],function($){
        "use strict";
 
        $.widget("excellence.percentage", {
            _create : function(){
                console.log(this.options);
                console.log(this.element);
        }
        });
 
        return $.excellence.percentage;
   })
