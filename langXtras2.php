<?php
$string_keys = 
"";

$string_values = 
"";

// make the string to array

$array_keys = explode("\r\n", $string_keys);
$array_values = explode("\r\n", $string_values);

// now combine both arrays into one array with array_combine function.

$final_array = array_combine($array_keys, $array_values);


$new_var = array();


foreach ($final_array as $key => $value) {

	// if(strlen($value) < 50 )
  		// echo '    '.'"' . $key. '"' . ' ' . '=>' . ' ' . '"' . ucfirst($value). '",' . '<br>';
 //  	else
  		echo '    '.'"' . $key. '"' . ' ' . '=>' . ' ' . '"' . $value. '",' . '<br>';
}
