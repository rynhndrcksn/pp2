<?php
/*
 * author: Ryan Hendrickson
 * date: January 15th, 2020.
 * filename: functions.php
 * url: https://rhendrickson.greenriverdev.com/328/pair-programs/arrays-and-git/index.php
 * description: php file that contains all of our php functions for index.php
 */

/** prints a 1-d array using a foreach loop
 * @param $array - an array that gets passed in to be printed
 */
function printArr($array) {
	foreach ($array as $item) {
		echo "<p>$item</p>";
	}
}