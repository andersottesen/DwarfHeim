<!--
FILE NAME: faq.php
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: This page will contain the most frequently asked question to help the visitors find answers on the questions they are asking themselves.
-->

<?php

//Add questions here. "Question" => "Answer" .
$faq = array(
    "Question 1?" => "Answer 1",
    "Question 2?" => "Answer 2",
    "Question 3?" => "Answer 3",
    "Question 4?" => "Answer 4",
    "Question 5?" => "Answer 5",
    "Question 6?" => "Answer 6",
    "Question 7?" => "Answer 7",
    "Question 8?" => "Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8Answer 8",
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
