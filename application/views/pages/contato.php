<?php 
	

	//echo $problemas;

	/**echo '<pre>';
		print_r($problemas);
	echo '</pre>';
	echo '<pre>';
		print_r($arrays);
	echo '</pre>';**/
	$i = 1;
	for ($names = array(); count($names) < 4; $names = array_unique($names)) {

	    $names[] = $i;
		$i++;
	}
	echo '<pre>';
		print_r($names);
	echo '</pre>';

?>