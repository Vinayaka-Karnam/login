<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login.php</title>
</head>
<body>
 <?php
require_once('recaptchalib.php');
$privatekey = "6LdjiKEUAAAAAIyxlg7GulGaQmSOPVhMA_Km9tMT";
$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  // What happens when the CAPTCHA was entered incorrectly
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       "(reCAPTCHA said: " . $resp->error . ")");
} else {
  // Your code here to handle a successful verification







  /* get the user name and password from the form*/
  $username = $_REQUEST["username"];
  $password1 = $_REQUEST["password"];
  $password=md5($password1);

// empty response
$response = null;


  /*set oracle user login and password info */
  $dbuser="karnamv";  // Deakin  username
  $dbpass="Vimala1~"; // Deakin password
  $db="SSID";
  $connect=OCILogon($dbuser, $dbpass, $db);
 
  if (!$connect)
  {
    echo("An error occurred connecting to the database");
    exit;
  }

  /*build sql statement */
  $query="SELECT * FROM Login WHERE username='".$username. "' OR password='".$password."'";

  /*check the sql statement for errors and if there are errors report them.*/
  $stmt=OCIParse($connect, $query);

  if(!$stmt)
  {
    echo("An error occurred in parsing the SQL string. \n");
    exit;
  }

  OCIExecute($stmt);

  /*
  /* simple checking if both username and password are valid */
  // if(OCIFetch($stmt))
  //  echo "Welcome ".$username."! You successfully logged in to the system.\n";
  // else
  //  echo "Sorry, your username/password is incorrect.\n";


  /* complete checking if both or individual username and password are valid */
  $username_exist = false;
  $password_exist = false;
  $right_exist = false;
  $valid = false;
  $empty = true;
 $valid1 = false;
 
  while(OCIFetch($stmt))
  {
      $empty = false;

      if(OCIResult($stmt,"USERNAME") == $username)
      {
        if(OCIResult($stmt,"PASSWORD") == $password)
        {
          if(OCIResult($stmt,"RIGHT") == "guest")
          {
            $right=strtoupper(OCIResult($stmt,"RIGHT"));
            $valid1 = true;
          }
          else
          {
            $right=strtoupper(OCIResult($stmt,"RIGHT"));
            $valid = true;
          }
        }
          else
          $username_exist = true;
      }
      else
        $password_exist = true;

  }


  if($empty)
    echo "Sorry, your account does not exist. Please try again.";
  elseif(($valid)||($valid1))
  {
    echo "Welcome ".$username."! You are successfully logged in to the system as ".$right.".\n";
    echo  "<br>";
    echo  "<a href=\"Environment.html\">Display Environment Data </a><br>";
    echo  "<a href=\"employeedata.html\">Display Employee database</a><br>";
    echo  "<a href=\"search.html\">Search Employee </a> <br>";
    if($valid)
    echo  "<a href=\"index.php\">Insert a data into the Employee database </a> <br>";
    echo  "<a href=\"Logout.html\">Logout";
}

    elseif ($username_exist)
      echo "Sorry, your password is incorrect.\n";
    else 
      echo "Sorry, your username is incorrect.\n";
//close the connection
  OCILogOff($connect);
}


?>
 </body>
</html>