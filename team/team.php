<?php
$today = date("Y-m-d H:i:s");

//Shows current team members based on set term
$currentTeam = mysql_query("SELECT * FROM TEAM WHERE `show` < NOW() AND NOW() < `hide`");
?>


<?php
while($row = mysql_fetch_array($currentTeam))
{

	$fullname = "{$row['fName']}";
	if ($row['nName']) "&quot;{$row['nName']}&quot;";
	$fullname .= " {$row['lName']}";
	
?>

<div class="module" id="<?php echo "{$row['ID']}" ?>">
    <div class="head">   
        <a id="<?php echo "{$row['ID']}" ?>-image" class="down" onClick="toggle('<?php echo "{$row['ID']}" ?>');" style="cursor: pointer;">
                <img src="img/<?php echo "{$row['img']}" ?>" align="left"/>
        </a><!-- end module.image -->
        <div class="facts">
            <strong>Name: </strong><?php echo "$fullname";?><br />
            <strong>Echo Job: </strong><?php echo "{$row['job']}";?><br />
            <strong>Campus: </strong><?php echo "{$row['campus']}";?><br />
            <strong>Major: </strong><?php echo "{$row['major']}";?><br />
            <strong>Year: </strong><?php echo "{$row['year']}";?><br />
            <strong>And Stuff... </strong><?php echo "{$row['stuff']}";?><br />
        </div><!-- end module.facts-->
	</div><!-- end module.head -->
    <div id="<?php echo "{$row['ID']}" ?>-body" class="body"><?php echo "{$row['bio']}";?></div>
</div><!-- end module -->

<?php } ?>