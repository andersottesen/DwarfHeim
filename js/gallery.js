/**
 * Created by Kristoffer on 15/10/2015.
 */

var myImage = document.getElementById("myPhoto");

// Left and right button for next/previous images
var imageLeftHolder = document.getElementById("imageLeftHolder");
imageLeftHolder.addEventListener("click",function(){
    changeImage(true);
});
var imageRightHolder = document.getElementById("imageRightHolder");
imageRightHolder.addEventListener("click",function(){
    changeImage(false);
});

// Image index
var imageIndex = 0;

// Sets the first image
myPhoto.src = imageArray[0];

// Loads all the small images
loadSmallImages();


// Loads the right small image
function loadSmallImages(){
    for(var i = 0; i < smallImageArray.length;i++){
        var element = document.createElement("img");
        element.setAttribute("id",i);
        element.setAttribute("src",smallImageArray[i]);
        element.setAttribute("width","60");
        document.getElementById("smallImageSlideshow").appendChild(element);
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

// Removes a image from active, changes the border of the image
function removeActive(){
    for(var i = 0; i < smallImageArray.length; i++){
        document.getElementById(i).className = "";
    }
}


// Change to right image
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






/**
 * Video Gallery
 */

// Gets "myVideo"-div
var myVideo = document.getElementById("myVideo");

// Left and right button for next/previous images
var videoLeftHolder = document.getElementById("videoLeftHolder");
videoLeftHolder.addEventListener("click",function(){
    changeVideo(true);
});
var videoRightHolder = document.getElementById("videoRightHolder");
videoRightHolder.addEventListener("click",function(){
    changeVideo(false);
});

// Sets videoIndex to 0
var videoIndex = 0;

// Gets the first video
myVideo.src = videoArray[0];


loadSmallImagesVideo();

// Loads all the small images under the video

function loadSmallImagesVideo(){
    for(var i = 0; i < smallVideoArray.length;i++){
        var element = document.createElement("img");
        element.setAttribute("id","v"+i);
        element.setAttribute("src",smallVideoArray[i]);
        element.setAttribute("width","60");
        document.getElementById("smallVideoSlideshow").appendChild(element);
        if(i == 0){
            element.className += " active";
        }
        element.addEventListener("click", function(){
            this.className = "";
            var videoId = this.id.replace("v","");
            videoIndex = parseInt(videoId)+1;
            changeVideo(true);
        });
    }


}

// Removes the active video image, changes the border of the image when selecting new video
function removeActiveVideo(){
    for(var i = 0; i < smallVideoArray.length; i++){
        document.getElementById("v"+i).className = "";
    }
}


// Changes the active video and tumb-image.
function changeVideo(left){
    removeActiveVideo();

    console.log("VideoIndex: "+ videoIndex);

    if(left){
        videoIndex--;
    }else{
        videoIndex++;
    }
    if(videoIndex >= videoArray.length){
        videoIndex = 0;
    }
    else if(videoIndex < 0){
        videoIndex = videoArray.length - 1;
    }

    myVideo.src = videoArray[videoIndex];

    var smallPhotoVideo = document.getElementById("v"+videoIndex.toString());
    smallPhotoVideo.className += " active";
}




