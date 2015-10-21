<?php $title = "DwarfHeim"; ?>
<?php $style="
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

<h1 style="text-align: center;"><a style="color:#E86700!important" href="<?php echo $page["homepage"] ?>">Continue to DwarfHeim.com!</a></h1>
</body>
</html>

