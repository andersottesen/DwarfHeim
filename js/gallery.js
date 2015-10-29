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


var smallImageArray = ["images/art/Concept 01 small.jpg",
    "images/art/Concept 02 small.jpg",
    "images/art/Concept 03 small.jpg",
    "images/art/DwarfHeim 1 small.jpg",
    "images/art/DwarfHeim 2 Blue small.jpg",
    "images/art/DwarfHeim 3 small.jpg",
    "images/art/DwarfHeim 4 small.jpg",
    "images/art/DwarfHeim 5 Blue small.jpg",
    "images/art/DwarfHeim 6 Blue small.jpg",
    "images/art/DwarfHeim 7 Grass small.jpg",
    "images/art/DwarfHeim 8 INIT small.jpg"

];


function changeImage(left){
    if(left){
        imageIndex--;
    }else{
        imageIndex++;
    }
    console.log(imageIndex);

    if(imageIndex >= imageArray.length){
        imageIndex = 0;
    }
    else if(imageIndex < 0){
        imageIndex = imageArray.length - 1;
    }

    myPhoto.src = imageArray[imageIndex];

}

function smallSlideShow(){
    for(var i = 0; i < smallImageArray.length;i++){
        document.getElementById("smallSlideshow").appendChild(smallImageArray[i]);
    }
}

function show(){
    console.log("hover");
    this.style.visibility = "visible";
}

smallSlideShow();

