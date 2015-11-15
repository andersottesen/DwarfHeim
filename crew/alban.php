<?php $title = "Alban"; ?>
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
        <h1>Alban Berisha</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/7.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Jeg heter Alban Berisha, er 27 og, og driver og loker rundt i Trondheim. 
			Spiller veldig mye dataspill, noe jeg har gjort siden jeg var fire år gammel, 
			da jeg fikk min første Super Nintendo.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>Albz eller Albzorz</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Programmerer det meste så langt. Jeg er også med på å designe spillet.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Når man har vært gamer i over 20 år har man mye å velge mellom. 
			Et av favoritt øyeblikkene må uansett være da jeg deltok i Tekken-NM i 2013. 
			Jeg var noe av en underdog da jeg gikk inn i turneringen, 
			men endte likevel opp på en respektabel femte plass av 16 spillere. 
			Det er også vanskelig å komme med et favorittspill, 
			men det første Dark Souls spillet satte et veldig dypt inntrykk på meg. 
			Interessant nok er båke Tekken og Dark souls gitt ut av Namco-Bandai.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Helt ærlig er det det sosiale i teamet. 
			Det er veldig artig å jobbe med folket om å samarbeide 
			om å lage noe vi forhåpendlig vis alle vil være stolte over.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Min favoritt dverg er nok Gimli fra den første Ringenes Herre filmen. 
			I denne filmen har karakteren en veldig interessant indre reise, 
			der han overkommer alt fra sin fremmedfrykt for alver til sorgen 
			han opplever av tapet av slekt i Moria. I de to neste filmene blir han dessverre 
			henvist til en slags comic relief rolle, der han er den artige, stutte karakteren som alle ler av.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
