$(function() {
    // hamburger menu
    // open
    $(".hamburger_menu").on("click", function() {
        $(this).hide();
        $(".hamburger_menu2").show(600);
        $(".mobiledropdown").slideToggle(600);
    });
    // close
    $(".hamburger_menu2").on("click", function() {
        $(this).hide();
        $(".hamburger_menu").show(600);
        $(".mobiledropdown").slideToggle(600);
    });

    // navigation to other pages
    // * Go to Score Settings
    function goToScoreSettings() {
        location.href = "../../src/views/score_settings.html";
    }

    // * Go to Home Screen
    function goToHome() {
        location.href = "../../src/views/index.html";
    }

    // * Go to Facilities
    function goToFacilities() {
        location.href = "../../src/views/facilities.html";
    }

    // * Go to Districts
    function goToDistricts() {
        location.href = "../../src/views/districts.html";
    }

    // * Go to EstablishmentType
    function goToEstablishmentType() {
        location.href = "../../src/views/establishment_type.html";
    }

    // * Go to Users
    function goToUsers() {
        location.href = "../../src/views/users.html";
    }

    // keeping selected tab active on click

});