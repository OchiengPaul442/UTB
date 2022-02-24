$(function() {
    $(".list_btn").on('click', function() {
        $(".list_btn.active").removeClass("active");
        // adding classname 'active' to current click li 
        $(this).addClass("active");
    });
});