<?php $title = "Contact"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->

<form action="contact.php">
    <input type="text" placeholder="Subject" required><br/>
    <textarea placeholder="Message" required></textarea><br/>
    <input type="email" placeholder="E-mail" required><br/>
    <button type="submit">Send</button>
</form>

<?php include_once "modules/footer.php"; ?>
