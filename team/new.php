<?php $newPK = 'TM' . (mysql_num_rows($result) + 1); ?>

<form action="createNew.php" method="post">

<div class="module" id="new">
<input type="hidden" name="id" value="<?php  echo $newPK ?>" >
    <div class="head">
        <div id="jimwinn-image"class="image_max">
            <a onClick="toggle('jimwinn');" style="cursor: pointer;">
                <img src="img/jim.jpg" align="left"/>new image here
<input type="text" name="img">
            </a>
        </div>
        <div class="facts">
            <strong>Name: </strong><input type="text" name="fName" value="first">
<input type="text" name="nName" value="nickname">
<input type="text" name="lName" value="last"><br />
            <strong>Echo Job: </strong><input type="text" name="job"><br />
            <strong>Campus: </strong><input type="text" name="campus"><br />

            <strong>Major: </strong><input type="text" name="major"><br />
            <strong>Year: </strong><input type="text" name="year"><br />
            <strong>And Stuff... </strong><input type="text" name="stuff"><br />
        </div>
    </div><!--head-->
    <div id="new-body"><textarea rows="5" cols="20" name="bio"></textarea>
      <p><strong>Start Showing: </strong><input type="text" name="show"></p>
      <p><strong>Stop Showing: </strong><input type="text" name="hide"></p>
      <p><input type="submit" value="Submit"></p>
    </div><!-- body -->
    
    
</div>

</form>
