<?php

require 'data.php';
$qno= $_SESSION['question'];
$score= $_SESSION['score'];
$ans= $_POST['answer'];

echo $qno;echo "\n";
echo $score;echo "\n";
echo $ans;echo "\n";

$ansq=select1("select * from test where qid='$qno';");
echo $ansq['answer'];echo "\n";
if (strcmp($ans,$ansq['answer'])==0)
{
	$score=$score+1;
	$_SESSION['score']=$score;

}
$qno=$qno+1;
$_SESSION['question']=$qno;
if($qno<=10)
	header("location:../testquestion.php");
else
	header("location:../completetest.php");


?>