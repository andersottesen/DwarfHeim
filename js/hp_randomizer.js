/**
 * Created by madeleineloras on 27/10/15.
 */

var gallery = new Array("../images/art/small/Concept%2001%20small.jpeg", "../images/art/small/Concept%2002%20small.jpeg", "../images/art/small/Concept%2003%20small.jpeg", "../images/art/small/DwarfHeim%201%20small.jpeg", "../images/art/small/DwarfHeim%202%20Blue%20small.jpeg", "../images/art/small/DwarfHeim%203%20small.jpeg",  "../images/art/small/DwarfHeim%204%20small.jpeg",  "../images/art/small/DwarfHeim%205%20Blue%20small.jpeg",  "../images/art/small/DwarfHeim%206%20Blue%20small.jpeg",  "../images/art/small/DwarfHeim%207%20Grass%20small.jpeg",  "../images/art/small/DwarfHeim%208%20INIT%20small.jpeg", "../images/art/videoImages/geologist.png", "../images/art/videoImages/tnt.png", "../images/art/videoImages/miner.png");
var galleryIndex= new Array(); //Liste med tall fra 0 til antall bilder i galleriet.
var randomGallery = new Array(); //Liste med fire tilfeldige tall som er indexen som skal

//Fylle galleryIndex
for (var i = 0; i < gallery.length; i++) {
    galleryIndex[i] = i;
}
//Henter ut fire tilfeldige indexer fra galleryIndex.
for (var i = 0; i < 4; i++) {
    var r = Math.floor(Math.random() * (galleryIndex.length));
    randomGallery[i] =  galleryIndex[r];
    galleryIndex.splice(r,1); // Tar ut den "brukte" indexen slik at vi ikke får duplikater.
}

document.getElementById("gallery1").src = gallery[randomGallery[0]];
document.getElementById("gallery2").src = gallery[randomGallery[1]];
document.getElementById("gallery3").src = gallery[randomGallery[2]];
document.getElementById("gallery4").src = gallery[randomGallery[3]];

var crew = new Array("../images/team/1-t.jpg", "../images/team/2-t.jpg", "../images/team/3-t.jpg", "../images/team/4-t.jpg", "../images/team/5-t.jpg", "../images/team/6-t.jpg", "../images/team/7-t.jpg", "../images/team/8-t.jpg");
var crewIndex= new Array();
var randomCrew = new Array();

//Fylle crewIndex med tall fra 0 til antall bilder i crew.
for (var i = 0; i < crew.length; i++) {
    crewIndex[i] = i;
}
//Henter ut fire tilfeldige indexer fra crewIndex.
for (var i = 0; i < 4; i++) {
    var r = Math.floor(Math.random() * (crewIndex.length));
    randomCrew[i] =  crewIndex[r];
    crewIndex.splice(r,1); // Tar ut den "brukte" indexen slik at vi ikke får duplikater.
}

document.getElementById("crew1").src = crew[randomCrew[0]];
document.getElementById("crew2").src = crew[randomCrew[1]];
document.getElementById("crew3").src = crew[randomCrew[2]];
document.getElementById("crew4").src = crew[randomCrew[3]];
