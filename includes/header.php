<?php 
include ('language.php'); 
require_once("db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title><?=$title?></title>

<?php
if ($css) {
	foreach ($css as $file) {
	echo '<link rel="stylesheet" type="text/css" href="' . $baseurl .  'css/' . $file . '.css">';		
	}
}

if ($js) {
	foreach ($js as $file) {
		echo '<script defer type="text/javascript" src="' . $baseurl .  'scripts/' . $file . '.js"></script>';
	}
}

?>

<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?=$baseurl?>js/pngfix.js"></script>
<![endif]-->

</head>

<?php if (($page == "events")||($page == "team")) { ?>
<body onload="Set_Profiles()">
<?php } else {?>
<body id="<?=$page?>">
<?php } ?>

<div id="col1">
	<a href="<?=$baseurl?>home"><img src="<?=$baseurl?>img/logo.png" border="0"></a>
	<ul id="navigation">
		<li <? if ($page == "home") { ?> class="clicked" <? } ?>>
			<? if ($page != "home") { ?><a href="<?=$baseurl?>home"><? }?>Home<? if ($page != "home") { ?></a><? }?>
		</li>
		<li <? if ($page == "about") { ?> class="clicked" <? } ?>>
			<? if ($page != "about") { ?><a href="<?=$baseurl?>about"><? } ?>About<? if ($page != "about") { ?></a><? } ?>
		</li>
		<li <? if ($page == "team") { ?> class="clicked" <? } ?>>
			<? if ($page != "team") { ?><a href="<?=$baseurl?>team"><? } ?>Team<? if ($page != "team") { ?></a><? } ?>
		</li>
		<li <? if ($page == "events") { ?> class="clicked" <? } ?>>
			<? if ($page != "events") { ?><a href="<?=$baseurl?>events"><? } ?>Events <? if ($page != "events") { ?></a><? } ?>
		</li>
		<li <? if ($page == "contact") { ?> class="clicked" <? } ?>>
			<? if ($page != "contact") { ?><a href="<?=$baseurl?>contact"><? } ?>Contact<? if ($page != "contact") { ?></a><? } ?>
		</li>
	</ul>
</div>

<div id="col2">