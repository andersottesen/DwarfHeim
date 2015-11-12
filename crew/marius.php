<?php $title = "Marius"; ?>
<?php $style = "
h1,h2,h3,p{
    text-align: left;
}
p{
    padding-top:10px;
    text-align: left;
    font-size: 17px;
    margin:0;
}

.picture{
    max-width: 30%;
    max-height: 25%;
    position: relative;
    position: left;
    padding-top:10px;
    padding-bottom: 10px;
}
.main{
    padding-left:50px;
    padding-right:50px;
    font-family:Palatino;
}
"; ?>
<?php include_once("../modules/head.php") ?>
<?php include_once("../modules/nav.php"); ?>

<!-- CONTENT HERE -->
<div class="main">
    <header>
        <h1>Marius Åslund</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/5.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Navnet er Marius Åslund, jeg er fra Våler i Telemark, jeg er 29 år sist jeg sjekka. Jeg er utdannet animatør, men i de siste åra har jeg vidreutvikla meg innen spill og 3d-design.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>Jeg har så mange som jeg bruker, men BadMongo</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Akuratt nå er det jeg som styrer 3D-design delen, men jeg regner med at jeg kommer til å begynne med animasjon og ta ansvaret det når vi har kommet lengre i gang</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Favorittspillet mitt må være Morrowind. Mitt beste spilløyblikk var første gang jeg runda Megaman, jeg kasta bort barndommen min på det siden var så vanskelig.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Det er det at vi lager noe som ingen har sett før.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Bridget the Midget, fine rolletolkninger og flott innlevelse.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
