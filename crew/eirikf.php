<?php $title = "Eirik"; ?>
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
        <h1>Eirik Fosse</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/2.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Eirik Fosse heter jeg, jeg studerer informatikk på NTNU, med fokus på kunstig inteligens og innovasjon. Jeg har alltid hatt lyst til å lage spill, og jeg har ofte lekt med spilldesign-programvare som gamemaker o.l.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>Zay2k</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Jeg leder programmeringsgruppa, og jeg jobber mye med spillmekanikk, samt litt administrativ virksomhet.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Helhetlig er nok Assassins Creed serien min favoritt, spesifikt 2-ern som var artigst der. Favoritt spilløyeblikk er nok bare det å spille Assassins Creed eller Mirrors edge, og se hvordan spillene har fokusert på free running/parkour.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Det må være samarbeidsbiten, og det at alle spiller forskjellige roller og er nødt å samarbeide godt siden alle er avhengige av hverandre.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Verne Troyer, han som spiller Mini-Me. Altså da ikke karakterene han spiller, men han som person.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
