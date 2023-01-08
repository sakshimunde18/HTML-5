<form method="post">
<input type="radio" name="sex" value="Male">Male
<br>
<input type="radio" name="sex" value="Female">Female
<br>
<input type="submit" name="sub">
</form>

<?php
	if(isset($_POST['sub'])) {
		print_r($_POST);
	}
?>