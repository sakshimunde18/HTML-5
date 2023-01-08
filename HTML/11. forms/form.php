<form method="post" action="#">
 First Name : <input name="firstname" autofocus tabindex="1" placeholder="Ganesh" required="" readonly="readonly" disabled="" />
<br>
Last Name : <input type="text" name="lName" tabindex="2" />
<br/>
	Password : <input type="password" name="pwd" tabindex="3" >	
<br>
	<input type="checkbox" name="html" value="HTML,CSS,JS" tabindex="4">HTML,CSS,JS
	<input type="checkbox" name="php" value="PHP,MySQL" tabindex="5" >PHP,MySQL
	<input type="checkbox" name="wp" value="Wordpress" tabindex="6" >Wordpress
<br>
Email : <input type="email" name="mail" >
<br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br>
<select name="country" >
	<option value="India">India</option>
	<option value="Australia">Australia</option>
	<option value="USA">USA</option>
	<option value="Europe">Europe</option>
</select>
<br>
<textarea cols="30" rows="4" name="msg"></textarea>
<br>
	<input type="button" name="btn" value="Click Me" onclick="fun()">
<br>
<input type="submit" name="sub" value="Sub" >
	<button value="login" name="login">Login</button><br>
	<input type="hidden" name="cust_id" value="10"><br>
	<input type="date" name="date"><br>
	<input type="tel" maxlength="10" minlength="10" name="contact"><br>
	
	<input type="reset" name="reset"><br>
	<input type="file" name="upload" value="upload" multiple="multiple" >
</form>
<?php
//echo $_POST['country'];
?>
<script type="text/javascript">
	function fun() {
		alert("hi")
	}
</script>