<?php
	session_start();
	$questions = array("Question 1",
		"Question 2",
		"Question 3",
		"Question 4",
		"Question 5",
		"Question 6",
		"Question 7");
	$answers = array("Answer 1",
		"Answer 2",
		"Answer 3",
		"Answer 4");
	if(!isset($_SESSION["score"]))
		$_SESSION["score"] = 0;
	if(isset($_GET["answer"])){
		$answer = $_GET["answer"];
	if($answer == $answers[0])
			$_SESSION["score"]++;
	
		$qno = rand(0, count($questions) - 1);
		$output = "<div id=\"score\">";
		$output .= "Score:" . $_SESSION["score"];
		$output .= "</div>";
		$output .= "<div id=\"question\">";
			$output .= "<div>";
				$output .= $questions[$qno];
			$output .= "</div>";
			$output .= "<div>";
				$output .= "<input type=\"radio\" name=\"answer\" onclick=\"submit_answer(this.value);\" value=\"" . $answers[0] . "\">" . $answers[0] . "<br/>";
				$output .= "<input type=\"radio\" name=\"answer\" onclick=\"submit_answer(this.value);\" value=\"" . $answers[1] . "\">" . $answers[1] . "<br/>";
				$output .= "<input type=\"radio\" name=\"answer\" onclick=\"submit_answer(this.value);\" value=\"" . $answers[2] . "\">" . $answers[2] . "<br/>";
				$output .= "<input type=\"radio\" name=\"answer\" onclick=\"submit_answer(this.value);\" value=\"" . $answers[3] . "\">" . $answers[3] . "<br/>";
			$output .= "</div>";
		$output .= "</div>";	
	
		echo $output;
	}
?> 