<?php
    require_once('include/strenght.inc.php');
	$password = isset($_GET['password'])?trim($_GET['password']):'';
	$strenght = calcPasswordStrenght($password);
	echo $strenght;
	