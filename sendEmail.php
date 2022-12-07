<?php
if(!isset($_POST['submit']))
{
    echo "You need to submit the form.";
}
$sender_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$receiver_email = 'briankoome56@gmail.com';

if(empty($sender_email))
{
    echo "Email is mandatory.";
    exit;
}

if(IsInjected($sender_email))
{
    echo "Bad email value!";
    exit;
}

$to = $receiver_email;
$headers = "From: $sender_email\n";
$headers .= "Reply-To: $receiver_email";
mail($to,$subject,$message,$headers);
echo "Thank you for filling the form."

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>