<?php $title = "DwarfHeim"; ?>
<?php $style = "
    html{background-color: #000000;}
"; ?>
<?php include_once("modules/head.php") ?>
<script>
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    function checkCookie() {
        var cookie = getCookie("lp_visited");
        if (cookie == "") {
            setCookie("lp_visited", 1, 60);
        }
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }
    checkCookie();
</script>
<div id="landing-page">

    <div id="landing-logo">
        <img src="images/DwarfHeim-landingpage.jpg" alt="Dwarfheim logo" height="300px" width="700px">
    </div>

    <div id="landing-video">
        <video width="700px" height="360px" controls>
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
