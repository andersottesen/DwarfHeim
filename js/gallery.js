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

myPhoto.src = imageArray[0];

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
    var loadingPicture = document.createElement("IMG");
    loadingPicture.src = "images/gears.gif";
    loadingPicture.style.display = "absolute";
    loadingPicture.style.top = "50%";
    loadingPicture.style.left = "50%";


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
