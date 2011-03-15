/*
 * Style File - jQuery plugin for styling file input elements
 *  
 * Copyright (c) 2007-2008 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Based on work by Shaun Inman
 *   http://www.shauninman.com/archive/2007/09/10/styling_file_inputs_with_css_and_the_dom
 *
 * Revision: $Id: jquery.filestyle.js 303 2008-01-30 13:53:24Z tuupola $
 *
 */

(function($) {
    
    $.fn.filestyle = function(options) {
                
        /* TODO: This should not override CSS. */
        var settings = {
            width : 250 //default
        };
                
        if(options) {
            $.extend(settings, options);
        };
                        
        return this.each(function() {
            
            var self = this;
            var wrapper = $('<div class="input-file-button">');
            var filename = $('<input class="input-file-text" readonly>').addClass($(self).attr("class"));   

            $(self).wrap('<div class="file-input-wrapper">');
            $(self).before(filename);
            $(self).wrap(wrapper);
			
			
			
			$(self).focus(function(e){
				$(this).parent().addClass('focused');//$(this).click();
			}).blur(function(){
				$(this).parent().removeClass('focused');
			});
			//$(self).mouseout(function(){ $(this).parent().removeClass('focused'); });

			$('input.input-file-text').focus(function(){
				$(self).trigger('focus');
			});

			
			$(self).removeAttr('class').attr('class','input-file-entity').css('opacity','0'); //the real upload no need to sytle by user;

            if ($.browser.webkit) {  //chrome safari (wekit)

            } else { // moz opera ie or others      
				$(self).css("right", "0");                    
            };

            $(self).bind("change", function() {
                filename.val($(self).val());
            });
      
        });
        

    };
    
})(jQuery);
