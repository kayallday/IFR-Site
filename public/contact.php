<?php
/*
*  CONFIGURE EVERYTHING HERE
*/

// an email address that will be in the From field of the email.
$from = 'Demo contact form <demo@domain.com>';

// an email address that will receive the email with the output of the form
$sendTo = '<indianafathersrights@gmail.com>';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

// message that will be displayed when everything is OK :)
$okMessage = 'Your message was sent. Thank you for reaching out, we will get back to you as soon as possible.';

// If something goes wrong, we will display this message.
$errorMessage = 'Well this is embarassing, that didn&#39t work. Please try again. If the problem persists, send an email to indianafathersrights@gmail.com with the subject line *web error* and our devs will get back with you to get a handle on the issue.';

/*
*  LET'S DO THE SENDING
*/

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

  if(count($_POST) == 0) throw new \Exception('Form is empty');

  $emailText = "New contact form submission:\n=============================\n";

  foreach ($_POST as $key => $value) {
    // If the field exists in the $fields array, include it in the email
    if (isset($fields[$key])) {
      $emailText .= "$fields[$key]: $value\n";
    }
  }

  // All the neccessary headers for the email.
  $headers = array('Content-Type: text/plain; charset="UTF-8";',
  'From: ' . $from,
  'Reply-To: ' . $from,
  'Return-Path: ' . $from,
);

// Send email
mail($sendTo, $subject, $emailText, implode("\n", $headers));

$responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
  $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  $encoded = json_encode($responseArray);

  header('Content-Type: application/json');

  echo $encoded;
}
// else just display the message
else {
  echo $responseArray['message'];
}
?>

<meta http-equiv="refresh" content="5; url=http://indianafathersrights.org/">
