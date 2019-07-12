<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contact@laxyo.com";
    
    $email_subject = "Our Contact";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['address']) ||
 
        !isset($_POST['city']) ||
 
        !isset($_POST['pin'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $address = $_POST['address']; // required
 
    $email_from = $_POST['email']; // required
 
    $city = $_POST['city']; // not required
 
    $pin = $_POST['pin']; // required

    $state =$_POST['state']; 

    $country =$_POST['country'];

    $contact=$_POST['contact'];

    $mobile = $_POST['mobile'];

    $message= $_POST['message'];
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($name) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Our Contact Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Contact: ".clean_string($contact)."\n";
 
    $email_message .= "Comment: ".clean_string($message)."\n";

    $email_message .= "Address: ".clean_string($address)."\n";

    $email_message .= "Mobile Number: ".clean_string($mobile)."\n";

    $email_message .= "City: ".clean_string($city)."\n";

    $email_message .= "State: ".clean_string($state)."\n";

    $email_message .= "Country: ".clean_string($country)."\n";

    $email_message .= "Pin-code: ".clean_string($pin)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 


<?php
$yourURL="http://solutionsofts.com/graphics/laxyo-new/contact.php";
echo ("<script>location.href='$yourURL'</script>");
?>
 
<?php
 
}
 
?>