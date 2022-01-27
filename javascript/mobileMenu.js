$(document).ready(function () {

    // Mobile Menu open menu
    $(function () {
        $(".nav_toggle").on("click", function () {
            if ($(".nav_items").hasClass("active")) {
                $(".nav_items").removeClass("active");
            }
            else {
                $(".nav_items").addClass("active");
            }
        })
    });
})