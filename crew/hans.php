<?php $title = "Hans"; ?>
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
        <h1>Hans-Andreas Sakrihei Kleven</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/6.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Mitt navn er Hans Andreas Kleven, og jeg kommer fra Mo I Rana langt oppi nord.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>MoiManticore</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Jeg har tatt over som daglig leder i teamet, og driver å sender e-poster og søknader overalt.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Akuratt nå må favoritten være Deadly Premonition, et ganske ukjent spill fra Japan som er basert på TV-serien Twin Peaks. Favoritt spilløyeblikket mitt må vell være første gang jeg drepte The Lich King i World of Warcraft. Jeg spilte i en forholdsvis liten guild, og samarbeidet vi fikk etter måneder med prøving og feilig gjorde seieren så ufattelig søt.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Jeg er jo en veldig stor fan av RTS, og å se noe nytt bli gjort med sjangeren er for meg ufattelig morsomt. I tilleg har jeg alltid hatt lyst til å jobbe med spill, og det å jobbe med teamet er uten tvil noe av det morsomste jeg har gjort.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Min favorittdverg må være WeeMan fra jackass serien.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
