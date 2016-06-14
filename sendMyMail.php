<?php

$sendTo = "mathis.lucas10@gmail.com";
$sendersName =  stripslashes(htmlentities($_POST["sendersName"]));
$sendersEmail = stripslashes(htmlentities($_POST["sendersEmail"]));
$emailMsg =     stripslashes(htmlentities($_POST["emailMsg"]));


$emailMsg = $sendersName." ".$sendersEmail." ".$emailMsg;

mail($sendTo,"Portfolio Message",$emailMsg);
                             
print "<meta http-equiv=\"refresh\" content=\"0;URL=contact.html\">";
?>