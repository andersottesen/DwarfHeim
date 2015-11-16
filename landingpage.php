<?php $title = "DwarfHeim"; ?>
<?php $style = "
    html{background-color: #000000;}
"; ?>
<?php $head='
<script src="js/lp_cookie.js"></script>
'; ?>
<?php include_once("modules/head.php") ?>
<div id="landing-page">

    <div id="landing-logo">
        <a href="<?php echo $page["homepage"] ?>">
            <img src="images/DwarfHeimLP.jpeg" alt="Dwarfheim logo"style="max-height: 250px; width: 700px; max-width: 100%;">
        </a>
    </div>

    <div id="landing-video">
        <video width="700" height="360" controls>
            <source src="video/tnt.mp4" type="video/mp4">
            This is a video, your browser does not support this format.
        </video>
    </div>
    <div id="landing-link">
        <a href="<?php echo $page["homepage"] ?>"> Continue to the DwarfHeim webpage... </a>
    </div>
</div>


</body>
</html>
