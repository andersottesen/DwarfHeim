<!--
FILE NAME: contact.php
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: Provide a contact form where messages can be sent to the DwarfHeim team
-->
<?php $title = "Contact"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

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

<!-- Form for sending message to the DwarfHeim team-->
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
</div><!-- Form for sending message to the DwarfHeim team-->
<script>
    //Prevent user from clicking on send multiple times
    var sendBtn = document.getElementById("send-btn");
    var form = document.getElementById("email-form");
    var sendStatus = document.getElementById("status");
    sendBtn.addEventListener("click", function(){
        if(form.checkValidity()){
            //Hide send button and show 'sending' message
            sendBtn.style.display = "none";
            sendStatus.style.visibility = "visible";
        }
    });
</script>
<?php include_once "modules/footer.php"; ?>
