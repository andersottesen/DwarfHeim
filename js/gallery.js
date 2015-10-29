/**
 * Created by Kristoffer on 15/10/2015.
 */

var myImage = document.getElementById("myPhoto");

var leftHolder = document.getElementById("leftHolder");
leftHolder.addEventListener("click",function(){
    changeImage(true);
});
//leftHolder.addEventListener("mouseover",show);

var rightHolder = document.getElementById("rightHolder");
rightHolder.addEventListener("click",function(){
    changeImage(false);
});
//rightHolder.addEventListener("mouseover",show);

var imageIndex = 0;
var imageArray = ["images/art/Concept 01.jpg",
"images/art/Concept 02.jpg",
"images/art/Concept 03.jpg",
"images/art/DwarfHeim 1.jpg",
"images/art/DwarfHeim 2 Blue.jpg",
"images/art/DwarfHeim 3.jpg",
"images/art/DwarfHeim 4.jpg",
"images/art/DwarfHeim 5 Blue.jpg",
"images/art/DwarfHeim 6 Blue.jpg",
"images/art/DwarfHeim 7 Grass.jpg",
"images/art/DwarfHeim 8 INIT.jpg"];
myPhoto.src = imageArray[0];


var smallImageArray = ["images/art/Concept 01 small.jpeg",
    "images/art/Concept 02 small.jpeg",
    "images/art/Concept 03 small.jpeg",
    "images/art/DwarfHeim 1 small.jpeg",
    "images/art/DwarfHeim 2 Blue small.jpeg",
    "images/art/DwarfHeim 3 small.jpeg",
    "images/art/DwarfHeim 4 small.jpeg",
    "images/art/DwarfHeim 5 Blue small.jpeg",
    "images/art/DwarfHeim 6 Blue small.jpeg",
    "images/art/DwarfHeim 7 Grass small.jpeg",
    "images/art/DwarfHeim 8 INIT small.jpeg"
];
loadSmallImages();

function loadSmallImages(){
    for(var i = 0; i < smallImageArray.length;i++){
        var element = document.createElement("img");
        element.setAttribute("id",i);
        element.setAttribute("src",smallImageArray[i]);
        element.setAttribute("width","60");
        document.getElementById("smallSlideshow").appendChild(element);
        if(i == 0){
             element.className += " active";
        }
        element.addEventListener("click", function(){
            this.className = "";
            imageIndex = parseInt(this.id)+1;
            changeImage(true);
        });
    }


}


function removeActive(){
    for(var i = 0; i < smallImageArray.length; i++){
        document.getElementById(i).className = "";
    }
}

function changeImage(left){
    removeActive();
    if(left){
        imageIndex--;
    }else{
        imageIndex++;
    }
    if(imageIndex >= imageArray.length){
        imageIndex = 0;
    }
    else if(imageIndex < 0){
        imageIndex = imageArray.length - 1;
    }

    myPhoto.src = imageArray[imageIndex];

    var smallPhoto = document.getElementById(imageIndex.toString());
    smallPhoto.className += " active";
}


function show(){
    console.log("hover");
    this.style.visibility = "visible";
}
