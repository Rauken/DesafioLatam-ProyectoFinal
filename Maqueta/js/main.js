$(document).ready(function() {
    $("div.secciones").mouseover(function() {
        $(this).closest("img").addClass("opacity03");
        $(this).closest("#text").addClass("opacity1");
    });
});