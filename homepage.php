<?php $title = "DwarfHeim"; ?>
<?php include_once("modules/head.php") ?>
<script>
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    }

    function checkCookie() {
        var cookie = getCookie("lp_visited");
        if (cookie=="") {
            window.location = "<?php echo $page["landingpage"] ?>";
        }
    }
    checkCookie();
</script>
<?php include_once("modules/nav.php"); ?>

<div class="row">
    <div class="three columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, ducimus ipsa laborum magnam similique sint
            tenetur voluptate? Beatae earum fuga inventore ipsam itaque neque perspiciatis porro reiciendis tempora ut?
            Optio.</p>
    </div>
    <div class="three columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, ducimus ipsa laborum magnam similique sint
            tenetur voluptate? Beatae earum fuga inventore ipsam itaque neque perspiciatis porro reiciendis tempora ut?
            Optio.</p>
    </div>
    <div class="three columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, ducimus ipsa laborum magnam similique sint
            tenetur voluptate? Beatae earum fuga inventore ipsam itaque neque perspiciatis porro reiciendis tempora ut?
            Optio.</p>
    </div>
    <div class="three columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, ducimus ipsa laborum magnam similique sint
            tenetur voluptate? Beatae earum fuga inventore ipsam itaque neque perspiciatis porro reiciendis tempora ut?
            Optio.</p>
    </div>
</div>
<h2>Hei</h2>

<?php include_once "modules/footer.php"; ?>
