<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Company Details</title>
</head>
<?php
//error_reporting(E_ALL ^ E_NOTICE);
        // Handle POST method.
        if ($_POST)
        {
            $fname = $_POST['fname'];
            $designation = $_POST['designation'];
			$organisation = $_POST['organisation'];
			$yob=$_POST['yob'];
            $address=$_POST['address'];
			$city=$_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];            
            $pincode = $_POST['pincode'];
            $telephone = $_POST['telephone'];
			$fax =$_POST['fax'];
            $mobile =$_POST['mobile'];
			$email =$_POST['email'];
			$website =$_POST['website'];
			$others_intrested =$_POST['others_intrested'];
            
            if ($_POST['business_type'] <> null ) 
				foreach($_POST['business_type'] as $value)
	                { 
                            $b_type .= "$value".", "; 
					}
				$b_type = trim($b_type,", ");
           
			if ($_POST['garment_ind'] <> null ) 
				foreach($_POST['garment_ind'] as $value)
							{ 
					$garment_ind .= "$value".", "; 
				}  
				$garment_ind = trim($garment_ind,", ");
		
			if ($_POST['textile_yarn'] <> null ) 
				foreach($_POST['textile_yarn'] as $value)
							{ 
					$textile_yarn .= "$value".", "; 
				}           
			   $textile_yarn = trim($textile_yarn,", ");
			   
			   
			   if ($_POST['textile_febric'] <> null ) 
				foreach($_POST['textile_febric'] as $value)
							{ 
					$textile_febric .= "$value".", "; 
				}           
			   $textile_febric = trim($textile_febric,", ");
			   
			   if ($_POST['cloting_acc'] <> null ) 
				foreach($_POST['cloting_acc'] as $value)
							{ 
					$cloting_acc .= "$value".", "; 
				}           
			   $cloting_acc = trim($cloting_acc,", ");
			   
			    if ($_POST['others_ind'] <> null ) 
				foreach($_POST['others_ind'] as $value)
							{ 
					$others_ind .= "$value".", "; 
				}           
			   $others_ind = trim($others_ind,", ");
			   
			   
			   /*-----------------------------*/
			   if ($_POST['intrested_textile_yarn'] <> null ) 
				foreach($_POST['intrested_textile_yarn'] as $value)
							{ 
					$intrested_textile_yarn .= "$value".", "; 
				}           
			   $intrested_textile_yarn = trim($intrested_textile_yarn,", ");
			   
			   if ($_POST['intrested_textile_febric'] <> null ) 
				foreach($_POST['intrested_textile_febric'] as $value)
							{ 
					$intrested_textile_febric .= "$value".", "; 
				}           
			   $intrested_textile_febric = trim($intrested_textile_febric,", ");
			   
			   if ($_POST['intrested_cloting_acc'] <> null ) 
				foreach($_POST['intrested_cloting_acc'] as $value)
							{ 
					$intrested_cloting_acc .= "$value".", "; 
				}           
			   $intrested_cloting_acc = trim($intrested_cloting_acc,", ");
			   
			   
			   
			   
  
	    $message="Name   : $fname\nDesignation   : $designation\nOrganisation   : $organisation\nYear of Establishment   : $yob\nAddress   :$address\nCity   : $city\nState   : $state\nCountry : $country\nPincode : $pincode\nTelephone : $telephone\nFax :$fax\nMobile: $mobile\nE-Mail: $email\nWebsite: $website\nBusiness Type : $b_type\n\nIndustry Sector:\nGarment Industry: $garment_ind\nTextile Industry(Yarns): $textile_yarn\nTextile Industry(Fabric): $textile_febric\nClothing Accessories: $cloting_acc\nOthers:$others_ind\n\nProducts You Are Interested To Source:\n(Yarns):$intrested_textile_yarn\n(Fabric):$intrested_textile_febric\n(Accessories):$intrested_cloting_acc\n(Others):$others_intrested";
            // Send message to
$subject="Buyer Registration for Intex South Asia Company Details";		
	

/*
$headersnew .= 'From: <'.$email.'>' . "\r\n";
$headersnew .= 'Cc: intexfair1@worldexindia.com' . "\r\n";
$headersnew .= 'Bcc: intexfair@worldexindia.com' . "\r\n";
*/
$headersnew .= 'From: <'.$email.'>' . "\r\n";
$headersnew .= 'Cc: sanjaymewada04@gmail.com' . "\r\n";
$headersnew .= 'Bcc: neetubv93@gmail.com' . "\r\n";

				//if(mail("intexfair1@worldexindia.com", $subject, $message,"From: <$email>"))
			   //if(mail("registrations@worldexindia.com", $subject, $message,$headersnew))
			   if(mail("web@finesse.co.in", $subject, $message,$headersnew))
				//if(mail("anushree.dhumale@gmail.com", $subject, $message,"From: <$email>"))
		{
		//echo $message;	
		}
		else
		{
                    echo "Problem sending mail.";
		}
	
                
	$message1= <<< EOT
            <body>
            <table border='0' cellspacing='0' cellpadding='0' style='background:#ececec;color:#000; padding:25px 0;width:100%;'>
	<tr>
		<td>
			<table border='0' cellspacing='0' cellpadding='0' style='background:#fff;color:#000;margin:0 auto; width:500px;'>
				<tr>
					<td align='center' colspan='2'><img src='http://intexfair.com/images/E-Invitation_header1.jpg'/>
					</td>
				</tr>
			<tr>
			<td colspan='2'><h3 style='color:purple;font-size:15px;font-weight:bold;padding:0 20px;word-wrap:break-word;text-align:left;margin-left:30px;'>Your Details</h3></td>
			</tr>
				<tr style='padding:10px 20px;width:100%;'>
				    <td style="width:50%; padding:10px 20px; ">
				        <p style='margin:0 0 5px 15px;font-size:12px;margin-left:30px;'>Name</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$fname</span>
				    </td>
  				   <td style="width:50%;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Designation</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$designation</span>
				    </td>
				</tr>				
				<tr style='padding:10px 20px;width:100%;'>
				    <td style="width:50%; padding:10px 20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Organisation</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$organisation</span>
				    </td>
 				   <td>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Mobile</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$mobile</span>
				    </td>
				</tr>
				
				<tr style='padding:10px 20px;width:100%;'>
				    <td style="width:50%; padding:10px 20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>City</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$city</span>
				    </td>
 				   <td>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>State</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$state</span>
				    </td>
				</tr>
				<tr style='padding:10px 20px;width:100%;'>
				    <td style="width:50%; padding:10px 20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Country</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$country</span>
				    </td>
 				   <td>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Business Type</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$b_type</span>
				    </td>
				</tr>
				
				<tr style='padding:10px 20px;width:100%;'>
				    <td style="width:50%; padding-left:20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Industry Sector:</p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>Garment Industry: $garment_ind<br/>Textile Industry(Yarns): $textile_yarn<br/>Textile Industry(Fabric): $textile_febric<br/>Clothing Accessories: $cloting_acc<br/>Others:$others_ind</p>
				    </td>
			 	    <td>
				       <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Products You Are Interested To Source:</p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>(Yarns):$intrested_textile_yarn<br/>(Fabric):$intrested_textile_febric<br/>(Accessories):$intrested_cloting_acc<br/>(Others):$others_intrested</p>
				    </td>
				</tr>
		
				<tr>
					<td align='center' colspan='2'><img src='http://intexfair.com/images/E-Invitation_footer1.jpg' alt=''/></td>
				</tr>

			</table>
		</td>
	</tr>
</table>
</body>
EOT;
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $headers .= 'From:Intex South Asia  <intexfair1@worldexindia.com>' . "\r\n";
      $headers .= 'Cc:Intex South Asia  <sanjaymewada04@gmail.com>' . "\r\n";
	$headers .= 'Bcc:neetubv93@gmail.com' . "\r\n";
	$subject1 = "Confirmation Email for Buyer Registeration at Intex South Asia 2016 in Colombo";
        if(mail($email, $subject1, $message1,$headers))
		{
			//echo $message1;
		}
		else
		{
			echo "Problem sending mail.";
		}	

        }
?>
<div style='margin:0 auto; width:560px; margin-top:100px; border: 2px solid #24A59A; text-align:justify; background-color:rgba(96, 96, 98, 0.15); padding:20px;'>
<div style="background-color:#24A59A; margin:-20px -20px 0 -20px; height:60px;"><img src="http://intexfair.com/images/Logo_120px_27.png" width="60px" style='float:right; margin-top:10px; margin-right:10px;'/>
</div>
<font  face='Verdana' size='2'><p style='line-height:22px;'>Dear <?php echo $_POST['fname']; ?>,</p>
<p>Thank you for pre-registering as a Buyer to visit Intex South Asia 2016. You 
                         shall receive your e-invitation on the e-mail address provided in the form.<br/>
                         Look forward to see you at Intex South Asia!<br/><br/>
						 Regards,<br/>
						 Intex South Asia Team</p>
						  <p align="right" style="font-style:italic;">For more details visit: <a href="http://intexfair.com/">www.intexfair.com</a></p></font>

</div>




