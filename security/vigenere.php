<?php

$key = "ngoding";

// membuat fungsi enkripsi
function encrypt($key, $message)
{
	// inisialisasi variable
	$ki = 0;
	$kl = strlen($key);
	$length = strlen($message);
	// lakukan perulangan untuk setiap abjad
	for ($i = 0; $i < $length; $i++){
		// jika text merupakan alphabet
		if (ctype_alpha($message[$i])){
			// jika text merupakan huruf kapital (semua)
			if (ctype_upper($message[$i])){
				$message[$i] = chr(((ord($message[$i]) - ord("A") + ord($key[$ki]) - ord("A")) % 26) + ord("A"));
			}
			// jika text merupakan huruf kecil (semua)
			else{
				$message[$i] = chr(((ord($message[$i]) - ord("a") + ord($key[$ki]) - ord("a")) % 26) + ord("a"));
			}
			$ki++;
			if ($ki >= $kl){
				$ki = 0;
			}
		}
	}
	// mengembalikan nilai text
	return $message;
}

// membuat fungsi dekripsi
function decrypt($key, $message)
{
	// inisialisasi variable
	$ki = 0;
	$kl = strlen($key);
	$length = strlen($message);
	// lakukan perulangan untuk setiap abjad
	for ($i = 0; $i < $length; $i++){
		// jika text merupakan alphabet
		if (ctype_alpha($message[$i])){
			// jika text merupakan huruf kapital (semua)
			if (ctype_upper($message[$i])){
				$x = ((ord($message[$i]) - ord("A")) - (ord($key[$ki]) - ord("A")) % 26);
				if ($x < 0){
					$x += 26;
				}
				$x = $x + ord("A");
				$message[$i] = chr($x);
			}
			// jika text merupakan huruf kecil (semua)
			else{
				$x = ((ord($message[$i]) - ord("a")) - (ord($key[$ki]) - ord("a")) % 26);
				if ($x < 0){
					$x += 26;
				}
				$x = $x + ord("a");
				
				$message[$i] = chr($x);
			}
			
			$ki++;
			if ($ki >= $kl){
				$ki = 0;
			}
		}
	}
	
	// mengembalikan nilai text
	return $message;
}