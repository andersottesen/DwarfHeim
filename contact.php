<?php $title = "Contact"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->
<div class="row">
    <div class="offset-by-three six columns">
        <header>
            <h1>Contact us</h1>
        </header>
        <section>
            <p style="color:#E86700">Check out our frequently asked questions <a
                    href="<?php echo $page["faq"] ?>">here.</a></p>

            <p style="color:#E86700">Learn more about the crew and how to contact the team members <a
                    href="<?php echo $page["about"] ?>">here.</a></p>
        </section>
    </div>
</div>

<div class="row" style="margin-top:50px;">
    <header class="offset-by-two nine columns">
        <h2 style="text-align: center">Send a message to to the DwarHeim Team</h2>
    </header>
</div>
<div class="row">
    <div class="offset-by-three six columns">
        <form action="contactform.php" method="post">
            <div class="row">
                <div class="three columns">
                    <label for="name">Name: </label>
                </div>
                <div class="nine columns">
                    <input type="text" placeholder="Your Name" name="name" id="name" required>
                </div>
            </div>
            <div class="row">
                <div class="three columns">
                    <label for="email">Email: </label>
                </div>
                <div class="nine columns">
                    <input type="email" placeholder="Your Email" name="email" id="email" required>
                </div>
            </div>
            <div class="row">
                <div class="three columns">
                    <label for="message">Message: </label>
                </div>
                <div class="nine columns">
                    <textarea placeholder="Message" id="message" name="message" required></textarea>
                </div>
            </div>

            <div class="btn-center offset-by-three nine columns">
                <button class="btn" type="submit" style="text-align: center">Send</button>
            </div>
        </form>
    </div>
</div>

<?php include_once "modules/footer.php"; ?>
