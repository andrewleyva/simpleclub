<?php

/**VARIABLES**/
$js = array();
$css = array("base");
$page = "home";
require_once('../includes/header.php');

$today = date("Y-m-d H:i:s");
?>



<h1>Welcome to Simple Club</h1>

<div id="content">
<h2>Announcements</h2>

<?php
//$result = mysql_query("SELECT * FROM ANNOUNCEMENTS WHERE `show` < NOW() AND NOW() < `hide`");
$result = mysql_query("SELECT * FROM ANNOUNCEMENTS");

while($row = mysql_fetch_array($result))
{

?>

<h3><?php echo "{$row['title']}";?></h3>
<p><?php echo "{$row['body']}";?></p>

<?php } ?>
</div>


<div id="rightSide">
<!-- <span id="toggle_all"><a onClick="openAll()" style="cursor: pointer;">open all</a></span> -->
</div>

<?php require_once('../includes/footer.php');?>