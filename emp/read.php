<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('../class/Rest.php');
$api = new Rest();
switch($requestMethod) {
	case 'GET':
		$empId = '';	
		if(isset($_GET['id'])) {
			$empId = $_GET['id'];
		}
		$api->getEmployee($empId);
		break;
	default:
	header("HTTP/1.0 405 Method Not Allowed");
	break;
}
?>