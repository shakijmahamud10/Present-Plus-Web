<?php
session_start();
include("connect.php");

if (isset($_GET["id"])) {
	$id = $_GET["id"];
    
	echo $sql = "DELETE FROM time WHERE time_id =$id";
	$con->query($sql);
    header("location:record.php");
	
} else {
	header("location:record.php");
}
