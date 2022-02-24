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
    // $('a[data-toggle="tab"]').on('click', function(e) {
    //     localStorage.setItem('activeTab', $(e.target).attr('href'));
    // });
    // var activeTab = localStorage.getItem('activeTab');
    // console.log(activeTab);

    // if (activeTab) {
    //     $('a[href="' + activeTab + '"]').addClass("active");
    // }
    $("#list_container a").click(function() {
        $(this).addClass("active");
    });
    $('#list_container a').on('clicked.bs.tab', function(event) {
        $(event.target).addClass("active"); // active tab
        $(event.relatedTarget).removeClass("active"); // previous tab
    });

});