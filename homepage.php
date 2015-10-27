<?php $title = "DwarfHeim"; ?>
<?php $style = "
.thumbnail img{
    width: auto; height: auto; max-width: 100%; max-height: 100%;
}
@media (max-width:700px){
    #gallery, #crew{
        display:none;
    }
    .right{
        margin-left:0!important;
        width:100%!important;
    }
}
@media (min-width:701px){
    .mobile{
        display:none;
    }
}
@media (max-width:549px){
    .mobile{
        #gallery, #crew{
        float:none;
        }
    }
}
h1,h2{
text-align:center;
}
"; ?>
<?php include_once("modules/head.php") ?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=223526007723742";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
            window.location = "<?php echo $page["landingpage"] ?>";
        }
    }
    checkCookie();
</script>
<?php include_once("modules/nav.php"); ?>

<div class="row">
    <div class="four columns">
        <div class="row" id="gallery" style="margin-top:80px;">
            <h2>Gallery</h2>

            <div class="row">
                <div class="six columns thumbnail"><img src="images/art/DwarfHeim%203.jpg" alt="" style="float:right;">
                </div>
                <div class="six columns thumbnail" style="margin-left:5px;"><img src="images/art/DwarfHeim%203.jpg"
                                                                                 alt="" style="float:left;"></div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="six columns thumbnail"><img src="images/art/DwarfHeim%203.jpg" alt="" style="float:right;">
                </div>
                <div class="six columns thumbnail" style="margin-left:5px;"><img src="images/art/DwarfHeim%203.jpg"
                                                                                 alt="" style="float:left;"></div>
            </div>
            <h2><a href="<?php echo $page["images"] ?>">See more...</a></h2>
        </div>
        <div class="row" id="crew" style="margin-top:230px;">
            <h2>The crew</h2>

            <div class="row">
                <div class="six columns thumbnail"><a href="<?php echo $page["about"] ?>"><img src="images/team/1-t.jpg" alt="" style="float:right;"></a>
                </div>
                <div class="six columns thumbnail" style="margin-left:5px;"><a href="<?php echo $page["about"] ?>"><img src="images/team/2-t.jpg"
                                                                                 alt="" style="float:left;"></a></div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="six columns thumbnail"><a href="<?php echo $page["about"] ?>"><img src="images/team/3-t.jpg" alt="" style="float:right;"></a>
                </div>
                <div class="six columns thumbnail" style="margin-left:5px;"><a href="<?php echo $page["about"] ?>"><img src="images/team/4-t.jpg" alt=""
                                                                                 style="float:left;"></a></div>
            </div>
            <h2><a href="<?php echo $page["about"] ?>">See more...</a></h2>
        </div>
    </div>
    <div class="offset-by-one seven columns right">

        <header class="row">
            <h1>DwarfHeim</h1>
        </header>
        <section class="row">
            <img src="images/art/Concept%2003.jpg" alt="" style="max-width: 100%;">

            <h3>DwarfHeim is a pc-game under developement in Norway. During developement we would love to get feedback
                on our ideas and eventually get testers. Read more about the game <a
                    href="<?php echo $page["dwarfheim"] ?>">here</a>.</h3>
        </section>
        <div class="row mobile" id="gallery-mobile" style="margin-top:80px;">
            <h2>Gallery</h2>

            <div class="row">
                <div class="six columns thumbnail"><img src="images/art/DwarfHeim%203.jpg" alt="" style="float:right;">
                </div>
                <div class="six columns thumbnail" style="margin-left:5px;"><img src="images/art/DwarfHeim%203.jpg"
                                                                                 alt="" style="float:left;"></div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="six columns thumbnail"><img src="images/art/DwarfHeim%203.jpg" alt="" style="float:right;">
                </div>
                <div class="six columns thumbnail" style="margin-left:5px;"><img src="images/art/DwarfHeim%203.jpg"
                                                                                 alt="" style="float:left;"></div>
            </div>
            <h2><a href="<?php echo $page["images"] ?>">See more...</a></h2>
        </div>
        <header class="row" style="margin-top:150px;">
            <h1>News</h1>
        </header>
        <section class="row">
            <div style="width: 500px; max-width: 100%; margin:0 auto;">
                <div class="fb-page" data-href="https://www.facebook.com/DwarfHeim" data-width="500" data-height="600"
                     data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="false"
                     data-show-posts="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/DwarfHeim"><a
                                href="https://www.facebook.com/DwarfHeim">DwarfHeim</a></blockquote>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="offset-by-one even columns">


    </div>
</div>

<?php include_once "modules/footer.php"; ?>
