<?php

// include('front_lang.php');
// original array

$lang = array();


// first make array keys string by implode.

	// foreach ($lang as $key => $value) {
	// 	// echo ucfirst($key), '<br>';
	// 	echo $key, '<br>';
	// }
	// exit();
// you will get output on the browser like

/*

hello
world

*/

// translate it in google translator. you will get something like

/*

হ্যালো
বিশ্ব

*/



// copy it and save it to string like

$string_keys = 
"";

$string_values = 
"";

// make the string to array

$array_keys = explode("\r\n", $string_keys);
$array_values = explode("\r\n", $string_values);

// now combine both arrays into one array with array_combine function.

$final_array = array_combine($array_keys, $array_values);

// output to browser using var_export for writing on sublime

echo '<pre>'.htmlspecialchars('<?php').'<br>';

// $final_array = array_map('ucfirst', $final_array);

// echo '$lang = ';

// var_export($final_array);

$new_var = array();

echo 'return array'. '(';

echo "<br>";




foreach ($final_array as $key => $value) {

	// if(strlen($value) < 50 )
  		// echo '    '.'"' . $key. '"' . ' ' . '=>' . ' ' . '"' . ucfirst($value). '",' . '<br>';
 //  	else
  		echo '    '.'"' . $key. '"' . ' ' . '=>' . ' ' . '"' . $value. '",' . '<br>';
}


echo ')';

echo ";";