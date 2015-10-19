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
    margin-top:20px;
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
    min-height:50px;
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
ul{
    list-style: none;
}

.arrow{
    float:left;
    color:#E86700;
    font-size: 18px;
    margin-right:5px;
}

'; ?>
<?php $title = "FAQ"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->
<div class="row">
    <div class="offset-by-two eight columns">

        <ul id="faq">

            <?php
            foreach ($faq as $question => $answer) {
                echo '
                    <li class="faq-question">
                        <span class="right arrow">&#x25BA;</span>
                        ' . $question . '
                        <ul class="faq-answer" style="visibility:hidden; display:none;">
                            <li>' . $answer . '</li>
                        </ul>
                    </li>';
            }
            ?>
        </ul>
    </div>
</div>
<script src="<?php echo $js["faq"]; ?>"></script>

<?php include_once "modules/footer.php"; ?>
