<?php 

include('../../skyeglobal2/config.php');

if (empty($_POST["title"])) {
$titleError = "Title is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$titleError</p>";
exit();
}


if (empty($_POST["fname"])) {
$fnameError = "First Name is required.";
echo "<p class=error>$fnameError</p>";
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
$fnameError2 = "Only letters and white space allowed for first name";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$fnameError2</p>";
exit();
}
}


if (empty($_POST["lname"])) {
$lnameError = "Last Name is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$lnameError</p>";
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
$lnameError2 = "Only letters and white space allowed for last name";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$lnameError2</p>";
exit();
}
}

if (empty($_POST["DateOfBirth"])) {
$dob_mmError = "Date of Birth is required";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$dob_mmError</p>";
exit();
}

$DateOfBirth = $_POST['dob_mm'].' '.$_POST['dob_dd'].', '.$_POST['dob_yy'];

$dob = date("d-M-y", strtotime($DateOfBirth));
  $birthDate = explode("/", $dob);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
    
 if ($age < 18) {
  $dob_yy2Error = "Sorry, you are not eligble for this account based on your age";
	echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$dob_yy2Error</p>";
	exit();
  }
  
if (empty($_POST["sex"])) {
$sexError = "Gender is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$sexError</p>";
exit();
}

if (empty($_POST["ms"])) {
$msError = "Marital Status is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$msError</p>";
exit();
}

if (empty($_POST["ra_street1"])) {
$ra_street1Error = "Residential Address is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$ra_street1Error</p>";
exit();
}


if (empty($_POST["ra_state"])) {
$ra_stateError = "Residential State is required";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$ra_stateError</p>";
exit();
}

if (empty($_POST["religion"])) {
$religionError = "Religion is required";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$religionError</p>";
exit();
}

if (empty($_POST["cellphone"])) {
$cellphoneError = "Mobile Number is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$cellphoneError</p>";
exit();
}

if (strlen($_POST["cellphone"])<11) {
  echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>Mobile Number cannot be less than 11 digits.</p>";
exit();
}

if (empty($_POST["branch"])) {
$typeError = "Preferred Branch is required.";
echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$typeError</p>";
exit();
}

$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*1000; //1 MB
$dir = "../../skyeFlex/upload/FlexFiles/"; // Upload directory


	$pext = pathinfo($_FILES['pfile']['name'], PATHINFO_EXTENSION);
	$sext = pathinfo($_FILES['sfile']['name'], PATHINFO_EXTENSION);
$pext = strtolower($pext);
$sext = strtolower($sext);
	if ( in_array($pext, $valid_formats)) {
		if( $_FILES['pfile']['size'] < $max_file_size ){
			$puniq = base_convert(uniqid(), 16, 10);
			$ptmp = $_FILES['pfile']['tmp_name'];
			$puniq_file_name = $puniq.".".$pext;
			if(move_uploaded_file($ptmp, $dir.$puniq_file_name)){
			}
			else{
				$pmsg = "Please upload your Passport";
			}
			
		}
		else{
			$pmsg = "Passport File is too large";
		}
	}
	else{
		$pmsg = "Passport has wrong file format";
	}
	
	if ( in_array($sext, $valid_formats)) {
		if( $_FILES['sfile']['size'] < $max_file_size ){
			$suniq = base_convert(uniqid(), 16, 10);
			$stmp = $_FILES['sfile']['tmp_name'];
			$suniq_file_name = $suniq.".".$sext;
			if(move_uploaded_file($stmp, $dir.$suniq_file_name)){
				}
			else{
				$smsg = "Please upload your Signature";
			}
		}
		else{
			$smsg = "Signature File is too large";
		}
	}
	else{
		$smsg = "Signature has wrong file format";
	}


if(isset($pmsg)){
	echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$pmsg</p>"; exit();
}

if(isset($smsg)){
	echo "<p style='color: #D8000C; background-color: #FFD2D2; width:50%; font-family:Verdana; margin:10px 0px;  padding:12px; font-size:18px; vertical-align:middle;'>$smsg</p>"; exit();
}

$AcctType = "New Skye Flex Savings";
$FullName = $_POST['title'].' '.$_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
$title = $_POST['title'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$StateofOrigin = $_POST['soo'];
$LGA = $_POST['lga'];
$Religion = $_POST['religion'];
$Sex = $_POST['sex'];
$MaritalStatus = $_POST['ms'];
$ResidentialAddress = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $_POST['ra_street1']);
$rstate = $_POST['ra_state'];
$TelePhone = $_POST['telephone'];
$CellPhone =  $_POST['cellphone'];
$Email = $_POST['email'];
$bvn = $_POST['bvn'];
$PreferredBranch = $_POST['branch'];
$Referral = $_POST['referral'];
$zrefno = mt_rand(11,999999);
$RefCode = 'SB-FLEX-' .date("d") . date("m") . date("Y") .'-'. $zrefno;	
$DateOfBirth = $_POST['DateOfBirth'];


//if (stristr($_SERVER['HTTP_REFERER'],"https://accounts.skyebankng.com/skyeFlex/gform.php")){

$fx=mysql_query("select Fname, Lname, DateOfBirth, CellPhone from flex_accounts WHERE Fname = '$fname' AND Lname='$lname' AND DateOfBirth = '$DateOfBirth' AND CellPhone='$CellPhone'") or die(mysql_error());
$numrows = mysql_num_rows($fx);
if($numrows){
echo "Dear $fname, <br><br> Sorry, we noticed that an existing Skye Flex application match your details. Duplicate applications are not allowed."; 
exit;
}

$fxx=mysql_query("select CellPhone from flex_accounts WHERE CellPhone='$CellPhone'") or die(mysql_error());
$numrows = mysql_num_rows($fxx);
if($numrows){
echo "Dear $fname, <br><br> Sorry, we noticed that an existing Skye Flex application match your phone number. Duplicate phone numbers are not allowed."; 
exit;
}

//echo 'test'.$PhoneOfNOK . 'test' ;

$sqli = "INSERT INTO flex_accounts (RefCode, AcctType, Title, Fname, Mname, Lname, FullName, DateOfBirth, PlaceOfBirth, StateofOrigin, LGA, Religion, Sex, MaritalStatus, ResidentialAddress, NBS, RPostal, RCity, RState, RCountry, MailingAddress, Telephone, CellPhone, Email, EmployStatus, Occupation, EmployerName, EmployerAddress, NextOfKin, Relationship, AddressOfNOK, EmailOfNOK, PhoneOfNOK, Services, Security, PreferredBranch, Referral, Passport, Signature, bvn, Status, StatusDate, Comments, DateApproved, DateDeclined, DateTreated, DateFiled, AcctNum) 
VALUES ('$RefCode', '$AcctType', '$title', '$fname', '$mname', '$lname', '$FullName', '$DateOfBirth', '$PlaceOfBirth', '$StateofOrigin', '$LGA', '$Religion', '$Sex', '$MaritalStatus', '$ResidentialAddress', '$nbs', '$rpostal', '$rcity', '$rstate', '$rcountry', '$MailingAddress', '$TelePhone', '$CellPhone', '$Email', '$EmployStatus', '$Occupation', '$EmployerName', '$EmployerAddress', '$NextOfKin', '$Relationship', '$AddressOfNOK', '$EmailOfNOK', 0, '".$Services[0].", ".$Services[1].", ".$Services[2]."', '$Security', '$PreferredBranch', '$Referral', '{$puniq_file_name}', '{$suniq_file_name}', '$bvn', '', CURRENT_TIMESTAMP, '', '', '', '', '', '')";

if (mysql_query($sqli)) {
    $myfile = fopen("logs/error_log_" . date("Ymd") . ".txt","a+");
    fwrite($myfile, date("H:m:s") . ' - ' . $FullName . ' - ' . 'Success' . PHP_EOL);
    fclose($myfile);
    //die("An error occurred while processing your application, please contact our HelpDesk via yescenter@skyebankng.com");
    //die(mysql_error());
    //echo 1;
} else {
    $myfile = fopen("logs/error_log_" . date("Ymd") . ".txt","a+");
    fwrite($myfile, date("H:m:s") . ' - ' . $FullName . ' - ' . mysql_error() . PHP_EOL);
    fclose($myfile);
    die("An error occurred while processing your application, please contact our HelpDesk via yescenter@skyebankng.com");
    //die(mysql_error());
    //echo 1;
}



// Send a mail to customer.
		
$messagex = "<table width=550 border=0 cellspacing=0 cellpadding=5> <tr>
<td bgcolor=#efefef><table width=600 border=0 cellspacing=0 cellpadding=5>
<tr><td bgcolor=#FFFFFF style=border-top:2px solid #efefef;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px><p align=center><strong>Skye Flex Application</strong></p><blockquote>Dear $FullName, <br><br>Your application for $AcctType has been successfully logged into our system.<br><br>We are in the process of creating your new account. Please quote the Reference Code below in any future correspondences regarding this application.<br><br><b>Reference Code: $RefCode</b><br><br><br><br> Please, do not hesistate to contact us via yescenter@skyebankng.com for any questions or enquiries you may have.<br><br><br>Best Regards. <br><br><br>Skye Flex Team</td></tr></table></td></tr></table>";
	   
       $xmail = "$Email";
       $subject = "$AcctType: New Account Application";
		$headers = 'MIME-Version: 1.0' . "\r\n".
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'From: Skye Bank Plc <info@skyebankng.com>' . "\r\n" .
			'Reply-To: Skye YES Center <yescenter@skyebankng.com>' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
            mail($xmail, $subject, $messagex, $headers);

// Send a mail to retail help desk.
		
$xmessagex = "<table width=550 border=0 cellspacing=0 cellpadding=5> <tr>
<td bgcolor=#efefef><table width=600 border=0 cellspacing=0 cellpadding=5>
<tr><td bgcolor=#FFFFFF style=border-top:2px solid #efefef;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px><h3 align=center><strong>Skye Flex Online Application</strong></h3><blockquote>New application for $AcctType has been logged into the system.<br><br>See summary below:<br><br><b>Name of Applicant:$FullName<br>Reference Code: $RefCode<br>Cell Phone: $CellPhone<br><br>Email: $Email<br>
</b><br><br><br>Log in to skyeplus for full details.<br><br><br>Thank you</td></tr></table></td></tr></table>";
	   
       $xxmail = "rbd@skyebankng.com";
       $xsubject = "$AcctType: New Account Application";
		$xheaders = 'MIME-Version: 1.0' . "\r\n".
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'From: Skye Bank Plc <info@skyebankng.com>' . "\r\n" .
			'Cc: <cpcteam@skyebankng.com>' . "\r\n" .
			'Reply-To: Skye Global HelpDesk <yescenter@skyebankng.com>' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
            mail($xxmail, $xsubject, $xmessagex, $xheaders);			

//header("Location:confirmation.php?r=$RefCode");
//} else {
//echo "Sorry the application was not accessed properly. You cannot continue.";
//}

//}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Ahmed B" />

    <!-- Stylesheets
    ============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../assets/style.css" type="text/css" />
    <link rel="stylesheet" href="../assets/dark.css" type="text/css" />
    <link rel="stylesheet" href="../assets/animate.css" type="text/css" />
    <link rel="stylesheet" href="../assets/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="../assets/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<script type="text/javascript" src="../assets/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>Skye Bank PLC | Online Account Application Portal</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

       

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">

				<h1>Skye Flex Account</h1>
                        <span>Start saving now...</span>
                <div id="logo" class="breadcrumb">
                        <a href="index.html" class="standard-logo" data-dark-logo="https://www.skyebankng.com/templates/skyebank/images/logo.png"><img src="https://www.skyebankng.com/templates/skyebank/images/logo.png" alt="Skye Logo"></a>
                        
                    </div><!-- #logo end -->
            </div>

        </section>
			
			
        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
			
                <div class="container clearfix"><br><br>
			
                    <div id="processTabs">
                        <ul class="process-steps bottommargin clearfix">
                           <li>
                                <a href="#ptab0" class="i-circled i-bordered i-alt divcenter">1</a>
                                <h5>Declaration</h5>
                            </li>
                            <li>
                                <a href="#ptab1" class="i-circled i-bordered i-alt divcenter">2</a>
                                <h5>Your BVN</h5>
                            </li>
                            <li>
                                <a href="#ptab2" class="i-circled i-bordered i-alt divcenter">3</a>
                                <h5>Others Details</h5>
                            </li>
                            <li>
                                <a href="#ptab3" class="i-circled i-bordered i-alt divcenter">4</a>
                                <h5>Finish</h5>
                            </li>
							
                        </ul>
                  
				
				<div class="postcontent nobottommargin clearfix">
                             <div id="ptab3">
                               

				<div class="well well-lg nobottommargin" style="margin-left:30px;">
				<h4><strong>Your application was successful with Reference Code: <b><?php echo $RefCode; ?></b>.</strong></h4>
<h2><br>Next Steps</h2>
<ul class="list-style-arrow-two m-left-100">
  <li>An email has been sent to your mailbox (if provided) with details of this application.</li>
  <li>Your account number will be sent to you via email and SMS within 24 hours.</li>
  <li>For enquiries, do contact our YES Center via 08069880000 or 01-4536279. You can also send an email to yescenter@skyebankng.com</li>
</ul><br />
						</div>
                        
                    </div>

                    <script>
                      $(function() {
                        $( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
                        $( ".tab-linker" ).click(function() {
                            $( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
                            return false;
                        });
                      });
                    </script>

                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>

            </div>
			
       </div> </div>

        </section><!-- #content end -->
        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark" style="background: url('../assets/footer-bg.jpg') repeat fixed; background-size: 100% 100%;">
                       

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        <div class="copyrights-menu copyright-links clearfix">
                            <a href="https://www.skyebankng.com">Back to Skye Bank Website</a>
                        </div>
                        Copyrights &copy; 2017 Skye Bank PLC.
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="http://www.facebook.com/skyebanknigeriaplc" target="blank" class="social-icon si-small si-borderless nobottommargin si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="https://twitter.com/SkyeBankNigeria" target="blank" class="social-icon si-small si-borderless nobottommargin si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="http://www.youtube.com/user/skyebanknigeriaplc" target="blank" class="social-icon si-small si-borderless nobottommargin si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
							
							<a href="http://www.instagram.com/skyebankplc" target="blank" class="social-icon si-small si-borderless nobottommargin si-instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
							
                            <a href="http://www.linkedin.com/company/skye-bank-plc" target="blank" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="../assets/functions.js"></script>

</body>
</html>