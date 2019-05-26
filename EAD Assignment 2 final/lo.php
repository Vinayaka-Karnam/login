
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
	<body>
     
		<form action="login.php" method="post">
			<table bgcolor="#f2f2f2" style="padding:50px" align="center" width="550px">
				<tr><td align="center" colspan="2"> <h1>Login Page</h1> </td></tr>
<tr>
<td> Username : </td><td><input type="username" name="username"></td>
</tr>
<tr>
<td> Password : </td><td><input type="password" name="password"></td>
</tr>
<br><br>
<tr>
<td><br><br><td>
<?php
require_once('recaptchalib.php');
$publickey = "6LdjiKEUAAAAAKew3iD8oSRJ-6D37Aq59eX5Ym6b"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?></td>
  
      
</tr>
				<tr>

					<td colspan=2><input type=Submit></td>
				</tr>
			</table>
		</form>

		<P><br><b>Guest User:</b></br>
		<br>Username: "abc"</br>
	<br>Password: "111" </br></p>

	</body>
</html>