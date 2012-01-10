<?php
header('Location: home/');
$page = "echo";
$css = array("base");
require_once('includes/header.php');

?>

<h1>Welcome to Echo</h1>

<div id="content">
Click <a href="home">here</a> if you are not automatically redirected to the home page.
</div>

<?php require_once('includes/footer.php');?>