<?php
/*
 * author: Ryan Hendrickson
 * date: January 15th, 2020.
 * filename: index.php
 * url: https://rhendrickson.greenriverdev.com/328/pair-programs/arrays-and-git/index.php
 * description: a pair program for learning git and we make/manipulate some arrays
 */

// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Arrays and Git!</title>
</head>
<body>
	<h1>Pair Program 2</h1>

	<?php
		echo '<h2>PHP Array Practice!</h2>';

		$numbers = array(7, 9, 8, 9, 8, 8, 6);

	/** prints a 1-d array using a foreach loop
	 * @param $array - an array that gets passed in to be printed
	 */
		function printArr($array) {
			foreach ($array as $item) {
				echo "<p>$item</p>";
			}
		}

		printArr($numbers);
	?>
</body>
</html>
