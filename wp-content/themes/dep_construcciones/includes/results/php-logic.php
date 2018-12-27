<?php
	
	// Post Variables

	$type = $_POST['type'];
	$business = $_POST['business'];
	$area = $_POST['area'];
	$from_home = $_POST['from-home'];

	if($from_home == 1){
		echo "Were from home";
	} elseif ($from_home == 0) {
		echo "Were from results";
	}