<?php
	$data = $_POST["data"];
	$file = fopen("../redirects.csv", "w+");
	$result = fwrite($file, $data);
	fclose($file);
    echo json_encode($result);
?>