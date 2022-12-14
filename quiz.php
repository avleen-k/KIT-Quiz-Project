<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

$Questions = array(
    1 => array(
        'Question' => 'Seit wann bereitet das KIT ausländische Studienbewerber auf ein Studium in Deutschland vor?',
        'Answers' => array(
            'A' => '1963',
            'B' => '2000',
            'C' => '1970'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array(
        'Question' => 'Wer hat für ein Selbsthilfeprojekt 6 Monate in Indien gelebt?',
        'Answers' => array(
            'A' => 'Herr Marco Busch',
            'B' => 'Dr. Chandrasekhar Nese',
            'C' => 'Frau Gabriele Dietrich'
        ),
        'CorrectAnswer' => 'C'
    ),
    3 => array(
        'Question' => 'Das Studienkolleg am KIT kooperiert mit anderen internationalen Institutionen.Wählen Sie die richtige internationale Institution:',
        'Answers' => array(
            'A' => 'Uni Pune',
            'B' => 'Beijing Institute of Technology',
            'C' => 'Stanford'
        ),
        'CorrectAnswer' => 'B'
    ),
    4 => array(
        'Question' => 'Welchen Sport treibt Herr Stirner gerne?',
        'Answers' => array(
            'A' => 'Bogenschießen',
            'B' => 'Baseball',
            'C' => 'Tennis'
        ),
        'CorrectAnswer' => 'A'
    ),
 5=> array(
        'Question' => 'Wer spielt/spielte Klarinette im KIT-Konzert?',
        'Answers' => array(
            'A' => 'Frau Ksenija Fazlic-Walter',
            'B' => 'Frau Walburga Wilms-Grabe',
            'C' => 'Herr Dietmar Weldi'
        ),
        'CorrectAnswer' => 'B'
	)
);

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; 
	$correct=0;


    foreach ($Questions as $QuestionNo => $Value){
        echo '<div class="ques">'.$Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span class="wrong">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'.'</div>'; 
        } else {
            echo '<span class="right">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'.'</div>';
		$correct++; 
        }
    }
	if($correct==5){
		echo'<script>alert("Herzlichen Glückwunsch! Sie wissen viel über das KIT Studienkolleg")</script>';
	}
} else {
?>
<div class="main-div">
    <h1>QUIZ </h1>
    <form action="quiz.php" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
	<ul>
    <li>
        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
	<div class="ans">
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        <?php } ?>
	</div>
    </li>
	</ul>
    <?php } ?>
    <input type="submit" value="Submit" id="btn">
    </form>
</div>
<?php 
}
?>
</body>
</html>