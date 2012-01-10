edit
<?php
while($row = mysql_fetch_array($result))
{
?>
<form action="Update.php" method="post">

<div class="module" id="<?php echo "{$row['ID']}" ?>">
<input type="hidden" name="id" value="<?php echo "{$row['ID']}" ?>" >
    <div class="head">
        <div id="<?php echo "{$row['ID']}" ?>-image"class="image_max">
            <a onClick="toggle('<?php echo "{$row['ID']}" ?>');" style="cursor: pointer;">
                 <img src="<?php echo "{$row['img']}" ?>" align="left"/>
<input type="text" name="img" value="<?php echo "{$row['img']}" ?>">
            </a>
        </div>
        <div class="facts">
            <strong>Name: </strong>
		
		<input type="text" name="fName" value="<?php echo "{$row['f_name']}" ?>" size="5">
		<input type="text" name="nName" value="<?php echo "{$row['nickname']}" ?>" size="5">
		<input type="text" name="lName" value="<?php echo "{$row['l_name']}" ?>" size="5">
		<br />
            <strong>Echo Job: </strong><input type="text" name="job" value="<?php echo "{$row['job']}" ?>"><br />
            <strong>Campus: </strong><input type="text" name="campus" value="<?php echo "{$row['campus']}" ?>"><br />

            <strong>Major: </strong><input type="text" name="major" value="<?php echo "{$row['major']}" ?>"><br />
            <strong>Year: </strong><textarea rows="1" cols="50" name="year"><?php echo "{$row['year']}" ?></textarea><br />
            <strong>And Stuff... </strong><input type="text" name="stuff" value="<?php echo "{$row['stuff']}" ?>"><br />
        </div>
    </div><!--head-->
    <div id="<?php echo "{$row['ID']}" ?>-body"><textarea rows="1" cols="70" name="bio"></textarea>
      <p><strong>Start Showing: </strong><input type="text" name="show" value="<?php echo "{$row['show']}" ?>"></p>
      <p><strong>Stop Showing: </strong><input type="text" name="hide" value="<?php echo "{$row['hide']}" ?>"></p>
      <p><input type="submit" value="Submit"></p>
    </div><!-- body -->
    
    
</div>

</form>

<?php } ?>
