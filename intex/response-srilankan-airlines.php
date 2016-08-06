<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>SriLankan Airlines</title>
</head>
<?php
//error_reporting(E_ALL ^ E_NOTICE);
        // Handle POST method.
        if ($_POST)
        {
            $passport_number = $_POST['passport_number'];
            $place_issue = $_POST['place_issue'];
			$expiry_date = $_POST['expiry_date'];
			$country=$_POST['country'];
            $name_delegate=$_POST['name_delegate'];
			$designation=$_POST['designation'];
            $company_name = $_POST['company_name'];
            $mobile = $_POST['mobile'];            
            $email = $_POST['email'];
            $comp_registerer = $_POST['comp_registerer'];
			$booking_class =$_POST['booking_class'];
            $arrival_date =$_POST['arrival_date'];
			$departure_date =$_POST['departure_date'];
			$email1 =$_POST['email1'];
			$email2 =$_POST['email2'];
            
           
			   
  
	    $message="Valid Passport Number: $passport_number
Place of Issue   : $place_issue
Expiry Date   : $expiry_date
Country: $country
Name of Delegate   :$name_delegate
Designation   : $designation
Company Name   : $company_name
Mobile Number: $mobile
Email Address : $email
Company Registered As : $comp_registerer
Would you like to book :$booking_class
Arrival Date: $arrival_date\nDeparture Date: $departure_date
Enter e-email address on which you would like to receive the promotional code
Email 1: $email1\nEmail 2: $email2";
            // Send message to
$subject="SriLankan Airlines Booking Details";		
	


$headersnew .= 'From: <'.$email.'>' . "\r\n";
$headersnew .= 'Cc: intexfair1@worldexindia.com' . "\r\n";
$headersnew .= 'Bcc: intexfair@worldexindia.com' . "\r\n";
/*
$headersnew .= 'From: <'.$email.'>' . "\r\n";
$headersnew .= 'Cc: sanjaymewada04@gmail.com' . "\r\n";*/

				//if(mail("intexfair1@worldexindia.com", $subject, $message,"From: <$email>"))
			   if(mail("registrations@worldexindia.com", $subject, $message,$headersnew))
			   //if(mail("web@finesse.co.in", $subject, $message,$headersnew))
			   //if(mail("web@finesse.co.in", $subject, $message,$headersnew))
				//if(mail("anushree.dhumale@gmail.com", $subject, $message,"From: <$email>"))
		{
		?>
		<div style='margin:0 auto; width:560px; margin-top:100px; border: 2px solid #24A59A; text-align:justify; background-color:rgba(96, 96, 98, 0.15); padding:20px;'>
<div style="background-color:#24A59A; margin:-20px -20px 0 -20px; height:30px; color:#FFF; text-align:center;">
<font  face='Verdana' size='4'>SriLankan Airlines Offer</font>
</div>
<font  face='Verdana' size='2'><p style='line-height:22px;'>Dear <?php echo $_POST['name_delegate']; ?>,</p>
<p>Thank you! Well received your request.</p>
<p>We shall process and send you the promotional code on the e-mail address provided in the form.</p>
<p>Should you have any queries, feel free to write to us.</p>
<p>Regards<br/>Intex South Asia Team<br/>
Tel : +91 22 40370700<br/>
Fax : +91 22 24962297<br/>
Email : <a href="mailto:intexfair@worldexindia.com">intexfair@worldexindia.com</a>
</p>
						  </font>

</div>
		<?php
		}
		else
		{
                    echo "Problem sending mail.";
		}
	
                
	
        }
?>





