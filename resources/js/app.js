require('./bootstrap');

$(document).ready(function() {
	$(".click-scroll").click(function(e) {
        var linkHref = $(this).attr("href");
        var idElement = linkHref.substr(linkHref.indexOf("#"));
        $(".click-scroll")
            .parent()
            .removeClass("active");
        $(this)
            .parent()
            .addClass("active");
        $("html, body").animate(
            {
                scrollTop: $(idElement).offset().top - 80
            },
            1000
        );
        return false;
    });
});