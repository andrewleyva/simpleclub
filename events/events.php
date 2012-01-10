<?php
$today = date("Y-m-d H:i:s");

//Shows only upcoming events
$result = mysql_query("SELECT * FROM EVENTS WHERE `show` < NOW() AND NOW() < `hide`");

while($row = mysql_fetch_array($result))
{

?>

<div class="module" id="<?php echo "{$row['ID']}" ?>">
	<div class="head">
		<a onClick="toggle('<?php echo "{$row['ID']}" ?>');" style="cursor: pointer;">
			<img src="img/<?php echo "{$row['img']}" ?>" align="left"/>
		</a><!-- end module.image -->
		<div class="facts">
			<strong>Title: </strong><?php echo "{$row['title']}";?><br />
			<strong>Begins: </strong><?php echo "{$row['start']}";?><br />
			<strong>Ends: </strong><?php echo "{$row['end']}";?><br />
			<strong>Location: </strong><?php echo "{$row['location']}";?><br />
		</div><!-- end module.facts-->
	</div><!-- end module.head -->
	<div id="<?php echo "{$row['ID']}" ?>-body" class="body">
		<?php echo "{$row['details']}";?>
	</div>
</div><!-- end module -->
<?php } ?>