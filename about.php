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
        <h2>Developers</h2>
    </header>
    <section class="row">
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/8-t.jpg" alt="">

                <h3>Knut Ryager</h3>

                <p><a style="color: #0000AA;" href="mailto:knut@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/1-t.jpg" alt="">

                <h3>Eirik Henden</h3>

                <p><a style="color: #0000AA;" href="mailto:eirik.H@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/2-t.jpg" alt="">

                <h3>Eirik Fosse</h3>

                <p><a style="color: #0000AA;" href="mailto:eirik.F@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
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

                <img src="images/team/3-t.jpg" alt="">

                <h3>Alexander Jonassen</h3>

                <p><a style="color: #0000AA;" href="mailto:knut@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/4-t.jpg" alt="">

                <h3>John Erlend Yttervik</h3>

                <p><a style="color: #0000AA;" href="mailto:knut@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
    </section>
</section>
<section class="row team">
    <header class="row">
        <h2>Marketing</h2>
    </header>
    <section class="row">
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/5-t.jpg" alt="">

                <h3>Marius Åslund</h3>

                <p><a style="color: #0000AA;" href="mailto:knut@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/6-t.jpg" alt="">

                <h3>Hans Andreas Kleven</h3>

                <p><a style="color: #0000AA;" href="mailto:knut@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
        <div class="four columns">
            <div class="team-member">

                <img src="images/team/7-t.jpg" alt="">

                <h3>Alban Berisha</h3>

                <p><a style="color: #0000AA;" href="mailto:knut@dwarfheim.com">Email</a></p>

                <p>Tlf: 123 45 678</p>

                <p style="margin-top:10px;"><a href="crew/knut">Mer info</a></p>
            </div>
        </div>
    </section>
</section>

<script>
    document.getElementById("header-image").src = "images/team/team.jpg"
</script>

<?php include_once "modules/footer.php"; ?>
