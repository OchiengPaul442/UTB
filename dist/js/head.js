// navbar section display
fetch("../../src/partials/head.html")
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.getElementById("head").innerHTML = data;
    });