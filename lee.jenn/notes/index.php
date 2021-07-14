<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>


<body>

<!-- phpinfo(); -->

<!-- display on for errors -->

<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
 ?>


<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


	echo "<div>hello world</div>";

	echo "<div>goodbye world</div>";


	// Variables
	$a = 5;
	echo $a;

	// String Interpolation - always use double quotes!
	echo "<div>I have a $a things</div>";


	// Number 
	// Integer
	$b = 15;

	// Float Number
	$b = 0.576;
	$b = 10;

	// String
	$name = "Yerugy2";

	// Boolean
	$isOn = true;

	// Math
	echo 5 + 4 - 2;

	// Conccatenation
	echo "<div>b + a " . " = c </div>";
	echo "<div>$b + $a = ".($a + $b)."</div>";

?>



<hr>  <!-- line break line break line break line break line break -->
	<div>This is my name</div>
<?php 

	$firstName = "Jenn";
	$lastName = "Lee";
	$fullName = "$firstName $lastName";
	// $fullName = $firstName ." ". $lastName;

	echo $fullName;
?>






<hr>  <!-- line break line break line break line break line break -->
<?php 

	//superglobal
	//?name = Jenn
	//echo $_GET['name'];
	//surround with brace when variable is quite complex
	echo "<div>My name is {$_GET['name']}</div>";

	//?name=Jenn&type=button/h1/p...
	//http://codejenn.com/jlee/aau/wnm608/lee.jenn/notes/?name=Jenn&type=p
	echo "<{$_GET['type']}>My name is {$_GET['name']}<{$_GET['type']}>";
 ?>





<hr>  <!-- line break line break line break line break line break -->
<?php 
	//Array
	$colors = array("red", "green", "blue");
	echo $colors[0];
	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	echo count($colors);

 ?>

 <div style="color:<?= $colors[1]; ?>">
 	This text is green
 </div>



<hr>  <!-- line break line break line break line break line break -->
<?php 

	//Associative Array
	$colorsAssociative = [
		"red" => "#f00", 
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorsAssociative['green']; //will show #0f0

 ?>



 <hr>  <!-- line break line break line break line break line break -->
 <?php 

 	//Object and Casting (converting types - numbers, strings, boolean...)
 	$c = "$a"; //a was number 5, but now within a "", it becomes a string
 	$d = $c * 1; //

 	$colorsObject = (object)$colorsAssociative;


 	echo "</hr>";

 	//Array index notation 
 	echo $colors[0]."<br>";
 	echo $colorsAssociative['red']."<br>";
 	echo $colorsAssociative[$colors[0]]."<br>";


 	//Object property notation 
 	echo $colorsObject->red."<br>";
 	echo $colorsObject->{$colors[0]}."<br>";

  ?>
	


<hr>  <!-- line break line break line break line break line break -->
<?php 	
	
	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>", print_r($colorsObject),"</pre>";

	// function 
	function print_p($v) {
		echo "<pre>", print_r($v),"</pre>";
	}

	//http://codejenn.com/jlee/aau/wnm608/lee.jenn/notes/?name=Jenn&type=p
	print_p($_GET);

 ?>


</body>
</html>