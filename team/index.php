<?php

/**VARIABLES**/
$js = array("cookies", "ajax", "drag", "module", "content_expander");
$css = array("base", "util", "module");
$page = "team";
require_once('../includes/header.php');

?>

<h1>Echo Team</h1>

<div id="content" class="team">
<?php

//todo: fix new and edit to pages to allow user to create and edit team members (depending on priveleges)
if ($_GET[action] == 'new') require_once('new.php');
if ($_GET[action] == 'edit') require_once('edit.php');
else require_once('team.php');

 
?>
</div><!-- content -->

<?php /*require_once('../includes/tools.php');*/ ?>

<div id="rightSide">
<!-- <span id="toggle_all"><a onClick="openAll()" style="cursor: pointer;">open all</a></span> -->
</div>

<?php require_once('../includes/footer.php');?>