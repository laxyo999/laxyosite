

<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contact@laxyo.com";
 
    $email_subject = "Our Vendor Registration Detail";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    
 
     
 
    $company_name = $_POST['cname']; // required
 
    $company_website = $_POST['cweb']; // required

    $contact_personname =$_POST['cpname'];

    $designation = $_POST['designation'];
 
    $email_from = $_POST['email']; // required
 
    $postal_address = $_POST['paddress'];

    $telepgone_no = $_POST['telephone'];

    $mobile_no = $_POST['mobile'];

    $fax = $_POST['fax'];

    $nature_of_bussiness = $_POST['Nature_Of_Business'];

    $product = $_POST['Products'];

    $Existing_Customers=$_POST['Existing-Customers'];

    $pan = $_POST['pan'];

    $tan = $_POST['tan'];

    $tin = $_POST['tin'];

    $ssi_registration = $_POST['ssi'];
 
    $excise = $_POST['excise'];

    $service_tax = $_POST['stax'];
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$company_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$company_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($company_name) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Vendor Registration details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Company Name: ".clean_string($company_name)."\n";

    $email_message .= "Company Website: ".clean_string($company_website)."\n";

    $email_message .= "Company Person Name: ".clean_string($contact_personname)."\n";

    $email_message .= "Designation: ".clean_string($designation)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Postal Address: ".clean_string($postal_address)."\n";

    $email_message .= "TelePhone Number: ".clean_string($telepgone_no)."\n";

    $email_message .= "Mobile Number: ".clean_string($mobile_no)."\n";

    $email_message .= "Fax: ".clean_string($fax)."\n";

    $email_message .= "Nature Of Bussiness: ".clean_string($nature_of_bussiness)."\n";

    $email_message .= "Product: ".clean_string($product)."\n";

    $email_message .= "Existing Customers: ".clean_string($Existing_Customers)."\n";

    $email_message .= "Pan: ".clean_string($pan)."\n";

    $email_message .= "Tan: ".clean_string($tan)."\n";

    $email_message .= "Tin: ".clean_string($tin)."\n";

    $email_message .= "SSI Registration: ".clean_string($ssi_registration)."\n";

    $email_message .= "Excise: ".clean_string($excise)."\n";

    $email_message .= "Service Tax: ".clean_string($service_tax)."\n";





 
    
 
     
 
     
 
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