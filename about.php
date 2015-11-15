<!--
FILE NAME: about.php
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: Prove information about the members of DwarfHeim
-->
<?php $title = "About the Crew"; ?>
<?php $style = "
h1,h2,h3,p{
    text-align: center;
}
p{
    font-size: 17px;
    margin:0;
}
h2{
    margin:0 auto 30px;
}
.team-member{
    box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
    padding-top:10px;
    background-color:#d6d6d6;
    height:340px;
    border-radius:10px;
    width:200px;
    margin:0 auto;
}
.team-member img{
    border:2px solid #000000;
    display:block;
    margin:20px auto;
    max-width:100%;
    max-height:100%;
    width:150px;
    height:150px;
}
.team{
    padding-top:75px;
    padding-bottom:75px;
    border-bottom: 3px solid #d6d6d6;
}
@media(max-width:950px){
    .four{
    margin-left:0;
        width:100%!important;
    }
    .team-member{
        margin-top:20px;
        width:350px;
        max-width:100%;
    }

}
"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once "modules/nav.php"; ?>
<header style="margin-bottom:50px;" class="row">
    <h1>The Crew</h1>
</header>
<section class="row team" style="border-top: 3px solid #d6d6d6;">
    <header class="row">
        <h2>General Manager</h2>
    </header>
    <section class="row">
		<div class="team-member">
			<a href="<?php echo $crew["hans"] ?>">
				<img src="images/team/6-t.jpg" alt="">
			</a>

			<h3>Hans Andreas Kleven</h3>

			<p><a style="color: #0000AA;" href="mailto:Hanskleven@live.no">Email</a></p>

			<p>Tlf: +47 948 98 655</p>

			<p style="margin-top:10px;"><a href="<?php echo $crew["hans"] ?>">More info</a></p>
		</div>
    </section>
</section>
<section class="row team">
    <header class="row">
        <h2>Developers</h2>
    </header>
    <section class="row">
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["knut"] ?>">
					<img src="images/team/8-t.jpg" alt="">
				</a>

                <h3>Knut Ryager</h3>

                <p><a style="color: #0000AA;" href="mailto:E-k-nut@hotmail.com">Email</a></p>

                <p>Tlf: +47 978 83 549</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["knut"] ?>">More info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["eirikf"] ?>">
					<img src="images/team/2-t.jpg" alt="">
				</a>

                <h3>Eirik Fosse</h3>

                <p><a style="color: #0000AA;" href="mailto:Eirik92fosse@gmail.com">Email</a></p>

                <p>Tlf: +47 913 69 708</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["eirikf"] ?>">More info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["alexj"] ?>">
					<img src="images/team/3-t.jpg" alt="">
				</a>

                <h3>Alexander Jonassen</h3>

                <p><a style="color: #0000AA;" href="mailto:Alexanderjonassen@outlook.com">Email</a></p>

                <p>Tlf: +47 416 35 199</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["alexj"] ?>">More info</a></p>
            </div>
        </div>
    </section>
</section>
<section class="row team">
    <header class="row">
        <h2>Designers</h2>
    </header>
    <section class="row">
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["eirikh"] ?>">
					<img src="images/team/1-t.jpg" alt="">
				</a>

                <h3>Eirik Henden</h3>

                <p><a style="color: #0000AA;" href="mailto:Eirik_Henden@hotmail.com">Email</a></p>

                <p>Tlf: +47 481 47 098</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["eirikh"] ?>">More info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["marius"] ?>">
					<img src="images/team/5-t.jpg" alt="">
				</a>

                <h3>Marius Åslund</h3>

                <p><a style="color: #0000AA;" href="mailto:Lo_dott@hotmail.com">Email</a></p>

                <p>Tlf: +47 476 20 704</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["marius"] ?>">More info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["john"] ?>">
					<img src="images/team/4-t.jpg" alt="">
				</a>

                <h3>John Erlend Yttervik</h3>

                <p><a style="color: #0000AA;" href="mailto:Johni5@hotmail.com">Email</a></p>

                <p>Tlf: +47 470 99 356</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["john"] ?>">More info</a></p>
            </div>
        </div>
    </section>
</section>
<section class="row team">
    <header class="row">
        <h2>Marketing and Economy</h2>
    </header>
    <section class="row">
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["anders"] ?>">
					<img src="images/team/" alt="">
				</a>

                <h3>Anders Ottesen</h3>

                <p><a style="color: #0000AA;" href="mailto:Andersottesen@yahoo.no">Email</a></p>

                <p>Tlf: +47 994 49 699</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["anders"] ?>">More info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["alexf"] ?>">
					<img src="images/team/" alt="">
				</a>

                <h3>Alexander Funch</h3>

                <p><a style="color: #0000AA;" href="mailto:Alex_92_1st@msn.com">Email</a></p>

                <p>Tlf: +47 911 28 799</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["alexf"] ?>">More info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">
				<a href="<?php echo $crew["alban"] ?>">
					<img src="images/team/7-t.jpg" alt="">
				</a>

                <h3>Alban Berisha</h3>

                <p><a style="color: #0000AA;" href="mailto:Albzorz@hotmail.com">Email</a></p>

                <p>Tlf: +47 416 86 395</p>

                <p style="margin-top:10px;"><a href="<?php echo $crew["alban"] ?>">More info</a></p>
            </div>
        </div>
    </section>
</section>

<script>
    document.getElementById("header-image").src = "images/team/team.jpg"
</script>

<?php include_once "modules/footer.php"; ?>
