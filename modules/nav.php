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
    </div>
    <img id="header-image" style="margin-top:-21px;" src="<?php echo $root.'/images/Navpic.jpg'; ?>" width="100%" alt="">
</nav>
<script>
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
</script>
<div id="main-container" class="container">
