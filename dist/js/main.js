$(function() {
    // hamburger menu
    $(".hamburger_menu").on("click", function() {
        $(this).hide();
        $(".hamburger_menu2").show(600);
        $(".mobiledropdown").slideToggle(600);
    });
    $(".hamburger_menu2").on("click", function() {
        $(this).hide();
        $(".hamburger_menu").show(600);
        $(".mobiledropdown").slideToggle(600);
    });

    // keeping selected tab active on click

});