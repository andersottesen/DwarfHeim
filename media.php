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
            $dir = new DirectoryIterator(dirname(__FILE__)."\\images\\art\\small");
            echo $dir;
            echo 'var smallImageArray = [';
            foreach($dir as $fileinfo){
                if(!$fileinfo ->isDot()){
                    echo '"images/art/small/'.$fileinfo->getFilename().'",';
                }
            }
            echo '];';

        ?>
    </script>


    <div id="smallSlideshow"></div>

</div>

<script src="<?php echo $js['gallery']?>"></script>
<?php include_once "modules/footer.php"; ?>
