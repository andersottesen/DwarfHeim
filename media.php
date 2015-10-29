<?php $title = "Media"; ?>
<?php $head = '<link type="text/css" rel="stylesheet" href="css/media.css" >'?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>



<!-- CONTENT HERE -->

<div id="slideshow">
    <div id="mainSlideshow">
        <img id="myPhoto" src="">
        <div class="holder" id="leftHolder">
           <i class="fa fa-arrow-circle-o-left fa-5x"></i>
        </div>
        <div class="holder" id="rightHolder">
            <i class="fa fa-arrow-circle-o-right fa-5x"></i>
        </div>
    </div>

    <script>
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


    <div id="smallSlideshow"></div>

</div>

<script src="<?php echo $js['gallery']?>"></script>
<?php include_once "modules/footer.php"; ?>
