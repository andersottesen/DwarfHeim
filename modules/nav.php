<nav class="container">
    <div id="top-nav">

    <ul class="navbar">
        <li><a href="<?php echo $page["homepage"] ?>">Home</a></li>
        <li><a href="<?php echo $page["media"] ?>">Media</a>
        </li>
        <li><a href="<?php echo $page["dwarfheim"] ?>">The Game</a></li>
        <li><a href="<?php echo $page["about"] ?>">The Crew</a>
            <ul>
                <li><a href="<?php echo $page["contact"] ?>"> Contact </a></li>
            </ul>
        </li>
        <li><a href="<?php echo $page["faq"] ?>">FAQ</a></li>
        <li><a href="<?php echo $page["investor"] ?>">Investors</a></li>
    </ul>

        <ul class="mobile-menu">
            <li id="mainMenu"><a><img id="drop-menu" src="<?php echo $root.'/images/art/small/DwarfHeim%208%20INIT%20small.jpeg'; ?>" alt="MobileDropDownImage">Menu </a>
                <ul id="content">
                    <li><a href="<?php echo $page["homepage"] ?>">Home</a></li>
                    <li><a href="<?php echo $page["media"] ?>">Media</a></li>
                    <li><a href="<?php echo $page["dwarfheim"] ?>">The Game</a></li>
                    <li><a href="<?php echo $page["about"] ?>">The Crew</a></li>
                    <li><a href="<?php echo $page["contact"] ?>"> Contact </a></li>
                    <li><a href="<?php echo $page["faq"] ?>">FAQ</a></li>
                    <li><a href="<?php echo $page["investor"] ?>">Investors</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <img id="header-image" src="<?php echo $root.'/images/Navpic.jpg'; ?>" alt="DwarfHeim header image">
</nav>
<script>


    $(document).ready(function () {
        $('#content',this).hide();
        $('#mainMenu').click(
            function () {
                $('#content').slideToggle();
            }

        );
    });

    $(document).ready(function () {
        $('.navbar li').hover(
            function () {
                $('ul', this).fadeIn(200);
            },
            function () {
                $('ul', this).fadeOut(200);
            }
        );
    });
    $(document).ready(function () {
        $('.menu li').hover(
            function () {
                $('ul', this).fadeIn(200);
            },
            function () {
                $('ul', this).fadeOut(200);
            }
        );
    });
</script>
<div id="main-container" class="container">
