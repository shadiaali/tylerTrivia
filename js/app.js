$(document).foundation()

$(function () {
    var pathName = document.location.pathname;
    window.onbeforeunload = function () {
        var scrollPosition = $(document).scrollTop();
        sessionStorage.setItem("scrollPosition_" + pathName, scrollPosition.toString());
    }
    if (sessionStorage["scrollPosition_" + pathName]) {
        $(document).scrollTop(sessionStorage.getItem("scrollPosition_" + pathName));
    }
});

new WOW().init();