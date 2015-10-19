/**
 * Created by Kristoffer on 15/10/2015.
 */

function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

var ul = document.getElementById('faq');
ul.onclick = function (event) {
    var target = getEventTarget(event);
    if (target.id == "faq") {
        return;
    }
        if (target.tagName == "SPAN") {
            target = target.parentNode;
        }

        var arrow = target.getElementsByTagName("span")[0];
        var child = target.getElementsByTagName("ul")[0];
        if (arrow.className.indexOf("right") > -1) {
            arrow.className = arrow.className.replace("right", "down");
            arrow.innerHTML = "&#x25BC;";
        } else {
            arrow.className = arrow.className.replace("down", "right");
            arrow.innerHTML = "&#x25BA;";
        }

        child.style.visibility = child.style.visibility == "hidden" ? "visible" : "hidden";
        child.style.display = child.style.display == "none" ? "block" : "none";
};