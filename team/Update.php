<?php

require_once("../includes/db_connect.php");

if ($_POST['id'])
{
    $query = "UPDATE TEAM SET ";
    if ($_POST['show']) $query .= " `show` = '" . $_POST['show'] . "',";
    if ($_POST['hide']) $query .= " hide = '" . $_POST['hide'] . "',";
    if ($_POST['img']) $query .= " img = '" . Form('img') . "',";
    if ($_POST['fName']) $query .= " fName = '" . Form('fName') . "',";
    if ($_POST['nName']) $query .= " nName = '" . Form('nName') . "',";
    if ($_POST['lName']) $query .= " lName = '" . Form('lName') . "',";
    if ($_POST['job']) $query .= " job = '" . Form('job') . "',";
    if ($_POST['campus']) $query .= " campus = '" . Form('campus') . "',";
    if ($_POST['major']) $query .= " major = '" . Form('major') . "',";
    if ($_POST['year']) $query .= " year = '" . Form('year') . "',";
    if ($_POST['stuff']) $query .= " stuff = '" . Form('stuff') . "',";
    if ($_POST['bio']) $query .= " bio = '" . Form('bio') . "'";
    /*get rid of last comma substr_replace(string,replacement,start,length) */
    $query =  substr_replace($query,'',strrpos($query ,','));

    $query .= " WHERE ID = '" . $_POST['id'] . "';";

}

$result = mysql_query($query);
if (!$result) {
    $message  = '<strong>Invalid query: </strong>'  . mysql_error() . "\n";
    $message .= '<strong>Whole query: </strong>' . $query;
    die($message);
}


include('index3.php');


function Form($x)
{
   return htmlspecialchars($_POST[$x], ENT_QUOTES);
}
?>