<?php $title = "The Game"; ?>
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
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->
<div class="main">
    <header>
        <h1>About the game</h1>
    </header>

    <section class="content">

        <img class="picture" src="images/art/large/Concept%2003.jpg" alt="Concept 03.jpg">
        <p>
			Imagine you are hanging out with some friends to play PC-games. 
			One friend wants to play a tower defense game. One wants to play a mining game like Dungeon Keeper. 
			One wants to play a real time strategy game like Age of Empires or Warcraft. 
			But you want to play a grand strategy game like Crusader Kings or Europa Universalis. 
			These are all strategy games, but it’s hard to decide which one to pick.
		</p>
		<p>
			But what if there was a game which drew the best game elements from different strategy games 
			and combined them into one team based strategy game? Then everyone would find a role in the game 
			that they would like to play. This would be the obvious game of choice for you and your friends.
		</p>
		<p>
			This is the game we want to make. DwarfHeim is a real time strategy computer game where four players cooperate together to create a thriving dwarf society and survive a neverending horde of orc attacks.
            Each player chooses one of four classes, which all have their unique tasks and skills. The game focus on cooperation. Sharing limited resources makes teamwork an important skill needed to survive.
            If you use more than what is wise and only focus on your own tasks you’ll put the whole society in danger. It’s a game where you’ll learn to cooperate and put the dwarf city ahead of your own ambitions.
        </p>
    </section>
</div>

<?php include_once "modules/footer.php"; ?>
