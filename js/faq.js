/*
FILE NAME: faq.js
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: Hide/display answers when question is clicked
*/

function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

var ul = document.getElementById('faq');
ul.onclick = function (event) {
    var target = getEventTarget(event);
    if (target.tagName != "LI" && target.tagName!="SPAN" ) {
        return;
    }
    //If the arrow is clicked choose parent node
    if (target.tagName == "SPAN") {
        target = target.parentNode;
    }

    var arrow = target.getElementsByTagName("span")[0];
    var answer = target.getElementsByTagName("ul")[0];

    //Change direction of arrow
    if (arrow.className.indexOf("right") > -1) {
        arrow.className = arrow.className.replace("right", "down");
        arrow.innerHTML = "&#x25BC;";
    } else {
        arrow.className = arrow.className.replace("down", "right");
        arrow.innerHTML = "&#x25BA;";
    }

    //Show/Hide the answer
    answer.className = answer.className.indexOf("hidden") > -1 ? answer.className.replace("hidden", "visible") : answer.className.replace("visible", "hidden");
};