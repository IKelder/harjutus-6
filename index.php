<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h2> Tingimuslaused</h2>
	<?php 
	$a = 4;
	$b = 5; 
	?>
	<?php 
	if ($a < $b) {
		echo "4 on vaiksem kui 5";
	}
	?> <br>

	<?php 
	if ($b < $a) {
		echo "5 on vaiksem kui 4";
	}
	?> <br>
	
	<?php 
	if ($b < $a) {
		echo "5 on vaiksem kui 4";
	} elseif ($a == $b) {
		echo "4 on vordne 5-ga";
	} elseif ($a < $b) {
		echo "4 on vaiksem kui 5";
	}
	?> <br>

	<?php $age = 20;?>
	<?php $age_limit = 18;?>
	<?php if ($age < $age_limit) {
		echo "Kahjuks olete liiga noor. Te peate olema vähemalt vanusepiirangu-nr aastat vana. Tulge n aasta pärast tagasi.";
		} elseif ($age > $age_limit) {
	    echo "Olete piisavalt vana!";
    	}
	?> <br>

	<?php
		$muutuja1 = 3;
		$muutuja2 = 3;
		$muutuja3 = 4;
		$muutuja4 = 5;
	?>
	<?php 
		if (($muutuja1 == $muutuja2) && ($muutuja3 > $muutuja4)) {
			echo "3 on vordne 3-ga ja 4 on suurem kui 5!";
		} elseif (($muutuja1 == $muutuja2) && ($muutuja3 < $muutuja4)) {
			echo "3 on vordne 3-ga ja 4 on vaiksem kui 5";
		}
	?> <br>

	<?php 
		if (($muutuja1 == $muutuja2) || ($muutuja3 > $muutuja4)) {
			echo "3 on vordne 3-ga ja 4 on suurem kui 5!"; // Antud koodiblokk kaivitiati, sest uks lause komponentidest on oige.
		} elseif (($muutuja1 == $muutuja2) || ($muutuja3 < $muutuja4)) {
			echo "3 on vordne 3-ga ja 4 on vaiksem kui 5"; // Seda koodiblokki ei kaivitatud, sest esimene on juba kaivitatud.
		}
	?> <br>


	<?php 
		if (isset($nothing)) {
			echo "See pole toene!";
		}
	?>  <br>

		<?php 
		if (!isset($nothing)) {
			echo "See pole toene!";
		}
	?> <br>

	<h3>Switch</h3>
	<?php 
		$current_language = 'ru';
	?>
	<?php
	switch ("ru") {
	case 'et':
    echo "Tere! Kuidas sul läheb?" . "<br>";
    break;
    	case 'ru':
    echo "Здравствуйте! Как вы делаете?" . "<br>" ;
    break;
    	case 'fi':
    echo "Hei! Miten menee?" . "<br>";
    break;
    default:
    echo "Hey! How are you?";
    } 
	?>

</body>
</html>