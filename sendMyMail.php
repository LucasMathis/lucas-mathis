<?php

$captcha;

if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }

if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6Lf3aQwUAAAAAPjkk-ssEeoL7IGkojX1zBh4-Rn";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>Sorry, unable to send message. Please try again later./h2>';
        } else {
          echo '<h2>Thanks for sending a message!</h2>';
        }



/*
  require_once('recaptchalib.php');
  $privatekey = "6Lf3aQwUAAAAAPjkk-ssEeoL7IGkojX1zBh4-Rn";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    echo "hello world";
  }


	foreach ($_POST as $key => $value) {
		echo '<p><strong>' . $key. ':</strong> ' .$value.'</p>';
	}

*/


/*
if($_POST[g-recaptcha-response] == "6Lf3aQwUAAAAAPjkk-ssEeoL7IGkojX1zBh4-Rn") 
{
	echo "succes";
}
else
{
	echo "sorry robot";
}



$sendTo = "mathis.lucas10@gmail.com";
$sendersName =  stripslashes(htmlentities($_POST["sendersName"]));
$sendersEmail = stripslashes(htmlentities($_POST["sendersEmail"]));
$emailMsg =     stripslashes(htmlentities($_POST["emailMsg"]));


$emailMsg = $sendersName." ".$sendersEmail." ".$emailMsg;

mail($sendTo,"Portfolio Message",$emailMsg);
                             
print "<meta http-equiv=\"refresh\" content=\"0;URL=contact.html\">";
*/

?>