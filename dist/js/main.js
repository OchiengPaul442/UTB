$(function() {
    // hamburger menu
    $(".hamburger_menu").on("click", function() {
        $(this).hide();
        $(".hamburger_menu2").show(100);
        $(".mobiledropdown").slideToggle(100);
    });
    $(".hamburger_menu2").on("click", function() {
        $(this).hide();
        $(".hamburger_menu").show(100);
        $(".mobiledropdown").slideToggle(100);
    });

    // keeping selected tab active on click

});