<?php

$fields = array("thename"=>"Name","theemail"=>"Email Address","thesubject"=>"Subject","themessage"=>"Message");
error_reporting(E_ALL & ~E_NOTICE);
try
{
  if(count($_POST == 0))
  {
    throw new \Exception('Form is empty');
  }
  elseif(isset($_POST['email']))
  {
      $email_to = "manucheremeh@1995gmail.com";
      $email_subject = "Your email subject line";
      
      foreach($_POST as $key=>$value)
      {
        if(isset($fields[$key]))
        {
          $emailText .= "$fields[$key]:$value\n";
        }
      }
      mail($email_to,$email_subject,$emailText);
  }
}
catch(\Exception $e)
{
  $responseArray = array('type'=>'danger','errorMessage'=>$errorMessage);
}

?>