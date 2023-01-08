<form method="post" action="submit.php">
<label>First Name :</label> <input type="text" name="fName" autofocus tabindex="1" placeholder="Your First Name" />
<br>
Last Name : <input name="lName" tabindex="2" />
<br/>
	Password : <input type="password" name="pwd" tabindex="3" >
<br>
	<input type="checkbox" name="html" value="HTML,CSS,JS" tabindex="4">HTML,CSS,JS
	<input type="checkbox" name="php" value="PHP,MySQL" tabindex="5" >PHP,MySQL
	<input type="checkbox" name="wp" value="Wordpress" tabindex="6" >Wordpress
<br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>
<input type="number">
<br><br>
<input type="date">
<br><br>
<input type="email" name="email" placeholder="Enter your email">
<br><br>
<input type="file" multiple>
<br><br>
<input type="tel">
<br><br>
<input type="hidden" value="id">
<br><br>
<select name="country" >
	<option value="India">India</option>
	<option value="Aus">Australia</option>
	<option value="USA">USA</option>
	<option value="Europe">Europe</option>
</select>
<br><br>
<textarea cols="16" rows="4" name="msg"></textarea>
<br><br>
	<input type="button" name="btn" value="Click Me">
<br><br>
<input type="reset">
<br><br>
<input type="submit" name="sub" value="Submit" >
	<button>Send</button>
</form>