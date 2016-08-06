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
	    $organisation = $_POST['organisation'];
	    //$yob=$_POST['yob'];
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
            
            if ( $_POST['business_type'] <> null ) 
	                 foreach($_POST['business_type'] as $value)
	                { 
	    				$b_type .= "$value".", "; 
	    			}
		$b_type = trim($b_type,", ");
            if ( $_POST['prod_cate_fab'] <> null ) 
	                 foreach($_POST['prod_cate_fab'] as $value)
	                { 
	    				$prod_cate_fab .= "$value".", "; 
	    			}
		$prod_cate_fab = trim($prod_cate_fab,", ");
	    if ( $_POST['prod_cate_acc'] <> null ) 
            foreach($_POST['prod_cate_acc'] as $value)
                        { 
				$prod_cate_acc .= "$value".", "; 
			}  
			$prod_cate_acc = trim($prod_cate_acc,", ");
			
			  if ( $_POST['app_ser'] <> null ) 
            foreach($_POST['app_ser'] as $value)
                        { 
				$app_ser .= "$value".", "; 
			}  
			$app_ser = trim($app_ser,", ");
			
			 if ( $_POST['ser'] <> null ) 
            foreach($_POST['ser'] as $value)
                        { 
				$ser .= "$value".", "; 
			}  
			$ser = trim($ser,", ");
		
            $message="Name   : $fname\nDesignation   : $designation\nOrganisation   : $organisation\nAddress   :$address\nCity   : $city\nState   : $state\nCountry : $country\nPincode : $pincode\nTelephone : $telephone\nFax :$fax\nMobile: $mobile\nE-Mail: $email\nWebsite: $website\nNature of Business : $b_type\nProduct Category (Yarn): $prod_cate_fab\nProduct Category (Apparel Fabric): $prod_cate_acc\nProduct Category (Clothing Accessories): $app_ser\nProduct Category (Services): $ser";
            // Send message to
			$subject="Company Enquiry for participation at Intex South Asia";			
           //if(mail("intexfair@worldexindia.com", $subject, $message,"From: <$email>"))
           if(mail("intexfair@worldexindia.com", $subject, $message,"From: <$email>"))
		{
		//echo $message;	
		}
		else
		{
                    echo "Problem sending mail.";
		}
	
                

     	

        }
?>
<table width="100%" cellpadding="3" cellspacing="0" border="0" class="register" bgcolor="#FFFFFF" style="height:400px;" style="background:#CFCFCF">
	<tr>
            <td align="center" >
                     <p style="width:635px;height:28px;margin-left:2px;font-size:20px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#000000;">
                         <b>Thank you for showing interest to participate at INTEX SOUTH ASIA 2016. We shall contact you soon
with more details.</b>
		</p>		
                 <!--<center><a href="index.php">Back</a></center>-->
            </td>
	</tr>
	</table>
