<?php $title = "Knut"; ?>
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
        <h1>Knut Ryager</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/8.jpg" alt="">
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p>Knut Ryager, jeg går mastergrad i kunstig intelligens på NTNU, siste året. 
			Jeg har tidligere vært med i Norwegian Game Awards og vunnet den, 
			så nå er drømmen og vinne den en gang til.</p>
			
			<h3>Nick/Kallenavn</h3>
			<p>Jeg bruker som regel Pianogamer når jeg spiller.</p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p>Programmerer det meste så langt. Jeg er også med på å designe spillet.</p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p>Det var kanskje første gangen jeg så et ordentlig spill jeg ble nysgjerrig, 
			jeg sto og så en fyr på danskebåten spille Super Mario 64. 
			Han var på den første bowser levelen og tapte og tapte, 
			jeg ble nysgjerrig på hva som kom videre. Favorittspill blir litt vanskelig, 
			kanskje Pikmin 2 eller Paper Mario: Thousand Year Door.</p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p>Det er nok gruvearbeiderdelen av spillet, 
			¨siden vi har kommet godt på vei med prototypen og 
			funnet mange unike detaljer som gjør den stilig.</p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p>Tyrion Lanister, (Game of Thrones) 
			han er veldig flink til å prate for seg, 
			men samtidig er han ganske oppgitt over andre folk. 
			Han kunne sikkert blitt konge og hvis han 
			oppførte seg mer som Cersei, men han vil unngå å bli korrupt.</p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
