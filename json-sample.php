<?php
	$json_arr[] = array(
			 "td1" => 'one',
			  "td2" => 'two',
			  "td3" => 'three'
	);
	
	$data = array('type' => "Table",'tr1' => $json_arr,'tr2' => $json_arr,'tr3' => $json_arr,'tr4' => $json_arr
	);
	print json_encode($data);

?>