<?php $title = "Alexander"; ?>
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
        <h1>Alexander Jonassen</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/3.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Jeg heter Alexander, jeg studerer industriell design på industriell design. Gjør ikke så mye om dagene, går på skole, ser til katten og spiller playstation.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>Joelspeanuts</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Jeg er hyret inn som interaksjonsdesigner, noe som foreløbig innebærer å finne ut av blant annet hvordan vi definerer rollene i spillet. I design teamet hvor jeg jobber utvikler vi spillroller, prototyper og testing, jeg synes dette er veldig viktig å få testet dette underveis.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Deus Ex human Revolution. Fordi makan til avansert framstilling av et etisk promblemstilling var veldig realistisk. Det viser at spillmediet virkelig kan drøfte dype etiske samfunnsdilemma. Når vi gikk i 10. og synes at en halvtime var godt nok til å springe hjem til meg og spille et par runder med Star Wars battlefront. Det er mitt favoritt spilløyeblikk Nå om dagen er en halvtime nesten ikke nok til å gidde å gå ut av klasserommet.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Det er nok hele dette med at det er fire unike roller som flettes sammen til et fungerende system. Det er mye mekanikk som skal flettes inn i hverandre, noe som blir en artig utfordring.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Han Small Bill fra den gamle tele-2 reklamen. En semi-artig referanse for de som husker den.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
