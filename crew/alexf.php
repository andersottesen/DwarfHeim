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
	min-width: 200px;
    position: relative;
    float: right;
    padding-top:10px;
    padding-bottom: 10px;
}

.info{
    position: relative;
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
        <h1>Alexander Istad Funch</h1>
    </header>

    <section class="content">

        <img class="picture" src="../images/team/.jpg" alt="">
				
		<div class="info">
		
			<p>Marketing and Economy</p>
			
			<p>Contact info</p>
			
			<div class="contact">
                <p><a style="color: #0000AA;" href="mailto:Alex_92_1st@msn.com">Email</a></p>

                <p>Tlf: +47 911 28 799</p>
			</div>
		</div>
		
        <div class="interview">
            <h3>Hvem er du?</h3>
			<p></p>
			
			<h3>Nick/Kallenavn</h3>
			<p></p>
			
			<h3>Hva er din rolle i DwarfHeim teamet?</h3>
			<p></p>
			
			<h3>Hva er ditt favorittspill og spilløyeblikk?</h3>
			<p></p>
			
			<h3>Hva begeistrer deg mest med DwarfHeim?</h3>
			<p></p>
			
			<h3>Hvem er din favoritt dverg?</h3>
			<p></p>
        </div>
    </section>
</div>

<script>
    document.getElementById("header-image").src = "../images/team/team.jpg"
</script>

<?php include_once "../modules/footer.php"; ?>
