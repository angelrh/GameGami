<?php 

$ToEmail = 'brendcurran@gmail.com'; 
$EmailSubject = 'GameGami Email Address'; 
$mailheader = "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "New Email Address: " . $_POST['useremail']; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 


header('Location: http://www.gamegami.com');
exit();
?>
