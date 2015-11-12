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
        <h1>Eirik Henden</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/1.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Mitt navn er Eirik Henden, jeg er 24 år. Jeg studerer for tiden til en bachelorgrad innen interaktive medier i Kristiansand. Når jeg er ferdig med bacheloren blir det kanskje en master. Ellers tegner jeg mye, trener en del, leser mye bøker, og jeg prøver å l're nye ting hele tiden.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>zEHz</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Min rolle i teamet er å være en konseptartist, det vil si å tegne og male konsepter og idéer jeg får fra resten av teamet. Jeg har mye kontakt med Hans (Kleven) og Eirik (Fosse) i Trondheim.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Jeg har egentlig ganske mange favorittspill, men jeg blir nødt til å si Skyrim, selv om det er en kjisjé. Jeg spilte både Morrowind og Oblivion først, men favoritten blir nok Skyrim. Favorittøyeblikket må være når jeg vandret rundt på det enorme fjellet "Throat of the World" i Skyrim. Musikken, stemningen og utsikten var fantastisk.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Det er først og fremst folket , og se de forskjellige rollene jobbe i teamet. Programmeringen til Knut (Ryager) og animasjonene til Marius (Åslund) for å nevne noe. Det er selvfølgelig også selve spillidéen, og det at jeg for lov til å jobbe med det.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Jeg har lyst til å være litt kontroversiell og bryte ut av det som kanskje er normen. Jeg er ganske glad i astronimi så jeg sier en rød dverg/red dwarf. Dette er da er en stjerneklassifisering.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
