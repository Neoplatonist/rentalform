<?php
/*
Template Name: Mailer
*/
?>

<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}


if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'admin@groundworksjackson.com';//<== update the email address
$email_subject = "New Rental Application";
$email_applicant = $_POST['email'];


// validation expected data exists 
if(!isset($_POST['firstname']) ||
  !isset($_POST['middlename']) ||
  !isset($_POST['lastname']) ||
  !isset($_POST['birthday']) ||
  !isset($_POST['driverlicense']) ||
  !isset($_POST['licensestate']) ||
  !isset($_POST['phone']) ||
  !isset($_POST['email'])) {
    die('We are sorry, but there appears to be a problem with the form you submitted.');       
  }

$email_message .= "\n\n\n-----------------------Name----------------------\n";
$email_message .= "First Name: ".$_POST['firstname']."\n";
$email_message .= "Middle Name: ".$_POST['middlename']."\n";
$email_message .= "Last Name: ".$_POST['lastname']."\n";
$email_message .= "Birthday: ".$_POST['birthday']."\n";
$email_message .= "Driver's License: ".$_POST['driverlicense']."\n";
$email_message .= "licensestate: ".$_POST['licensestate']."\n";
$email_message .= "Phone: ".$_POST['phone']."\n";
$email_message .= "Email: ".$_POST['email']."\n\n";

$email_message .= "-----------------Current Address-----------------\n";
$email_message .= "Street Address 1: ".$_POST['s1address1']."\n";
$email_message .= "Street Address 2: ".$_POST['s1address2']."\n";
$email_message .= "City: ".$_POST['s1city']."\n";
$email_message .= "State: ".$_POST['s1state']."\n";
$email_message .= "Zip Code: ".$_POST['s1zipcode']."\n";
$email_message .= "Country: ".$_POST['s1country']."\n\n";

$email_message .= "------------------Prior Address------------------\n";
$email_message .= "Street Address 1: ".$_POST['s2address1']."\n";
$email_message .= "Street Address 2: ".$_POST['s2address2']."\n";
$email_message .= "City: ".$_POST['s2city']."\n";
$email_message .= "State: ".$_POST['s2state']."\n";
$email_message .= "Zip Code: ".$_POST['s2zipcode']."\n";
$email_message .= "Country: ".$_POST['s2country']."\n";
$email_message .= "How many months: ".$_POST['s2length']."\n";
$email_message .= "Reason Left: ".$_POST['s2reason']."\n\n";

$email_message .= "----------------Significant Other----------------\n";
$email_message .= "First Name: ".$_POST['2firstname']."\n";
$email_message .= "Middle Name: ".$_POST['2middlename']."\n";
$email_message .= "Last Name: ".$_POST['2lastname']."\n";
$email_message .= "Birthday: ".$_POST['2birthday']."\n";
$email_message .= "Driver's License: ".$_POST['2drvierlicense']."\n";
$email_message .= "licensestate: ".$_POST['2licensestate']."\n";
$email_message .= "Phone: ".$_POST['2phone']."\n\n";

$email_message .= "--------------------Occupants--------------------\n";
$email_message .= "Number of Adults: ".$_POST['adults']."\n";
$email_message .= "Number of Kids: ".$_POST['kids']."\n\n";

$email_message .= "--------------------Employment------------------\n";
$email_message .= "Present Occupation: ".$_POST['1presoccupation']."\n";
$email_message .= "Present Employer: ".$_POST['1presemployer']."\n";
$email_message .= "Present Manager: ".$_POST['1presmanager']."\n";
$email_message .= "Present Employer's Phone: ".$_POST['1presphone']."\n";
$email_message .= "Present Employer's Address: ".$_POST['1presaddress']."\n";
$email_message .= "Length of time worked there: ".$_POST['1prestime']."\n\n";

$email_message .= "----------------Spouse Employment--------------\n";
$email_message .= "Present Occupation: ".$_POST['2presoccupation']."\n";
$email_message .= "Present Employer: ".$_POST['2presemployer']."\n";
$email_message .= "Present Manager: ".$_POST['2presmanager']."\n";
$email_message .= "Present Employer's Phone: ".$_POST['2presphone']."\n";
$email_message .= "Present Employer's Address: ".$_POST['2presaddress']."\n";
$email_message .= "Length of time worked there: ".$_POST['2prestime']."\n\n";

$email_message .= "---------------------Finances--------------------\n";
$email_message .= "Current Gross Income Per Month: ".$_POST['income']."\n";
$email_message .= "Name of Bank: ".$_POST['bank']."\n";
$email_message .= "Bank's Address: ".$_POST['bankaddress']."\n";
$email_message .= "Bank's Phone: ".$_POST['bankphone']."\n";
$email_message .= "Ever Declared Bankruptcy: ".$_POST['bankrupt']."\n";
$email_message .= "Bankruptcy Reason: ".$_POST['bankruptreason']."\n";
$email_message .= "Bankruptcy Date: ".$_POST['bankruptdate']."\n\n";

$email_message .= "----------------------Credit---------------------\n";
$email_message .= "Credit Grantor: ".$_POST['creditgrantor']."\n";
$email_message .= "Credit Grantor's Address: ".$_POST['creditaddress']."\n";
$email_message .= "Credit Grantor's Phone: ".$_POST['creditphone']."\n\n";

$email_message .= "--------------------Reference--------------------\n";
$email_message .= "Reference Name: ".$_POST['1refname']."\n";
$email_message .= "Relationship: ".$_POST['1refrelationship']."\n";
$email_message .= "Reference's Phone: ".$_POST['1refphone']."\n\n";

$email_message .= "--------------------Reference 2------------------\n";
$email_message .= "Reference Name: ".$_POST['2refname']."\n";
$email_message .= "Relationship: ".$_POST['2refrelationship']."\n";
$email_message .= "Reference's Phone: ".$_POST['2refphone']."\n\n";

$email_message .= "----------------------Vehicle--------------------\n";
$email_message .= "Vehicle Count: ".$_POST['vehiclecount']."\n";
$email_message .= "Make/Model: ".$_POST['1makemodel']."\n";
$email_message .= "Year: ".$_POST['1year']."\n";
$email_message .= "License Plate: ".$_POST['1licenseplate']."\n";
$email_message .= "State Registered: ".$_POST['1licenseplatestate']."\n";
$email_message .= "Vehicle Color: ".$_POST['1color']."\n\n";

$email_message .= "---------------------Vehicle 2-------------------\n";
$email_message .= "Make/Model: ".$_POST['2makemodel']."\n";
$email_message .= "Year: ".$_POST['2year']."\n";
$email_message .= "License Plate: ".$_POST['2licenseplate']."\n";
$email_message .= "State Registered: ".$_POST['2licenseplatestate']."\n";
$email_message .= "Vehicle Color: ".$_POST['2color']."\n\n";

$email_message .= "---------------------Vehicle 3-------------------\n";
$email_message .= "Make/Model: ".$_POST['3makemodel']."\n";
$email_message .= "Year: ".$_POST['3year']."\n";
$email_message .= "License Plate: ".$_POST['3licenseplate']."\n";
$email_message .= "State Registered: ".$_POST['3licenseplatestate']."\n";
$email_message .= "Vehicle Color: ".$_POST['3color']."\n\n";



$to = "zogoto3000@yahoo.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_applicant \r\n";

//Send the email!
mail("$to","$email_subject","$email_message","$headers");
echo "mail sent";
//done. redirect to thank-you page.
// header('Location: groundworksjackson.com/thanks');
$url='http://www.groundworksjackson.com/thanks';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
exit;


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
