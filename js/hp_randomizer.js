/**
 * Created by madeleineloras on 27/10/15.
 */

var gallery1;
var gallery2;
var gallery3;
var gallery4;

var gallery = new Array("../images/art/Concept%2001.jpg", "../images/art/Concept%2002.jpg", "../images/art/Concept%2003.jpg", "../images/art/DwarfHeim%201.jpg", "../images/art/DwarfHeim%202%20Blue.jpg", "../images/art/DwarfHeim%203.jpg",  "../images/art/DwarfHeim%204.jpg",  "../images/art/DwarfHeim%205%20Blue.jpg",  "../images/art/DwarfHeim%206%20Blue.jpg",  "../images/art/DwarfHeim%207%20Grass.jpg",  "../images/art/DwarfHeim%208%20INIT.jpg");

var random_gallery = Math.floor(Math.random() * gallery.length);

if(random_gallery > (gallery.length-3)){
    document.getElementById("gallery1").src = gallery[random_gallery];
    document.getElementById("gallery2").src = gallery[random_gallery-1];
    document.getElementById("gallery3").src = gallery[random_gallery-2];
    document.getElementById("gallery4").src = gallery[random_gallery-3];
}else{
    document.getElementById("gallery1").src = gallery[random_gallery];
    document.getElementById("gallery2").src = gallery[random_gallery+1];
    document.getElementById("gallery3").src = gallery[random_gallery+2];
    document.getElementById("gallery4").src = gallery[random_gallery+3];
}

var crew1;
var crew2;
var crew3;
var crew4;

var crew = new Array("../images/team/1-t.jpg", "../images/team/2-t.jpg", "../images/team/3-t.jpg", "../images/team/4-t.jpg", "../images/team/5-t.jpg", "../images/team/6-t.jpg", "../images/team/7-t.jpg", "../images/team/8-t.jpg");

var random_crew = Math.floor(Math.random() * crew.length);

if(random_crew > (crew.length-3)){
    document.getElementById("crew1").src = crew[random_crew];
    document.getElementById("crew2").src = crew[random_crew-1];
    document.getElementById("crew3").src = crew[random_crew-2];
    document.getElementById("crew4").src = crew[random_crew-3];
}else {
    document.getElementById("crew1").src = crew[random_crew];
    document.getElementById("crew2").src = crew[random_crew + 1];
    document.getElementById("crew3").src = crew[random_crew + 2];
    document.getElementById("crew4").src = crew[random_crew + 3];
}