jQuery( document ).ready(function() {
    responsiveMenu();
    jQuery(window).resize(responsiveMenu);
    jQuery('.toggle-button').click( function() {
        jQuery('#main_navigation .menu').slideToggle();
    });
});

function responsiveMenu() {
    if (jQuery(window).width() <= 600){	
        jQuery('#main_navigation .menu').hide();
    } else {
        jQuery('#main_navigation .menu').show();
    }
}