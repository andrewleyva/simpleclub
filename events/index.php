<?php

/**VARIABLES**/
$js = array("cookies", "ajax", "drag", "module", "content_expander");
$css = array("base", "util", "module");
$page = "events";
require_once('../includes/header.php');

?>

<h1>Events</h1>
<div id="content" class="events">
<?php

//todo: fix new and edit to pages to allow user to create and edit events
//if ($_GET[action] == 'new') require_once('new.php');  /
//if ($_GET[action] == 'edit') require_once('edit.php');
require_once('events.php');

?>
</div><!-- content -->

<div id="rightSide">

<!-- <span id="toggle_all"><a onClick="openAll()" style="cursor: pointer;">open all</a></span> -->

</div>

<?php require_once('../includes/footer.php');?>