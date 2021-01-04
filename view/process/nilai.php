<?php
	$data = $_POST;
	foreach($_POST as $key => $value) {
		if($key === array_key_first($_POST)) echo "First Item!";
		echo '<pre>'.print_r($key, true).'</pre>';
		echo '<pre>'.print_r($value, true).'</pre>';
		// foreach($value as $k => $v) {
		// 	echo '<pre>'.$k . ' => ' . $v . '</pre>';
		// }
	}
?>