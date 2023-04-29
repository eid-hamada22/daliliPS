<html lang="en">
<?php
session_start();
ob_start();



?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php

            ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
	<title> dalilips.com الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها</title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
</head>
<div class="uper">
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logoard.png" width="160px" alt="" srcset="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        القائمة
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                       <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php" style="float: right;">البحث <i class="fa fa-search" style="font-size: 20px;" aria-hidden="true"></i></a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link " href="myb.php" style="float: right;">نشاطي التجاري <i class="fa fa-briefcase" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="sectorlist.php" style="float: right;">قائمة القطاعات <i class="fa fa-list" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.php" style="float: right;">سجل البحث <i class="fa fa-history" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fav.php" style="float: right;">المحفوظات <i class="fa fa-bookmark" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
						<?php
                          if (!isset($_SESSION['users_dl'])) {
                            echo'
                            <li class="nav-item">
                              <a class="nav-link active" href="login.php" style="float: right;">التسجيل <i class="fa fa-sign-in" style="font-size: 20px;" aria-hidden="true"></i></a>
                            </li>
                            ';
                          }
                        ?>
                    </ul>

                    <form class="d-flex">
                    <a href="index.php">
                        <a href="index.php" class="btn btn-outline-success" type="submit">
                            بحث
                        </a>
                    
                        <a href="index.php" class="form-control me-2" type="search" dir="rtl" placeholder="بحث سريع" aria-label="Search"></a>
                    </a>
                    </form>

                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="Privacy_policy.html" style="float: right;">سياسة الخصوصية <i class="fa fa-file-text" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="tt.html" style="float: right;">شروط الأستخدام <i class="fa fa-file-text-o" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    
                    <br>
                    <center><img src="img/logoard.png" alt="" srcset=""></center>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php
	include 'includes/conn.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE email = '$email'";
		$query1 = $conn->query($sql);

		$sql0 = "SELECT * FROM comp WHERE email = '$email'";
		$query10 = $conn->query($sql0);
 
		if($query1->num_rows > 0){
			$row1 = $query1->fetch_assoc();

			$email = $_POST['email'];
			$password = $_POST['password'];
	
			$sql2 = "SELECT * FROM users WHERE password = '$password'";
			$query2 = $conn->query($sql2);
	 
			if($query2->num_rows > 0){
				$_SESSION['users_dl'] = $row1['user_id'];
				$_SESSION['type_dl'] = 1 ;
				
				header('location: index.php');
			}
			else{
				echo  '<div class="Incpass">كلمة المرور خاطئة</div>' ; 
			}
		}

		else if($query10->num_rows > 0){
			$row1 = $query10->fetch_assoc();

			$email = $_POST['email'];
			$password = $_POST['password'];
	
			$sql2 = "SELECT * FROM comp WHERE password = '$password'";
			$query2 = $conn->query($sql2);
	 
			if($query2->num_rows > 0){
				$_SESSION['users_dl'] = $row1['comp_id'];
				$_SESSION['type_dl'] = 2 ;
				echo $_SESSION['users_dl'];
			}
			else{
				echo  '<div class="Incpass">كلمة المرور خاطئة</div>' ; 
			}
		}
		else{
			echo  '<div class="Incpass">البريد الالكتروني خاطئ</div>' ; 
		}

	}

	


?>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<a href=""><img src="img/logoard.png" style="margin-top: 100px;" ></a>
				</div>

				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-title">
						تسجيل الدخول
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

						<input class="input100 emailinp" type="text" name="email"
						value="<?php if(isset($_POST['email'])){
  						 echo $_POST['email'];}?>"
						placeholder="البريد الالكتروني" required>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 passinp" type="password "name="password" 
						value="<?php if(isset($_POST['password'])){
  						 echo $_POST['password'];}?>"
						placeholder="كلمة المرور" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
						<i class="fa fa-sign-in"></i>الدخول
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							هل نسيت
						</span>
						<a class="txt2" href="#">
					  كلمة المرور؟
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="sing.php">
						 لا تمتلك حساب ؟
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true" ></i>
						</a>
						<a class="text3" href="index.php">
						العودة للصفحة الرئيسية
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true" ></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
		if (isset($_SESSION['error'])) {

			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
			unset($_SESSION['error']);
			
			
		}
		    ob_end_flush();

		?>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>