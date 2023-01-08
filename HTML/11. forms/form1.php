<form method="get">
First Name : <input name="fName" autofocus tabindex="1" />
<br>
Last Name : <input type="text" name="lName" tabindex="2" />
<br/>
	Password : <input type="password" name="pwd" tabindex="3" >
<br>
	<input type="checkbox" name="html" value="html,css,js" tabindex="4">HTML,CSS,JS
	<input type="checkbox" name="php" value="PHP,MySQL" tabindex="5" >PHP,MySQL
	<input type="checkbox" name="wp" value="Wordpress" tabindex="6" >Wordpress
<br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br>
<select name="country" >
	<option value="India">India</option>
	<option value="Aus">Australia</option>
	<option value="USA">USA</option>
	<option value="Eur">Europe</option>
</select>
<br>
<textarea cols="20" rows="10" name="msg"></textarea>
<br>
	<input type="button" name="btn" value="Click Me">
<br>
<input type="submit" name="sub" >
	<button>Send</button>
</form>
<?php
	//echo $_P['country'];
	print_r($_GET);
?>