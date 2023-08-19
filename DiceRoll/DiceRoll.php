<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dice Roll</title>
	<link rel="stylesheet" href="DR_styles.css" />
</head>
<header class="logo">
	<a href="#"><img src="dice3.png" alt="Dice Roll Game"  /></a>
</header>
<body>


	<h1>Dice Roll Game</h1>
	<hr/>

			
	
	<table>
   <tr>
   	<th>
	<?php
     //Global aray variables
	$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
	$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

	//Definition of the checkForDoubles() function
	function checkForDoubles($num1, $num2){
		//call of global variable
		global $FaceNamesSingular;
		global $FaceNamesPlural;

		//Condition of IF_ELSE statement
		if($num1 == $num2) {
			echo "<p>The roll was double", $FaceNamesPlural[$num1 - 1], ".</p>";
			return true;
		} else {
            echo "<p>The roll was a ", $FaceNamesSingular[$num1 - 1], "and a ", $FaceNamesPlural[$num2 - 1], ".</p>";
            return false;
		}

	}// end of checkForDoubles() function

     //Definition of the displayScoreText() function
	function displayScoreText($score){
		switch ($score) {
			case 2:
				echo "<p>You rolled a loose deuce!</p>";
				break;
			case 3:
			    echo "<p>You rolled a loose deuce!</p>";
			    
			case 5:
				echo "<p>You rolled a fever five!</p>";
				
			case 7:
				echo "<p>You rolled a natural!</p>";
				
			case 9:
				echo "<p>You rolled a lnina!</p>";
				
			case 11:
				echo "<p>You rolled a yo!</p>";
				
		    case 12:
		    	echo "<p>You rolled a boxcars!</p>";
		    	break;
			
		}// end of swiktch statement

	}// end of of displaySoreText() function

	//call  to the global variables
	$Dice = array();
	$DoublesCount = 0;
	for ($gameCount = 1; $gameCount <= 3 ; $gameCount++) { 
		// code...
	
	$Dice[0] = rand(1, 6);
	$Dice[1] = rand(1, 6); 
	$Total = $Dice[0] + $Dice[1];
	echo "<p>The Total score for roll $gameCount was $Total</p>";

	// call to the checkForDoubles() function
	$Doubles = checkForDoubles($Dice[0], $Dice[1]);
	if($Doubles == true){
       $DoublesCount ++;
	}
	// call to the displayScoreText() function
    displayScoreText($Total);
   echo  "<hr/>";

      }// end of the FOR-LOOP statement
      echo "<h3>Doubles occured on $DoublesCount rolls.</h3>";
	?>
	</th>
	<th>
		<!--<p><a href="#"><img src="<?php echo rand(1, 6);?>.png" alt="Dice Roll Game"  /></a></p> -->
	</th> 
</tr>

</table>

<footer>
	Dice Roll Game &#8226; 130-10 177th st, Jamaica NY &nbsp 11434 &#8226; 347-321-2821
</footer>
</body>
</html>