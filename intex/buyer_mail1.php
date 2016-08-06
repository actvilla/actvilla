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
		//echo var_dump($_POST);
        if ($_POST)
        {
            $title = $_POST['title'];
            $fname = $_POST['fname'];
            
			$organisation = $_POST['organisation'];
			$yob=$_POST['yob'];
            $address=$_POST['address'];
			$city=$_POST['city'];
            $state = $_POST['state'];
            $country_code = $_POST['country_code'];            
            $country = $_POST['country'];            
            $pincode = $_POST['pincode'];
            $telephone = $_POST['telephone'];
			$fax =$_POST['fax'];
            $mobile =$_POST['mobile'];
			$email =$_POST['email'];
			$website =$_POST['website'];
			$others_intrested =$_POST['others_intrested'];
            
			/*designation*/
			$designation = $_POST['designation'];
			if($designation=="others"){
				$designation = $_POST['designation_other'];
			}

			/**/
			
			/*department*/
			$department = $_POST['department'];
			if($department=="others"){
				$department = $_POST['department_other'];
			}
			/**/
			
            if ($_POST['business_type'] <> null ) 
				foreach($_POST['business_type'] as $value)
	                { 
                            $b_type .= "$value".", "; 
					}
				$b_type = trim($b_type,", ");
           
			if ($_POST['garment_ind'] <> null ){				
					$i = 1;
							foreach($_POST['garment_ind'] as $value)
							{ 
							$garment_ind .= $i.". $value"."<br/> "; 
							$garment_ind_trim .= "- "."$value"."<br/>"; 
							$i++;
							}  
				$garment_ind = trim($garment_ind,", ");
				$garment_ind_trim = trim($garment_ind_trim,", ");
			}
			
			   
			   
			   /*-----------------------------*/
			   if ($_POST['intrested_textile_yarn'] <> null ) {
				$i=1;   
				foreach($_POST['intrested_textile_yarn'] as $value)
					{ 
					$intrested_textile_yarn .= $i.". $value"."<br/> ";
					$intrested_textile_yarn_trim .= "$value".", ";
					$i++;
				}           
			   $intrested_textile_yarn = trim($intrested_textile_yarn,", ");
			   $intrested_textile_yarn_trim = trim($intrested_textile_yarn_trim,", ");
			   }
			   
			   if ($_POST['intrested_textile_febric'] <> null ){
				$i=1;
				foreach($_POST['intrested_textile_febric'] as $value)
					{ 
					$intrested_textile_febric .= $i.". $value"."<br/> ";
					$intrested_textile_febric_trim .= "$value".", ";
					$i++;
				}           
			   $intrested_textile_febric = trim($intrested_textile_febric,", ");
			   $intrested_textile_febric_trim = trim($intrested_textile_febric_trim,", ");
			   }
			   
			   if ($_POST['intrested_denim'] <> null ){
				$i=1;
				foreach($_POST['intrested_denim'] as $value)
					{ 
					$intrested_denim .= $i.". $value"."<br/> ";
					$intrested_denim_trim .= "$value".", ";
					$i++;
				}           
			   $intrested_denim_trim = trim($intrested_denim_trim,", ");
			   }
			   
			   if ($_POST['intrested_cloting_acc'] <> null ){
				   $i=1;
				foreach($_POST['intrested_cloting_acc'] as $value)
							{ 
					$intrested_cloting_acc .= $i.". $value"."<br/> ";
					$intrested_cloting_acc_trim .= "$value".", ";
					$i++;
				}           
			   $intrested_cloting_acc = trim($intrested_cloting_acc,", ");
			   $intrested_cloting_acc_trim = trim($intrested_cloting_acc_trim,", ");
			   }
			   
			   
			   
			   
  
	    /*$message="Name   : $fname\nDesignation   : $designation\nOrganisation   : $organisation\nYear of Establishment   : $yob\nAddress   :$address\nCity   : $city\nState   : $state\nCountry : $country\nPincode : $pincode\nTelephone : $telephone\nFax :$fax\nMobile: $mobile\nE-Mail: $email\nWebsite: $website\nBusiness Type : $b_type\n\nIndustry Sector:\nGarment Industry: $garment_ind\nTextile Industry(Yarns): $textile_yarn\nTextile Industry(Fabric): $textile_febric\nClothing Accessories: $cloting_acc\nOthers:$others_ind\n\nProducts You Are Interested To Source:\n(Yarns):$intrested_textile_yarn\n(Fabric):$intrested_textile_febric\n(Accessories):$intrested_cloting_acc\n(Others):$others_intrested";*/
		$message="Name   : $title $fname<br/>Designation   : $designation<br/>
		Department : $department<br/>
		Organisation   : $organisation<br/>
		Year of Establishment   : $yob<br/>Address   :$address<br/>City   : $city<br/>State   : $state<br/>
		Country : $country<br/>Pincode : $pincode<br/>Telephone : $telephone<br/>Fax :$fax<br/>
		Mobile: $country_code $mobile<br/>E-Mail: $email<br/>Website: $website<br/><br/>
		<strong>Nature of Business:</strong> $b_type<br/><br/>
		
		
		
		<strong>Products You Are Interested to Source:</strong><br/>
		<strong>(Yarns) :</strong> <br/>$intrested_textile_yarn<br/>
		<strong>(Apparel Fabric) :</strong> <br/>$intrested_textile_febric<br/>
		<strong>(Denim) :</strong><br/>$intrested_denim<br/>
		<strong>(Clothing Accessories) :</strong> <br/>$intrested_cloting_acc<br/>
		<strong>(Others) :</strong> $others_intrested<br/><br/>
		
		<strong>Which industry category are you sourcing for?:</strong><br/> $garment_ind<br/>";
            // Send message to
$subject="Buyer Registration for Intex South Asia Company Details";		
	

$headersnew = "MIME-Version: 1.0" . "\r\n";
$headersnew .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headersnew .= 'From: <'.$email.'>' . "\r\n";
$headersnew .= 'Cc: intexfair1@worldexindia.com' . "\r\n";
$headersnew .= 'Bcc: intexfair@worldexindia.com' . "\r\n";

/*$headersnew = "MIME-Version: 1.0" . "\r\n";
$headersnew .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headersnew .= 'From: <'.$email.'>' . "\r\n";*/


/*
$headersnew .= 'From: <'.$email.'>' . "\r\n";
$headersnew .= 'Cc: sanjaymewada04@gmail.com' . "\r\n";
$headersnew .= 'Bcc: neetubv93@worldexindia.com' . "\r\n";*/

				//if(mail("intexfair1@worldexindia.com", $subject, $message,"From: <$email>"))
			   if(mail("registrations@worldexindia.com", $subject, $message,$headersnew))
			   //if(mail("web@finesse.co.in", $subject, $message,$headersnew))
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
				<tr style='padding:5px 20px;width:100%;'>
				    <td style="width:50%; padding:5px 20px; ">
				        <p style='margin:0 0 5px 15px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Name</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$title $fname</span>
				    </td>
  				   <td style="width:50%;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Designation</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$designation</span>
				    </td>
				</tr>				
				<tr style='padding:5px 20px;width:100%;'>
				    <td style="width:50%; padding:5px 20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Organisation</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$organisation</span>
				    </td>
 				   <td>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Mobile</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$mobile</span>
				    </td>
				</tr>
				
				<tr style='padding:5px 20px;width:100%;'>
				    <td style="width:50%; padding:5px 20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">City</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$city</span>
				    </td>
 				   <td>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">State</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$state</span>
				    </td>
				</tr>
				<tr style='padding:5px 20px;width:100%;'>
				    <td style="width:50%; padding:5px 20px;">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Country</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$country</span>
				    </td>
 				   <td>
				         <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Website</span></p>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$website</span>
				    </td>
				</tr>
				<tr style='padding:5px 20px;width:100%;'>
				    
			 	   <td colspan="2" style="padding:5px 20px;">
				       <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Nature of Business :</span>
				        <span style='color:#000;font-size:12px;margin-left:30px;'>$b_type</span></p>
				    </td>
					 
				</tr>
				<tr style='padding:5px 20px;width:100%;'>
				    
			 	   <td style="width:50%; padding:5px 20px;" valign="top">
				       <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Products You Are Interested to Source</span></p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'><strong>Yarns -</strong> $intrested_textile_yarn_trim<br/>
						<strong>Apparel Fabric -</strong> $intrested_textile_febric_trim<br/>
						<strong>Denim -</strong> $intrested_denim_trim<br/>
						<strong>Clothing Accessories -</strong> $intrested_cloting_acc_trim<br/>
						<strong>Others -</strong> $others_intrested</p>
				    </td>
					
						 	   
					<td style="width:50%; padding:5px 0px;" valign="top">
				        <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="border:1px solid #000; padding:0 5px;">Which industry category are you sourcing for?</span></p>
				        <p style='color:#000;font-size:12px;margin-left:30px;'>$garment_ind_trim</p>
				    </td>
				</tr>
		
		<tr style='padding:5px 20px;width:100%;'>
				    
			 	   <td colspan="2" style="width:50%; padding:5px 20px;" valign="top">
				       <p style='margin:0 0 5px;font-size:12px;margin-left:30px;'><span style="font-weight:bold;"><u>Important Notes</u></span></p>
				        <p>
						<ul style="font-size:10px;">
<li>This e-invitation is non-transferable</li>
<li>This e-invitation is valid only for the individual registered buyer. </li>
<li>Accompanied guests will not permitted to visit the fair even from the same company. They need to register individually at the fair.</li>
<li>If you wish to visit the fair on both the days, kindly come to the pre-registered counter at the show and collect your badge from there without any hassle. </li>
<li>Entry Strictly for Trade Buyers on Production of Valid Business Card.</li>
<li>Buyers Below 18 Years will not be Permitted.</li>
<li>No Registration Fees, No Retail Sales.</li>
<li>Right to Admission Reserved.</li>
</ul>
</p>
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


$message2= <<< EOT
<table align="center" width="602" border="0" cellspacing="0" cellpadding="0">
    <tbody>
   
    <tr>
      <td valign="top" bgcolor="#24A59A" style="border-left:1px solid #cccccc;border-right:1px solid #cccccc"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%!important">
          <tbody>
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%!important">
                <tbody><tr>
                  <td width="1%" valign="top"></td>
                  <td width="94%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%!important">
                      <tbody>
                      
                      <tr>
                        <td height="7"></td>
                      </tr>
                      <tr>
                        <td style="font-family:Arial;color:#FFFFFF;font-size:14px;">
						
						<div style="font-family:verdana; font-size:14px; background-color: rgb(185, 230, 226); color:#000; padding:10px;">
<p>Dear $title $fname,</p>
<p>Thank you for registering to visit Intex South Asia 2016 in Colombo, Sri Lanka. </p>
<p>Your company profile would be reviewed by the organising team and upon successfully verification you would receive your e-invitation on the registered <br/>e-mail address provided in the form. Kindly carry the same along with your business card for express entry to the fair.</p>

<p>For pre-registered buyers at Intex South Asia, we are pleased to offer the following benefits -</p>
<p><strong>(1) Special Discounted Package by SriLankan Airlines</strong></p>
<p>20% discount to Colombo from any SriLankan Airlines destination!</p>
<p>Enjoy world class comfort and traditional SriLankan hospitality onboard while you take advantage of this wonderful opportunity. </p>
<p>Travel Dates - 10 November - 25 November, 2016</p>
<p>Book between - 1st August - 30th September 2016</p>
<p>How to claim this offer :</p>
<p>Please register <a href="http://intexfair.com/srilankan-airlines.html">www.intexfair.com/srilankan-airlines.html</a> to obtain your promo code.</p>
<p>Enter the promo code in the booking widget on the link that would be sent along with the promo code and claim your offer!<br/>&nbsp;</p>

<p><strong>(2) Special Discounted Package for Hotels in Colombo</strong></p>
<p>Colombo City Hotel (3-star)</p>
<p>Galadari Hotel	(4-star)</p>
<p>Hilton Colombo Hotel (5-star)</p>
<p>To book your room: <a href="http://intexfair.com/hotel.html">Click Here</a></p>
<p><strong>Thanks & Regards,</strong><br/>&nbsp;<br/>Intex South Asia Team
</p>
</div>		
						</td>
                      </tr>
                    
                      <tr>
                        <td style="background-color:#FFFFFF;">
						
<table width="600px" style="width:600px;">
<tr>
	<td>
	<div style="font-family: verdana !important; font-size:16px; width:600px !important; ">
<table style="width:100%" width="100%">
<tr>

	<td style="text-align:left;"><a target="_blank" href="https://www.intexfair.com/"><img src="http://intexfair.com/images/signature/signature.gif" width="350" height="92" style="width:350px; height:92px;"/></a></td>
	<td style="text-align:right; line-height:22px; "><font face="verdana" size="2">Follow us on : </font><br/>
		<a target="_blank" href="https://www.facebook.com/Intexfair"><img src="http://intexfair.com/images/signature/FB.png" style="height:22px;"></a>
		<a target="_blank" href="https://twitter.com/intexfair"><img src="http://intexfair.com/images/signature/ty.png" style="height:22px;"></a>
		<a target="_blank" href="https://in.linkedin.com/in/intexsouthasia"><img src="http://intexfair.com/images/signature/in.png" style="height:22px;"></a>
		<br/><font face="verdana" size="2">Download the Intex South Asia App</font><br/><a target="_blank" href="https://play.google.com/store/apps/details?id=com.phonegap.intexfair"><img src="http://intexfair.com/images/playstore.png"  width="64" height="22" style="width:64px; height:22px;"></a>
		<a target="_blank" href="https://itunes.apple.com/in/app/intex-south-asia/id1093035406?mt=8"><img src="http://intexfair.com/images/ios.png" style="width:64px; height:22px;" width="64" height="22"></a>
		
		</td>
</tr>

</table>
</div></td>
	
</tr>
</table>



<div><img src="http://intexfair.com/images/signature/Line.png" style="width:600px;" width="600px"/></div>
<table width="600px" style="width:600px;">
<tr>
	<td>
<div style="font-family: verdana !important; font-size:16px; width:600px !important;">
<table style="width:100%" width="100%">
<tr>

	<td style="text-align:left; font-weight:bold; border-right:1px solid #000; width:140px;"><a target="_blank" href="https://www.worldexindia.com/"><img src="http://intexfair.com/images/signature/worldex-logo.png" height="50" style=""/></a></td>
	<td valign="top" style="text-align:left; font-size:9px; padding-left:10px !important;"><span style="color:#0060aa;"><strong>Worldex India Exhibition & Promotion Pvt. Ltd.</strong></span><br/>
	309, Parvati Premises, Sun Mill Complex, <br/>
	Lower Parel (W), Mumbai, Maharashtra 400013, India.<br/>
	E-mail : <a href="mailto:intexfair@worldexindia.com">intexfair@worldexindia.com</a><br/>
	Tel : +(91)-(22) 40370700 <br/>
	Fax : +(91)-(22) 24962297</td>
	<td valign="top" style="text-align:right;"><font face="verdana"  size="2">Follow us on :</font><br/>
		<a target="_blank" href="https://www.facebook.com/people/Worldex-India/100012064452880"><img src="http://intexfair.com/images/signature/FB.png" style="height:22px; width:22px;" height="22" width="22"></a>
		<a target="_blank" href="https://www.linkedin.com/company/worldex-india-exhibition-&-promotions-pvt-ltd"><img src="http://intexfair.com/images/signature/in.png" style="height:22px;"></a>
		<a target="_blank" href="https://www.youtube.com/channel/UCzcRjjOK-QTu8sMkgnd_feA"><img src="http://intexfair.com/images/signature/yt.png" style="height:22px;"></a>
		<br/>
		<a href="http://www.worldexindia.com/" style="text-decoration:none;"><font color="#000000" size="2" face="verdana">www.worldexindia.com</font></a>
		</td>
</tr>

</table>
</div>
</td>
</tr>
</table>



						</td>
                      </tr>
                   
                    </tbody></table></td>
                  <td width="1%" valign="top"></td>
                </tr>
				
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    
     </tbody></table></td>
 </tr>
    
  </tbody></table>
EOT;
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $headers .= 'From:Intex South Asia  <intexfair1@worldexindia.com>' . "\r\n";
      //$headers .= 'Cc:Intex South Asia  <intexfair1@worldexindia.com>' . "\r\n";
	//$headers .= 'Bcc:intexfair@worldexindia.com' . "\r\n";
	
	$headers2 = "MIME-Version: 1.0\r\n";
        $headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $headers2 .= 'From:Intex South Asia  <intexfair@worldexindia.com>' . "\r\n";
	  
	  
	$subject1 = "Confirmation Email for Buyer Registeration at Intex South Asia 2016 in Colombo";
        if(mail("intexfair1@worldexindia.com", $subject1, $message1,$headers))
        //if(mail("web@finesse.co.in", $subject1, $message1,$headers))
		{
			//echo $message1;
			if(mail($email, "Exclusive Benifits for Intex South Asia Buyers'", $message2,$headers2))
			{
				//echo $message1;
			}
		}
		else
		{
			echo "Problem sending mail.";
		}	

        }
?>

<div style="margin:0 auto;width:560px;margin-top:100px;border: 2px solid #24A59A;text-align:justify;background-color: #24A59A;padding:20px;color: #FFF;">
<div style="background-color: #ffffff;margin:-20px -20px 0 -20px;height:60px;"><img src="http://intexfair.com/images/Intex_logo_2016.png" width="100px" style="float:right; margin-top:10px; margin-right:10px;">
</div>
<font face="Verdana" size="2"><p style="line-height:22px;">Dear <?php echo $_POST['title']." ". $_POST['fname']; ?>,</p>
<p>Thank you for pre-registering as a Buyer to attend Intex South Asia 2016. Your company profile would be reviewed by the organising team and upon successfully verification you would receive your e-invitation on the registered <br>e-mail address provided in the form.<br>
                         Look forward to see you at Intex South Asia!<br><br>
						 Regards,<br>
						 Intex South Asia Team</p>
						  <p align="right" style="font-style:italic;">For more details visit: <a href="http://intexfair.com/">www.intexfair.com</a></p></font>

</div>


