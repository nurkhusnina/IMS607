<html>
<head>
<title>
HTML CHAPTER
</title>
</head>
<body>
Hello! - For HTML <br/>
</body>
</html>




<?php
	echo "Car Park Simple System Example <br/>";
	$CarA = 6; // Declaration & Iniliazition
	$FirstHour = 4;
	$SecondHour = 2;
	$Hour = 1;

if ($CarA > $Hour)
{
	$TotalHour =$CarA - $Hour;
	$TotalCharge = ($TotalHour*$SecondHour) + $FirstHour;
	echo "You Should Pay : RM $TotalCharge<br/>";
}
else 
{
	$TotalCharge = $TotalHour*$FirstHour;
echo "You should Pay : RM $TotalCharge<br/>";
}
?>

<?php

echo "calculation <br/>";

$A = 10;//Declaration & Iniliazition of variable
$B = 20;
$Total = 50;

echo "Total = $Total <br/>";
$Total = $A+($B-$A);
echo "Result = $Total <br/>";

echo "Condition for if.......... else statement <br/>";
$A=4;
$B=4;

if ($A==4 AND $B==4)//Condition
{
			echo "Both  Number are the same as declared <br/>";
			//statement
}

else
{
	echo "Both Number are the same as declared <br/>";

}
echo "</br>";
echo "</br>";

echo "Grade Scheme<br/>";

$ScorA=80;
$ScorB=60;
$ScorC=40;
$ScorD=10;

$Mark=10;

if ($Mark >= $ScorA)// if Nila A more than Scor A
{
	echo "A </br>";
}
elseif ($Mark >= $ScorB)
{
	echo "B </br>";
}
elseif ($Mark >= $ScorC)
{
	echo "C </br>";
}
elseif ($Mark >= $ScorD)
{
	echo "D </br>";
}
else
{
	echo "Failed";
}