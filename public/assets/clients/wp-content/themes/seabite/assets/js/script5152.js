/*
Template: Seabite - Seafood Restaurant WordPress Theme
Author: peacefulqode.com
Version: 1.0
Design and Developed by: Peacefulqode

*/
/*====================================
[  Table of contents  ]
======================================
==> Page Loader
==> Search Button
==> Sidebar Toggle
==> Sticky Header
==> Back To Top
======================================
[ End table content ]
======================================
*/
(function(jQuery) {
    "use strict";
    jQuery(window).on('load', function(e) {
        /*------------------------
                Page Loader
        --------------------------*/
        jQuery("#pt-loading").fadeOut();
        jQuery("#pt-loading").delay(0).fadeOut("slow");
            /*------------------------
                Search Button
        --------------------------*/
        jQuery(document).on('click', '#pt-seacrh-btn', function() {
            jQuery('.pt-search-form').slideToggle();
            jQuery('.pt-search-form').toggleClass('pt-form-show');
            if (jQuery('.pt-search-form').hasClass("pt-form-show")) {
                jQuery(this).html('<i class="fa fa-times"></i>');
            } else {
                jQuery(this).html('<i class="fa fa-search"></i>');
            }
        });
        /*------------------------
                Sidebar Toggle
        --------------------------*/
        jQuery(document).on('click', "#pt-toggle-btn", function() {
            jQuery('#pt-sidebar-menu-contain').toggleClass("active");
        });
        jQuery(document).on('click', '.pt-toggle-btn', function() {
            jQuery('body').addClass('pt-siderbar-open');
        });
        jQuery(document).on('click', '.pt-close', function() {
            jQuery('body').removeClass('pt-siderbar-open');
        });
        /*------------------------
                Sticky Header
        --------------------------*/
        var view_width = jQuery(window).width();
        if (!jQuery('header').hasClass('pt-header') && view_width >= 1023)
        {
            var height = jQuery('header').height();
            jQuery('.pt-breadcrumb-style-1').css('padding-top', height * 2.2);
        }
        if (jQuery('header').hasClass('pt-header'))
        {
            jQuery(window).scroll(function() {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > 300) {
                    jQuery('.pt-bottom-header').addClass('pt-header-sticky animated fadeInDown animate__faster');
                } else {
                    jQuery('.pt-bottom-header').removeClass('pt-header-sticky animated fadeInDown animate__faster');
                }
            });
        }
        if (jQuery('header').hasClass('pt-has-sticky')) {
            jQuery(window).scroll(function() {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > 300) {
                    jQuery('.pt-bottom-header').addClass('pt-header-sticky animated fadeInDown animate__faster');
                } else {
                    jQuery('.pt-bottom-header').removeClass('pt-header-sticky animated fadeInDown animate__faster');
                }
            });
        }
         /*------------------------
               woo product plus minus
        --------------------------*/
        jQuery(document).on('click', 'button.plus, button.minus', function() {
            var qty = jQuery(this).parent('.quantity').find('.qty');
            var val = parseFloat(qty.val());
            var max = parseFloat(qty.attr('max'));
            var min = parseFloat(qty.attr('min'));
            var step = parseFloat(qty.attr('step'));
            // Format values
            if (!val || val === '' || val === 'NaN') val = 0;
            if (max === '' || max === 'NaN') max = '';
            if (min === '' || min === 'NaN') min = 0;
            if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;
            if (jQuery(this).is('.plus')) 
            {
                if (!isNaN(max)) 
                {
                    if (max > val) 
                    {
                        qty.val(val + step).change();
                    }
                } 
                else 
                {
                    qty.val(val + step).change();
                }
                return false;
            } 
            else 
            {
                if (!isNaN(min)) 
                {
                    if (min < val) 
                    {
                        qty.val(val - step).change();
                    }
                } 
                else 
                {
                    qty.val(val - step).change();
                }
                return false;
            }
        });

        /*------------------------
                Back To Top
        --------------------------*/
        jQuery('#back-to-top').fadeOut();
        jQuery(window).on("scroll", function() {
            if (jQuery(this).scrollTop() > 250) {
                jQuery('#back-to-top').fadeIn(1400);
            } else {
                jQuery('#back-to-top').fadeOut(400);
            }
        });
        jQuery('#top').on('click', function() {
            jQuery('top').tooltip('hide');
            jQuery('body,html').animate({
                scrollTop: 0
            }, 100);
            return false;
        });
    });
})(jQuery);