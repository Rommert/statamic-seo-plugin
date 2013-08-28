$(document).ready(function () {

    //count characters
    var characters = 150;
    var remaining;

    if ($("#seo-description textarea").val().length === 0) {
        remaining = characters;
    } else {
        remaining = characters - $("#seo-description textarea").val().length;
    }

    $("#counter").append("You have <strong>" + remaining + "</strong> characters left");
    $("#seo-description textarea").keyup(function () {
        if ($(this).val().length > characters) {
            $(this).val($(this).val().substr(0, characters));
        }
        var remaining = characters - $(this).val().length;
        $("#counter").html("You have <strong>" + remaining + "</strong> characters left");
        if (remaining <= 10) {
            $("#counter").css("color", "red");
        }
        else {
            $("#counter").css("color", "black");
        }
    });


    //Default: Closed SEO tab
    $(".seo-entry").hide();
    $(".input-seo label:first").prepend("<span></span>");

    $(".input-seo label").click(function () {
        $(".seo-entry").toggle();
        $(".input-seo label").toggleClass('is-open');
    });


});