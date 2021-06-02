$(window).scroll(function () {

    //Navbar
    $('nav').toggleClass('scrolled-um', $(this).scrollTop() < 60);
    $('nav').toggleClass('scrolled-dois', $(this).scrollTop() > 600);
    if ($(this).scrollTop() > 120) {
        $('.abc').removeClass('ncol-i');
        $('.icone-nav').removeClass('ncol');
        $('.nav-item').removeClass('ncol-i');
        $('.hvr-underline-from-center').removeClass('ncol');
    } else {
        $('.abc').addClass('ncol-i');
        $('.icone-nav').addClass('ncol');
        $('.nav-item').addClass('ncol-i');
        $('.hvr-underline-from-center').addClass('ncol');
    }

});

$(document).ready(function () {
    $("#carouselExampleIndicators").on("slide.bs.carousel", function () {
        $(".barra", this)
                .removeClass("anima").css("width", "0%");
    }).on("slid.bs.carousel", function () {
        $(".barra", this)
                .addClass("anima").css("width", "100%");
    });
    $(".barra", "#carouselExampleIndicators").css("width", "100%");
});