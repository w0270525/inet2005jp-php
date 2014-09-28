<!DOCTYPE html>
<html>
	<head>
		<title>
			Your Zodiac Online
		</title>
	</head>
	<body>
	<p>Hello <?php
		echo $_GET["fName"]." ".$_GET["lName"];
		?></p>
	<p>
		<?php
		$month = $_GET["birthMonth"];
		$day = $_GET["birthdayDay"];

		switch ($month) {
			case "January":
				if ($day <= 19)
					$zodiac="Capricorn";
				else
					$zodiac="Aquarius";
				break;
			case "February":
				if($day<= 19)
					$zodiac="Aquarius";
				else
					$zodiac="Pisces";
				break;
			case "March":
				if($day<= 20)
					$zodiac="Pisces";
				else
					$zodiac="Aries";
				break;
			case "April":
				if($day<= 19)
					$zodiac="Aries";
				else
					$zodiac="Taurus";
				break;
			case "May":
				if($day<= 20)
					$zodiac="Taurus";
				else
					$zodiac="Gemini";
				break;
			case "June":
				if($day<= 20)
					$zodiac="Gemini";
				else
					$zodiac="Cancer";
				break;
			case "July":
				if($day<= 22)
					$zodiac="Cancer";
				else
					$zodiac="Leo";
				break;
			case "August":
				if($day<= 22)
					$zodiac="Leo";
				else
					$zodiac="Virgo";
				break;
			case "September":
				if($day<= 22)
					$zodiac="Virgo";
				else
					$zodiac="Libra";
				break;
			case "October":
				if($day<= 22)
					$zodiac="Libra";
				else
					$zodiac="Scorpio";
				break;
			case "November":
				if($day<= 21)
					$zodiac="Scorpio";
				else
					$zodiac="Sagittarius";
				break;
			case "December":
				if($day<= 21)
					$zodiac="Sagittarius";
				else
					$zodiac="Capricorn";
				break;



		}
		?>
		Your zodiac sign is: <?php echo $zodiac; ?>
	</p>
	<?php


	?>

	</body>

</html>

<?php



?>