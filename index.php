<?php
	
	$praga=rand();
	$praga=base64_encode($praga);

	header ("location: login.php?cmd=submit_log&id=$praga$praga&session=$praga$praga");


?>