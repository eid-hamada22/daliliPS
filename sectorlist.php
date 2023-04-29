<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/serc.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>

  <title> dalilips.com</title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة,    <?php
              include 'includes/conn.php';
				$sql = "SELECT * FROM  kays ORDER BY num_use DESC";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    while ($row=mysqli_fetch_assoc($result)) {
                        echo $row['bio'];                
                    }
                }
    ?>">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
    <link rel = "apple-touch-icon" href = "img/si.png">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
</head>

<body>
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
                            <a class="nav-link" href="myb.php" style="float: right;">نشاطي التجاري <i class="fa fa-briefcase" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="sectorlist.php" style="float: right;">قائمة القطاعات <i class="fa fa-list" style="font-size: 20px;" aria-hidden="true"></i></a>
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
                            <a class="nav-link" href="login.php" style="float: right;">التسجيل <i class="fa fa-sign-in" style="font-size: 20px;" aria-hidden="true"></i></a>
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


<div style="margin-top: 30px;"></div>

    <center style="font-size: x-large;">قائمة القطاعات</center>
    <div dir="rtl" style="width: 90%; float: right; padding-right: 3px; ">اذا كنت تعاني في الوصول الى القطاع الذي تريده ,يمكنك البحث عنه في صفحة <a href="index.php">البحث-قطاعات الاعمال</a>.</div>
    <div style="width: 100%;">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
<!-- slist1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6523553314029856"
     data-ad-slot="4143633296"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <table class="table table-hover" style="width: 100%;">
    <tbody id="output1" style="width: 100%;">

    <?php
              include 'includes/conn.php';
				$sql = "SELECT * FROM  kays ORDER BY num_use DESC";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    while ($row=mysqli_fetch_assoc($result)) {
                        echo '	<tr onclick="window.location='."'".'sector.php?sector='.$row['kay_id'].''."'".';"> 
                        <td></td>
                        <td style=" vertical-align:middle; text-align:center; width: 50%;">'.$row['num_use'].' : عدد الشركات المدرجة</td>
                        <td style=" text-align:center; width: 50%;">'.$row['bio'].'</td>
                        </tr>';                
                    }
                }
    ?>
    </tbody>
  </table>
<div style="width: 100%;">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
<!-- slist2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6523553314029856"
     data-ad-slot="7529194598"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<footer class="footer-16371">
    <hr />
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 text-center">
          <div class="footer-site-logo mb-4">
            <a href="#"><img src="img/logoard.png" alt="" /></a>
          </div>
          <ul class="list-unstyled nav-links mb-5">
            <li><a href="index.php">البحث</a></li>
            <li><a href="myb.php">نشاطي التجاري</a></li>
            <li><a href="sectorlist.php">قائمة القطاعات</a></li>
            <li><a href="fav.php">المحفوظات</a></li>
            <li><a href="history.php">سجل البحث</a></li>
            <li><a href="tt.html">شروط الاستخدام</a></li>
            <li><a href="Privacy_policy.html">سياسة الخصوصية</a></li>
          </ul>

          <div class="social mb-4">
            <h3>Stay in touch</h3>
            <ul class="list-unstyled">
              <li class="in">
                <a href=""><span class="fa fa-instagram"></span></a>
              </li>
              <li class="fb">
                <a href="#"><span class="fa fa-facebook-square"></span></a>
              </li>
            </ul>
          </div>

          <div class="copyright">
            <p class="mb-0">
              <small>&copy; جميع الحقوق محفوظة | All Rights Reserved.</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<style>
    


  h1, h2, h3, h4, h5, h6,
  .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }
  
  a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    a, a:hover {
      text-decoration: none !important; }
  
  
  .footer-16371 {
    margin-top: 0px;
    padding: 1rem 0;
    font-family: "Poppins", sans-serif; }
    .footer-16371 .footer-site-logo {
      text-align: center;
      font-size: 2rem;
      font-weight: 900; }
      .footer-16371 .footer-site-logo a {
        color: #4200ff; }
    .footer-16371 .nav-links {
      padding: 0;
      margin: 0; }
      .footer-16371 .nav-links li {
        display: inline-block; }
        .footer-16371 .nav-links li a {
          padding: 10px;
          color: #000; }
          .footer-16371 .nav-links li a:hover {
            color: #4200ff; }
    .footer-16371 .social h3 {
      font-weight: bold;
      font-size: 18px;
      color: #000; }
    .footer-16371 .social ul li {
      display: inline-block; }
      .footer-16371 .social ul li a {
        display: inline-block;
        padding: 10px; }
      .footer-16371 .social ul li.in a {
        color: #df588a; }
      .footer-16371 .social ul li.tw a {
        color: #15b8ff; }
      .footer-16371 .social ul li.fb a {
        color: #3742d0; }
      .footer-16371 .social ul li.dr a {
        color: #fa38c1; }
      .footer-16371 .social ul li.pin a {
        color: #dd4d5a; }
    .footer-16371 .copyright {
      color: #999999; }
  

      
</style>