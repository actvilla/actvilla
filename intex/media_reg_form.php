<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Company Details</title>
</head>
<?php

        // Handle POST method.
        if ($_POST)
        {
            $fname = $_POST['fname'];
            $designation = $_POST['designation'];
			$comp_name = $_POST['comp_name'];
			$pub_name = $_POST['pub_name'];
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
			$cover_others =$_POST['cover_others'];
			$type_others =$_POST['type_others'];
            
            if ($_POST['type'] <> null ) 
				foreach($_POST['type'] as $value)
	                { 
                            $type .= "$value".", "; 
					}
				$type = trim($type,", ");
           
			if ($_POST['cover'] <> null ) 
				foreach($_POST['cover'] as $value)
							{ 
					$cover .= "$value".", "; 
				}  
				$cover = trim($cover,", ");
		
			
			   
			   
			   
			   
  
	    $message="Name   : $fname\nDesignation   : $designation\nPublication Name : $pub_name\nCompany Name:$comp_name\nYear of Establishment   : $yob\nAddress   :$address\nCity   : $city\nState   : $state\nCountry : $country\nPincode : $pincode\nTelephone : $telephone\nMobile: $mobile\nE-Mail: $email\nWebsite: $website\nType : $type\nOthers:$type_others\nIndustry publication:$cover\nOthers:$cover_others";
		$subject="Media Registration for Intex South Asia Company Details";			

		
		$headersnew .= 'From: <'.$email.'>' . "\r\n";
		$headersnew .= 'Cc: intexfair@worldexindia.com' . "\r\n";
		

		
		if(mail("intexfair1@worldexindia.com", $subject, $message, $headersnew))
		//if(mail("neetubv93@gmail.com", $subject, $message, $headersnew))
		{
		//echo $message;	
		}
		else
		{
                    echo "Problem sending mail.";
		}
	
                
	$message1= <<< EOT
            <body style='font-family:'Open Sans', sans-serif;font-size:67.5%;height:100%;'>
            <table border='0' cellspacing='0' cellpadding='0' style='background:#ececec;color:#000;margin:0 auto;padding:25px 0;width:100%;'>
	<tr>
		<td>
			<table border='0' cellspacing='0' cellpadding='0' style='background:#fff;color:#000;margin:0 auto;max-width:500px;width:90%;'>
				<tr>
					<td align='center' colspan='3'><img src='http://intexfair.com/images/E-Invitation_registered1.jpg' alt='' />
					</td>
				</tr>
			<td colspan='2'><h3 style='color:purple;font-size:15px;font-weight:bold;padding:0 20px;word-wrap:break-word;text-align:left;margin-left:30px;'>Your Details</h3></td>
				<tr style='float:left;padding:10px 20px;width:100%;'>
				    <td style='float:left;width:50%;'>
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Name</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$fname</span>
				    </td>
  				   <td style='float:left;width:50%;'>
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Designation</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$designation</span>
				    </td>
				</tr>				
				<tr style='float:left;padding:10px 20px;width:100%;'>
				    <td style='float:left;width:50%;'>
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Publication Name</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$pub_name</span>
				    </td>
 				   <td style='float:left;width:50%;'>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Mobile</p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$mobile</span>
				    </td>
				</tr>				
				<tr style='float:left;padding:10px 20px;width:100%;'>
				    <td style='float:left;width:50%;'>
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Type:</p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>$type<br/>Others: $type_others</p>
				    </td>
			 	    <td style='float:left;width:50%;'>
				       <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Industry Publication:</p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>$cover<br/>Others:$cover_others</p>
				    </td>
				</tr>
				
				<tr style='float:left;padding:10px 20px;width:100%;'>
				    <td style='float:left;width:50%;'>
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>Country:</p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>$country</p>
				    </td>
			 	    <td style='float:left;width:50%;'>
				       <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'>&nbsp;</p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>&nbsp;</p>
				    </td>
				</tr>
		
				<tr>
					<td align='center' colspan='3'><img src='http://intexfair.com/images/E-Invitation_footer1.jpg' alt=''/></td>
				</tr>

			</table>
		</td>
	</tr>
</table>
</body>
EOT;

$bcclist = array("intexfair@worldexindia.com", "intexfair1@worldexindia.com");

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= 'From:Intex South Asia  <intexfair1@worldexindia.com>' . "\r\n";
		$headers .= 'Bcc:' . implode(",", $bcclist) . "\r\n";
		
		$subject1 = "Confirmation Email for Media Registration at Intex South Asia 2016";
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
<div style='margin:0 auto; width:560px; margin-top:100px; border: 2px solid #000000; background-color:#FFEBA0; padding:20px;'>
<div style="background-color:#092139; margin:-20px -20px 0 -20px; height:60px;"><img src="http://intexfair.com/images/Logo_120px_27.png" width="60px" style='float:right; margin-top:10px; margin-right:10px;'/>
</div>
<font  face='Verdana' size='2'><p style='line-height:22px;'>Dear <?php echo $_POST['fname']; ?>,</p>
<p>Thank you for your registration to visit and cover Intex South Asia 2016. You shall receive your e-invitation on the e-mail address provided in the form. Kindly contact our PR/Media representative at the media booth with this e-invitation. 
                         <br/>Look forward to see you at Intex South Asia!<br/><br/>
						 Regards, <br/>
						 Intex South Asia Team</p>
						  <p align="right" style="font-style:italic;">For more details visit: <a href="http://intexfair.com/">www.intexfair.com</a></p></font>

</div>
