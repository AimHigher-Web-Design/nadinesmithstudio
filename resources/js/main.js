// Variables

//Functions
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $('#masthead').addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $('#masthead').removeClass("active");
        }
    });
});
//Call Functions
