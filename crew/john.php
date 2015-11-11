<?php $title = "John"; ?>
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
        <h1>John Erlend Yttervik</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/4.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>John Erlend Yttervik, jeg er 25 år, jeg bor for tiden i Oslo og studerer til å bli bim-tekniker (Bygnings Informasjons Modell) På fritiden spiller jeg jo en del dataspill da.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>Johni og JohnBlund</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Det må vell være 3D-modellering og animering. Jeg var også tidligere med på story og konseptutvikling, men det blir mindre av det nå som jeg er i Oslo.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Favorittspill, jeg ble jo veldig fasinert over Limbo.Jeg har spilt gjennom det tre ganger. Jeg er veldig glad i den typen indie spill. Et spill jeg også kan nevne er Nihilumbra, det er et spill som har fått alt for lite oppmerksomhet, anbefales! Når det kommer til spilløyeblikk vet jeg ikke helt, det var vell kanskje da jeg fikk min første epic i World of Warcraft.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Det som begeistrer meg mest er samholdet i teamet, og at Anders (Ottesen, tidligere prosjekt leder) klarte å forklare oss hans idé bak spillet på en serviett begeistrer meg veldig mye. Det er veldig kult at folk er så engasjerte, og det er et kult prosjekt som alle jobber hardt med.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Favorittdverg ja, jeg ble veldig fasinert over Ringenes Herre og så Gimli som dreiv å sprang rundt, til tross for at han er negativ hele tiden klarer han å bli glad i de andre folka og blir til slutt en lagspiller.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
