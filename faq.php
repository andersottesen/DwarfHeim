<!--
FILE NAME: faq.php
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: This page will contain the most frequently asked question to help the visitors find answers on the questions they are asking themselves.
-->

<?php

//Add questions here. "Question" => "Answer" .
$faq = array(
    "What is DwarfHeim?" => "DwarfHeim is a real time strategy computer game where four players cooperate together to create a thriving dwarf society and survive a neverending horde of orc attacks.",
    "Which platform is it for?" => "PC/Mac",
    "Will it be available through Steam?" => "Yes",
    "Will there be a Kickstarter?" => "Yes",
    "How many players cooperate on the same town?" => "Each town will have four leaders; <i><br>The Prospector <br>The Mayor <br>The General <br>The Diplomat<br></i> Each one with it's different playstyle and responsibilities.",
    "What if I want to play the same role as someone else?" => "During the same match everyone has to play different roles.",
    "What if we’re only three who wants to play?" => "You will be able to play as only three. The computer will then play as the fourth role, though not as good as a decent player.",
);
?>


<?php $style = '
.faq-question{
    padding:10px;
    margin-top:30px;
    box-shadow: 0px 0px 8px 1px rgba(0,0,0,0.75);
    background-color:#E5E5E5;
    border:2px solid #E5E5E5;
    border-radius: 5px;
    font-weight:bold;
}
.faq-question:hover{
    cursor:pointer;
}
.faq-answer{
    margin:0;
    padding:0px;
    background-color: #FFFFFF;
    border-radius: 5px;
    font-weight: normal;

}
.faq-answer li{
    padding:20px;
    margin-top:20px;
}
.faq-answer:hover{
    cursor:auto;
}
#faq ul{
    list-style: none;
    margin-left: 0;
    padding-left: 0;
}

.arrow{
    float:left;
    color:#E86700;
    font-size: 18px;
    margin-right:5px;
}
.hidden{
    display:none;
}
@media (max-width:1000px){
    #faq{
        position:relative;
        margin-left:30px;
        width:90%;
    }
}
@media (max-width:550px){
    #faq{
        margin-left:0;
        width:100%;
    }
}

'; ?>
<?php $title = "FAQ"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->
<header class="row">
    <h1 style="text-align:center;">FAQ</h1>
</header>
<section class="row">
    <div id="faq" class="offset-by-two eight columns">

        <ul>
            <?php
            foreach ($faq as $question => $answer) {
                echo '
            <li class="faq-question">
                <span class="right arrow">&#x25BA;</span>
                ' . $question . '
                <ul class="faq-answer hidden">
                    <li>' . $answer . '</li>
                </ul>
            </li>';
            }
            ?>

        </ul>
    </div>
</section>
<footer class="row">
    <p style="text-align: center;margin-top:75px;color:#E86700;">Didn't find what you were looking for? <a href="<?php echo $page["contact"] ?>" style="color:#0000AA;">Contact us!</a></p>
</footer>
<script src="js/faq.js"></script>
<script>
    //Sliding
    $(document).ready(function () {
        $('.faq-question').click(
            function () {
                $('ul', this).slideToggle(200);
            }
        );
    });
</script>

<?php include_once "modules/footer.php"; ?>
