$(window).on("scroll", function() {
    if ($(window).scrollTop() > 50) {
        $("#header .bg-inverse").addClass("active");
    } else {
        $("#header .bg-inverse").removeClass("active");
    }
});
