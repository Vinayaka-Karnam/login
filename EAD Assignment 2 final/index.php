<html>
<head>
<title>xml form</title>
</head>
<body>
<?php
if (isset($_REQUEST['ok'])) {
$xml = new DOMDocument("1.0","UTF-16");
$xml->load("employee1.xml");
$rootTag = $xml->getElementsByTagName("employee")->item(0);
$employeeTag = $xml->createElement("employees");
$idTag = $xml->createElement("id",$_REQUEST['id']);
$emailTag = $xml->createElement("email",$_REQUEST['email']);
$lastnameTag = $xml->createElement("lastname",$_REQUEST['lastname']);
$firstnameTag = $xml->createElement("firstname",$_REQUEST['firstname']);

$employeeTag->appendChild($idTag);
$employeeTag->appendChild($emailTag);
$employeeTag->appendChild($lastnameTag);
$employeeTag->appendChild($firstnameTag);
$rootTag->appendChild($employeeTag);

$xml->save("employee1.xml");
alert("New Employee Details Updated");
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

  ?>
  <form action="index.php" method="post">
  <h1>Enter employee ID</h1><input type="text" name="id" />
  <h1>Enter employee email</h1><input type="text" name="email" />
  <h1>Enter employee lastname</h1><input type="text" name="lastname" />
  <h1>Enter employee firstname</h1><input type="text" name="firstname" />
    <input type="submit" name="ok" value="SUBMIT">

    </form>
    
   <br>
   <a href="back.html">More options</a>
  </body>
</html>
