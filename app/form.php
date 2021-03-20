<?php
require('../skyeglobal/config.php');
//require('../Apps/PHPMailer-master/class.phpmailer.php');
$result = mysql_query("select branch_code,branch_name from branch_codes order by branch_name asc");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="keywords" content="skye, open account online, online account opening, online bank account opening, open skye global, skye flex, skye save, skye ease, campus plus" >
<meta name="description" content="Welcome to Skye Bank Online Account Opening Portal. Open an account and get your account number in 24hours. Guaranteed!">
<meta property="og:title" content="Skye Bank Online Account Opening"/>
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.skyebankng.com/logo.jpg"/>
<meta property="og:url" content="https://accounts.skyebankng.com" />
<meta property="og:description" content="Open an account online with ease...."/>
<link rel="icon" href="images/favicon.ico" type="image/ico" />
<title>Skye Bank PLC | Online Account Opening</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="form.css">
  
</head>
<body id="top">
<div class="container">  
  <form id="contact" action="form.php" method="post">
    <h3>No BVN ? Fill the form. </h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
	 <fieldset>
      <input placeholder="Your Account No. (leave blank if not applicable)" name="accountno" type="text" tabindex="1"  autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Customer's Name" name="customername" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Phone Number" name="phonenumber" type="tel" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mobile Number"  name="mobilenumber" type="tel" tabindex="3" required>
    </fieldset>
	<fieldset>
      <input placeholder="Email Address"  name="email" type="tel" tabindex="4" required>
    </fieldset>
		<fieldset>
        <select class="input" placeholder="Branch" name="branch" type="text" tabindex="5" required>
			<option>****** Select Preferred Branch ******</option>
		
		<?php
			while ($row = mysql_fetch_assoc($result)) {

						  unset($branch_code, $branch_name);
						  $branch_code = $row['branch_code'];
						  $branch_name = $row['branch_name']; 
						  echo '<option value="'.$branch_name.'">'.$branch_name.'</option>';
						 
		}
		?>
		</select>
    </fieldset>
	<fieldset>
        <select class="input" placeholder="Subject" name="subject" type="tel" tabindex="6" required>
			<option>****** Select Subject ******</option>
			<option value="Account Opening">Account Opening</option>
			<option value="Account Reactivation">Account Reactivation</option>
			<option value="Account Upgrade">Account Upgrade</option>
			<option value="Product Enquiries">Product Enquiries</option>
			<option value="Bank Verification Number">Bank Verification Number</option>					
			</select>
    </fieldset>
 
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="7" name ="message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
<?php
if(isset($_POST['submit'])){

$accountno= $_POST['accountno'];
$customername= $_POST['customername'];
$phonenumber= $_POST['phonenumber'];
$mobilenumber= $_POST['mobilenumber'];
$subject1= $_POST['subject'];
$email= $_POST['email'];
$branch= $_POST['branch'];
$message= $_POST['message'];
$datelogged = date("Y-m-d H:i:s");
$Email = "";

$messagex = "<table width=550 border=0 cellspacing=0 cellpadding=5> <tr>
<td bgcolor=#efefef><table width=600 border=0 cellspacing=0 cellpadding=5>
<tr><td bgcolor=#FFFFFF style=border-top:2px solid #efefef;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px><p align=center><strong>Skye Flex Application</strong></p><blockquote>
Dear $customername, <br><br>

<br><br><b>Reference Code: $RefCode</b><br><br><br>
<br> Please, do not hesistate to contact us via yescenter@skyebankng.com for any questions or enquiries you may have.<br><br><br>Best Regards. <br><br>
<br>Skye Flex Team</td></tr></table></td></tr></table>";
	   
            $xmail = "$Email";
            $subject = "$AcctType: Enquiry";
		    $headers = 'MIME-Version: 1.0' . "\r\n".
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'From: Skye Bank Plc <info@skyebankng.com>' . "\r\n" .
			'Reply-To: Skye YES Center <yescenter@skyebankng.com>' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
            mail($xmail, $subject, $messagex, $headers);
			
$query = "insert into nobvnacctopening (accountno,customername,phonenumber,mobilenumber,subject,email,branch,message,datelogged) values 
('$accountno','$customername','$phonenumber','$mobilenumber','$subject1','$email','$branch','$message','$datelogged')";
if(mysql_query($query)){
echo '<script language="javascript">
		alert("We have received your request.");
		window.location.href="https://accounts.skyebankng.com/app/form.php";
		</script>';
}
}

?>
</body>
</html>
