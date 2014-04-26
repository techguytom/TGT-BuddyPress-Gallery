jQuery(document).ready(function($) {
    $('.loggedOut a').click(function(e) {
        e.preventDefault();
        if (!$('.loginDropDown').is(':visible')) {
            $('.loginDropDown').slideDown('slow');    
        } else {
            $('.loginDropDown').slideUp('slow');
        }
    });

});
