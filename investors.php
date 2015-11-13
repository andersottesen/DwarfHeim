<?php $title = "Investors"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<div class="paragraph">
<h1>About the company</h1>

    <img src="images/art/large/DwarfHeim%208%20INIT.jpg" alt="DwarfHeim logo" width="400" height="200">
</div>
<div class="paragraph">
<h1>Team</h1>
<p>We have already assembled a solid development team with many of the different skillsets needed to create the game. We are in total nine developers with IT, 3D-design, marketing and economy. Most of the team was assembled in one week after Anders originally pitched the idea on NGA kick-off. We are sure that we will be able to attract the necessary people and resources needed to complete a good and absolutely game-changing PC-game. 
</p>

<h1>Market</h1>
<p>The video game industry is one of the largest industries in the world, having a yearly revenue of over $100-billion USD, $20-Billion of these being exclusively for PC-games. The largest platform for PC-games today is Steam, an online marketplace for buying, downloading and playing games. Steam has about 6-8 million daily users. The industry is typically segregated into companies that create games that go from “Triple-A” to “Niche” to “Casual”, there are also the “Indie” market which is based on not having a publisher. The consumers are segregated by common factors as age, gender and location, as well as what console they play on, how many hours a week they play videogames and how much money they spend on videogames monthly. Our company is an “Indie” Company as we don’t have a publisher and we create games for the “Niche” market. We believe that our consumers will be games-enthusiasts who spends more than $20 monthly and 10 hours weekly on playing videogames.
</p>
<p>Our targeted customer will be people that play computer games on a weekly basis. Most gamers are in general interested in trying out new games. More so if the game is innovative, or does something a little different than its competitors. We will target gamers that like to play together co-operatively, and are interested in strategy games or curious about new and innovative games. 
</p>
<p>We have conducted a survey about our game in Norway. Of the 420 people who answered our survey about 55% played PC-games more than 15 hours a week.  The results were uplifting, as there was no preferred playstyle of the four game genres in question, and most of the gamers in the group preferred to play on a team with other players if given the choice.
</p>
</div>

<div class="row">
    <div style="text-align: center">
        <header>
            <h1 style="text-align: center;">Contact us</h1>
        </header>
        <section>
            <p style="color:#E86700">Check out our frequently asked questions <a
                    href="<?php echo $page["faq"] ?>" style="color:#0000AA;">here.</a></p>

            <p style="color:#E86700">Learn more about the crew and how to contact the team members <a
                    href="<?php echo $page["about"] ?>" style="color:#0000AA;">here.</a></p>
        </section>
    </div>
</div>


    <header class="row" style="margin-top:50px;">
        <h2 style="text-align: center">Send a message to to the DwarHeim Team</h2>
    </header>

<div class="row">
    <div style="max-width:500px; margin: 0 auto;">
        <form id="email-form" action="contactform.php" method="post">
            <div class="row">
                    <label for="name">Name: </label>
                    <input type="text" placeholder="Your Name" name="name" id="name" required>
            </div>
            <div class="row">
                    <label for="email">Email: </label>
                    <input type="email" placeholder="Your Email" name="email" id="email" required>
            </div>
            <div class="row">
                    <label for="message">Message: </label>
                    <textarea placeholder="Message" id="message" name="message" required></textarea>
            </div>

            <div class="btn-center">
                <button class="btn" id="send-btn" type="submit" style="text-align: center">Send</button>
                <p id="status" style="visibility: hidden;">Sending message ...</p>
            </div>
        </form>
    </div>
</div>
<script>
    var sendBtn = document.getElementById("send-btn");
    var form = document.getElementById("email-form");
    var sendStatus = document.getElementById("status");
    sendBtn.addEventListener("click", function(){
        if(form.checkValidity()){
            sendBtn.style.display = "none";
            sendStatus.style.visibility = "visible";
        }
    });
</script>
<?php include_once "modules/footer.php"; ?>
