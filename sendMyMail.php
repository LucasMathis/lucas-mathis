<?php


if(isset($_POST['submit']) && !empty($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6Lf3aQwUAAAAAPjkk-ssEeoL7IGkojX1zBh4-Rna';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
			$sendersName =  stripslashes(htmlentities($_POST["sendersName"]));
			$sendersEmail = stripslashes(htmlentities($_POST["sendersEmail"]));
			$emailMsg =     stripslashes(htmlentities($_POST["emailMsg"]));
            
            $to = 'mathis.lucas10@gmail.com';
            $subject = 'Contact from Portfolio Website';
            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$sendersName."</p>
                <p><b>Email: </b>".$sendersEmail."</p>
                <p><b>Message: </b>".$emailMsg."</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$sendersName.' <'.$sendersEmail.'>' . "\r\n";
            //send email
            mail($to,$subject,$htmlContent,$headers);
            
            $succMsg = 'Your contact request have submitted successfully.';
            echo $succMsg;
        else:
            $errMsg = 'Robot verification failed, please try again.';
        	echo $errMsg;
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    	echo $errMsg;
    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;



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