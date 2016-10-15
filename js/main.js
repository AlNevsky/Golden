
$(document).foundation();

$(document).ready(function(){



    new WOW().init();


                        // SCROLL FUNCTION


    $("a.scrollto").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 60;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
        $(this).blur();
        return false;
    });


                        //END SCROLL FUNCTION



});
