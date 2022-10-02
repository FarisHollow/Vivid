<?php
require_once("../model/db.php");
require_once("../model/adminModel.php");

error_reporting(0);
$txt = $_GET['txt'];
$id = $_GET['id'];

?>

<html>
    <head>
        <title>Edit Post</title>
    </head>

    <body align="center">
<h2 >Edit Your Post </h2>

<form  method="get" action="editpostchk.php" >

			<label ><b>Write Here</b></label>
		<div >
			<input type="text"   name="id" rows="7"  maxlength="3000"  autofocus value="<?php echo "$id" ?>"><br>
			<input type="text" placeholder="What's in your mind?"  name="text" rows="7"  maxlength="3000"  autofocus value="<?php echo "$txt" ?>"><br>
		</div>


	<div>
		<input type="submit" name="submit">
	</div>
	<br><br>

	

</form>
</body>
</html>
