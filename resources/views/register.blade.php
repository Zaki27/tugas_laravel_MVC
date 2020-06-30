<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><b>Buat Account Baru</b></h1>
	<h3>Sign Up Form</h3>

	<form action="/welcome" method="post">
		
		@csrf

		<label>First Name : </label><br><br>
		<input type="text" name="first_name"><br><br>
		<label>Last Name : </label><br><br>
		<input type="text" name="last_name"><br><br>
		
		<label>Gender : </label><br><br>
		<input type="radio" name="gender" value="male">
		<label>Male</label><br>
		<input type="radio" name="gender" value="female">
		<label>Female</label><br>
		<input type="radio" name="gender" value="other">
		<label>Other</label><br><br>
		
		<label>Nationality : </label><br><br>
		<select name="nationality">
			<option value="indonesian">Indonesian</option>
			<option value="malasyian">Malasyian</option>
			<option value="singaporean">Singaporean</option>
			<option value="other">Other</option>
		</select><br><br>

		<label>Language Spoken : </label><br><br>
		<input type="checkbox" name="language" value="bahasa">
		<label>Bahasa Indonesia</label><br>
		<input type="checkbox" name="language" value="english">
		<label>English</label><br>
		<input type="checkbox" name="language" value="other">
		<label>Other</label><br><br>

		<label>Bio : </label><br><br>
		<textarea name="message" rows="10" cols="30"></textarea><br>
		<button type="submit">Sign Up</button>
	</form>

</body>
</html>