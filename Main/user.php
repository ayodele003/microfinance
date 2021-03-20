<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

 <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="../assets/style.css" type="text/css" />
    <link rel="stylesheet" href="../assets/dark.css" type="text/css" />
    <link rel="stylesheet" href="../assets/animate.css" type="text/css" />
    <link rel="stylesheet" href="../assets/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="../assets/responsive.css" type="text/css" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<script type="text/javascript" src="../assets/plugins.js"></script>
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!--<link href="../assets/demo/demo.css" rel="stylesheet" />-->
  
  <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
     <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="./home.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>Customer Creation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Account Creation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./loan.php">
              <i class="material-icons">library_books</i>
              <p>Loan Request</p>
            </a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="./loan.php">
              <i class="material-icons">library_books</i>
              <p>Create Guarantor</p>
            </a>
          </li>
		<div class="dropdown">
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Maintanance</p>
            </a>
		<div class="dropdown-content">
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
		</div>
          </li>
		  </div>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Transactions</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Customer Creation</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Personal Details</h4>
                  <p class="card-category">Complete Your Details</p>
                </div>
		<section id="content">
            <div class="content-wrap">
		        <div class="container clearfix"><br><br>
			        <div id="processTabs">
                        <ul class="process-steps bottommargin clearfix">
							<li>
                                <a href="#ptab0" class="i-circled i-bordered i-alt divcenter">1</a>
                                <h5>Personal Details</h5>
                            </li>
                            <li>
                                <a href="#ptab1" class="i-circled i-bordered i-alt divcenter">2</a>
                                <h5>More Personal Details</h5>
                            </li>
							<li>
                                <a href="#ptab2" class="i-circled i-bordered i-alt divcenter">3</a>
                                <h5>Educational Details</h5>
                            </li>
						</ul>
						
						<div class="postcontent nobottommargin clearfix">
                     <div id="ptab0">							
					<div class="well well-lg nobottommargin" style="margin-left:30px;">
					<!--<h3>SKYE FLEX</h3>-->
					
					<div class="placehold">
					<div id="content">
					<!--<ul class="breadcrumb">
						<li class="home"><a href="../index.php" target="_parent"></a></li>
						<li><a href="#" >Requirements</a></li>
						<li class="on"><a href="#">Declaration</a></li>
						<li><a href="#" >Application Form</a></li>
						<li class="last"><a href="#" >Confirmation</a></li>
						
					</ul>-->	
                <div class="card-body">
                  <form action="user.php#ptab1" method="post" >
                    <div class="row">
                      <!--<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Form Number</b></label>
                          <input type="text" name="form_number" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Date</b></label>
                          <input type="text" name="form_date" class="form-control">
                        </div>
                      </div>-->
                    </div>
                    <div class="row">
					  <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Title</b></label>
                         <input type="text" name="title" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>First Name</b></label>
                          <input type="text" name="first_name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Middle Name</b></label>
                          <input type="text" name="middle_name" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Last Name</b></label>
                          <input type="text" name="last_name" class="form-control">
                        </div>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Date of Birth</b></label>
                          <input type="text" name="date_of_birth" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Gender</b></label>
                          <input type="text" name="gender" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Marital Status</b></label>
                          <input type="text" name="marital_status" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Email</b></label>
                          <input type="email" name="email" class="form-control">
                        </div>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>BVN</b></label>
                          <input type="text" name="bvn" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Phone Number</b></label>
                          <input type="text" name="phone_number" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>NIN Number</b></label>
                          <input type="text" name="nin_number" class="form-control">
                        </div>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label><b>Other Bank Details</b></label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Bank Details</label>
                            <textarea class="form-control" name="other_details" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Next</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
		
		<div class="postcontent nobottommargin clearfix">
                     <div id="ptab1">							
					<div class="well well-lg nobottommargin" style="margin-left:30px;">
					<div class="card-body">
                  <form action="user.php#ptab2" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Address</b></label>
                          <input type="text" name="form_number" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Location</b></label>
                          <input type="text" name="form_date" class="form-control">
                        </div>
                      </div>
                    </div><br>
					 <div class="row">
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>State</b></label>
                          <!--<input type="text" name="form_date" class="form-control">-->
						  <select class="form-control">
							<option ="" class="form-control"></option>
							<option ="" class="form-control">Kwara</option>
							<option ="" class="form-control">Lagos</option>
						  </select>
                        </div>
                      </div>
                    </div><br>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Next</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
					</div>
					</div>					
		</div>
		
                     <div id="ptab2">							
					<div class="well well-lg nobottommargin" style="margin-left:30px;">
					<div class="card-body">
                  <form action="" method="post" enctype="application/x-www-form-urlencoded">
                   	 <div class="row">
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Educational Level</b></label>
                          <!--<input type="text" name="form_date" class="form-control">-->
						  <select class="form-control">
							<option ="" class="form-control"></option>
							<option ="" class="form-control">1</option>
							<option ="" class="form-control">2</option>
						  </select>
                        </div>
                      </div>
					  <div class="col-md-6">
					  <div class="form-group">
                          <label class="bmd-label-floating"><b>Professional Level</b></label>
                          <!--<input type="text" name="form_date" class="form-control">-->
						  <select class="form-control">
							<option ="" class="form-control"></option>
							<option ="" class="form-control">1</option>
							<option ="" class="form-control">2</option>
						  </select>
                        </div>
                      </div>
					  <div class="col-md-6">
					  <div class="form-group">
                          <label class="bmd-label-floating"><b>Financial Status</b></label>
                          <!--<input type="text" name="form_date" class="form-control">-->
						  <select class="form-control">
							<big><option ="" class="form-control"></option></big>
							<big><option ="" class="form-control">1</option></big>
							<big><option ="" class="form-control">2</option></big>
						  </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="create_cust" class="btn btn-primary pull-right">Create Customer</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
					</div>
					</div>					
		</div>
		
				
		
		
      </div>
	
	<?php
			
if (isset($_POST['create_cust']))
{


	$str = '<?xml version="1.0" encoding="UTF-8"?><entrys></entrys>';
	$xml = simplexml_load_string($str);

	$form_number = $_POST['form_number'];
	$form_date = $_POST['form_date'];
	$title = $_POST['title'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$date_of_birth = $_POST['date_of_birth'];
	$gender = $_POST['gender'];
	$marital_status = $_POST['marital_status'];
	$email = $_POST['email'];
	$bvn = $_POST['bvn'];
	$phone_number = $_POST['phone_number'];
	$nin_number = $_POST['nin_number'];
	$other_details = $_POST['other_details'];


	$form_number = htmlentities($form_number, ENT_COMPAT, 'UTF-8', false);
	$form_date = htmlentities($form_date, ENT_COMPAT, 'UTF-8', false);
	$first_name = htmlentities($first_name, ENT_COMPAT, 'UTF-8', false);
	$middle_name = htmlentities($middle_name, ENT_COMPAT, 'UTF-8', false);
	$last_name = htmlentities($last_name, ENT_COMPAT, 'UTF-8', false);
	$date_of_birth = htmlentities($date_of_birth, ENT_COMPAT, 'UTF-8', false);
	$gender = htmlentities($gender, ENT_COMPAT, 'UTF-8', false);
	$marital_status = htmlentities($marital_status, ENT_COMPAT, 'UTF-8', false);
	$email = htmlentities($email, ENT_COMPAT, 'UTF-8', false);
	$bvn = htmlentities($bvn, ENT_COMPAT, 'UTF-8', false);
	$phone_number = htmlentities($phone_number, ENT_COMPAT, 'UTF-8', false);
	$nin_number = htmlentities($nin_number, ENT_COMPAT, 'UTF-8', false);
	$other_details = htmlentities($other_details, ENT_COMPAT, 'UTF-8', false);


	$xml->reports = "";
	$xml->reports->addChild('form_number', $form_number);
	$xml->reports->addChild('form_date', $form_date);
	$xml->reports->addChild('first_name', $first_name);
	$xml->reports->addChild('middle_name', $middle_name);
	$xml->reports->addChild('last_name', $last_name);
	$xml->reports->addChild('date_of_birth', $date_of_birth);
	$xml->reports->addChild('gender', $gender);
	$xml->reports->addChild('marital_status', $marital_status);
	$xml->reports->addChild('email', $email);
	$xml->reports->addChild('bvn', $bvn);
	$xml->reports->addChild('phone_number', $phone_number);
	$xml->reports->addChild('nin_number', $nin_number);
	$xml->reports->addChild('other_details', $other_details);


	$doc = new DOMDocument('1.0');
	$doc->formatOutput = true;
	$doc->preserveWhiteSpace = true;
	$doc->loadXML($xml->asXML(), LIBXML_NOBLANKS);
	$doc->save('test2.xml');
	
	echo "<script>alert('Customer Created');</script>";


}			
			
?>
	
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
			
       </div>

        </section><!-- #content end -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <!--<script src="../assets/js/core/jquery.min.js"></script>-->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  
  
    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="../assets/functions.js"></script>

</body>

</html>