// navbar section display
fetch("../../src/partials/topnavbar.html")
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.getElementById("navbar_section_display").innerHTML = data;
    });