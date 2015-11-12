<?php $title = "Media"; ?>
<?php $head = '<link type="text/css" rel="stylesheet" href="css/media.css" >'?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>



<!-- CONTENT HERE -->

<h1 style="text-align: center;">Image gallery</h1>

<div class="slideshow">
    <div class="mainSlideshow">
        <img id="myPhoto" src="">
        <div class="holder" id="imageLeftHolder">
           <i class="fa fa-arrow-circle-o-left fa-5x"></i>
        </div>
        <div class="holder" id="imageRightHolder">
            <i class="fa fa-arrow-circle-o-right fa-5x"></i>
        </div>
    </div>

    <script>

        // Goes through "images/art/small"- and "images/art/large"-folder
        // Adds the link images to an array
        <?php

            $path = "images/art/small";
            echo 'var smallImageArray = [';

            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;

                    // do something with the file
                    echo '"images/art/small/'.$file.'",';
                }
            closedir($handle);
            }
            echo '];';

            $path = "images/art/large";
            echo 'var imageArray = [';

            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;

                    // do something with the file
                    echo '"images/art/large/'.$file.'",';
                }
            closedir($handle);
            }
            echo '];';

        ?>
    </script>


    <div id="smallImageSlideshow"></div>

</div>

<br/>
<hr/>

<h1 style="text-align: center;">Video gallery</h1>


<div class="slideshow">
    <div class="mainSlideshow">
        <video id="myVideo" src="" controls></video>
        <div class="holder" id="videoLeftHolder">
            <i class="fa fa-arrow-circle-o-left fa-5x"></i>
        </div>
        <div class="holder" id="videoRightHolder">
            <i class="fa fa-arrow-circle-o-right fa-5x"></i>
        </div>
    </div>

    <script>
        // Goes through "images/art/videoImages"- and "video"-folder
        // Adds the link to video and images to an array
        <?php

            $path = "images/art/videoImages/";
            echo 'var smallVideoArray = [';

            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;

                    // do something with the file
                    echo '"images/art/videoImages/'.$file.'",';
                }
            closedir($handle);
            }
            echo '];';

            $path = "video";
            echo 'var videoArray = [';

            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;

                    // do something with the file
                    echo '"video/'.$file.'",';
                }
            closedir($handle);
            }
            echo '];';

        ?>
    </script>


    <div id="smallVideoSlideshow"></div>

</div>

<script src="<?php echo $js['gallery']?>"></script>
<?php include_once "modules/footer.php"; ?>
