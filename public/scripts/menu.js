document.addEventListener("DOMContentLoaded", function () {
    var toggle = document.getElementById("toggle");
    var menu = document.getElementById("menu");
    var status = "open";
    
    toggle.addEventListener("click", function (event) {
        event.stopPropagation();
        if (status == "open") {
            status = "close";
            menu.style.display = "block";
        } else {
            status = "open";
            menu.style.display = "none";
        }
    });

    document.addEventListener("click", function () {
        if (status == "close") {
            status = "open";
            menu.style.display = "none";
        }
    });
});
