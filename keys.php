<?php

// include('front_lang.php');
// original array

$lang = array(

);


// first make array keys string by implode.

	foreach ($lang as $key => $value) {
		// echo ucfirst($key), '<br>';
		echo $key, '<br>';
	}
	exit();
// you will get output on the browser like

/*

hello
world

*/