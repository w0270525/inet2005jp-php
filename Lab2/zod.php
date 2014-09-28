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
			case "january":
			case "1":
				if ($day <= 19)
					$zodiac="Capricorn";
				else
					$zodiac="Aquarius";
				break;
			case "February":
			case "february":
			case "2":
				if($day<= 19)
					$zodiac="Aquarius";
				else
					$zodiac="Pisces";
				break;
			case "March":
			case "march":
			case "3":
				if($day<= 20)
					$zodiac="Pisces";
				else
					$zodiac="Aries";
				break;
			case "April":
			case "april":
			case "4":
				if($day<= 19)
					$zodiac="Aries";
				else
					$zodiac="Taurus";
				break;
			case "May":
			case "may":
			case "5":
				if($day<= 20)
					$zodiac="Taurus";
				else
					$zodiac="Gemini";
				break;
			case "June":
			case "june":
			case "6":
				if($day<= 20)
					$zodiac="Gemini";
				else
					$zodiac="Cancer";
				break;
			case "July":
			case "july":
			case "7":
				if($day<= 22)
					$zodiac="Cancer";
				else
					$zodiac="Leo";
				break;
			case "August":
			case "august":
			case "8":
				if($day<= 22)
					$zodiac="Leo";
				else
					$zodiac="Virgo";
				break;
			case "September":
			case "september":
			case "9":

				if($day<= 22)
					$zodiac="Virgo";
				else
					$zodiac="Libra";
				break;
			case "October":
			case "october":
			case "10":
				if($day<= 22)
					$zodiac="Libra";
				else
					$zodiac="Scorpio";
				break;
			case "November":
			case "november":
			case "11":
				if($day<= 21)
					$zodiac="Scorpio";
				else
					$zodiac="Sagittarius";
				break;
			case "December":
			case "december":
			case "12":
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

