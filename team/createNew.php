<?php

require_once("../includes/db_connect.php");

$pID = $_POST['id'];
$pShow = $_POST['show'];
$pHide = $_POST['hide'];
$pImg = $_POST['img'];
$pFName = $_POST['fName'];
$pNName = $_POST['nName'];
$pLName = $_POST['lName'];
$pJob =  $_POST['job'];
$pCampus = $_POST['campus'];
$pMajor = $_POST['major'];
$pYear = $_POST['year'];
$pStuff = $_POST['stuff'];
$pBio = $_POST['bio'];


$query = "INSERT INTO TEAM VALUES ('$pID', '$pShow', '$pHide', '$pImg', '$pFName', '$pNName', '$pLName', '$pJob', '$pCampus', '$pMajor', '$pYear', '$pStuff', '$pBio')";

$result = mysql_query($query);
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}


include('index3.php');
?>