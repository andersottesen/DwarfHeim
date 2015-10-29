<!--
FILE NAME: contact.php
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: Provide a contact form where messages can be sent to the DwarfHeim team
-->
<?php $title = "Contact"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->
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
        <form action="contactform.php" method="post">
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
                <button class="btn" type="submit" style="text-align: center">Send</button>
            </div>
        </form>
    </div>
</div>

<?php include_once "modules/footer.php"; ?>
