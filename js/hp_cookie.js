/*
 FILE NAME: hp_cookie.js
 WRITTEN BY: Kristoffer Ravik Andresen
 WHEN: October 2015
 PURPOSE: Redirect to landing page
 */
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie() {
    var cookie = getCookie("lp_visited");
    if (cookie == "") {
        window.location = "/landingpage.php";
    }
}
checkCookie();