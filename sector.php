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
<?php
  include 'includes/conn.php';

    if(!isset($_GET['sector'])){
        header('location:index.php ');
    }
    else{
        $sector = $_GET['sector'];
        $sql = "SELECT * FROM kays WHERE kay_id = '$sector'";
        $vquery = $conn->query($sql);
        $row1 = $vquery->fetch_assoc();
    }

?>
  <title> dalilips.com </title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة,<?php echo $row1['bio'] ; ?>">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
    <link rel = "apple-touch-icon" href = "img/si.png">
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
    <center style="font-size: x-large;"><?php echo $row1['bio']  ?></center>
    
    <table class="table table-hover">
    <tbody id="output3">
    <?php
                $name = $row1['bio'];
                $sql2 = "SELECT * FROM comp WHERE tayp = '$name' or kay1 = '$name' or kay2 = '$name' or kay3 = '$name'";
                $vquery2 = $conn->query($sql2);
                
            if ($vquery2->num_rows > 0) {
                while ($row = $vquery2->fetch_assoc()) {
                    if($name == $row['tayp']){$s =  $row['tayp'];}if($name == $row['kay1']){$s =  $row['kay1'];}if($name == $row['kay2']){$s =  $row['kay2'];}if($name == $row['kay3']){$s =  $row['kay3'];}

                    if($row['city'] =="1"){$sityfg = "غزة";}if($row['city'] =="2"){$sityfg = "خان يونس";}if($row['city'] =="3"){$sityfg = "رفح";}if($row['city'] =="4"){$sityfg = "بيت لاهيا";}if($row['city'] =="5"){$sityfg = "دير البلح";}
                    if($row['region'] =="1"){$sityfa = "بيت حانون";}if($row['region'] =="2"){$sityfa = "عطاطرة";}if($row['region'] =="3"){$sityfa = "الريمال";}if($row['region'] =="4"){$sityfa = "جباليا";}if($row['region'] =="5"){$sityfa = "المنطقة الصناعية";}if($row['region'] =="6"){$sityfa = "مخيم الشاطئ";}if($row['region'] =="7"){$sityfa = "وحش";}if($row['region'] =="8"){$sityfa = "البريج";}if($row['region'] =="9"){$sityfa = "مغازي";}if($row['region'] =="10"){$sityfa = "الزوايدة";}if($row['region'] =="11"){$sityfa = "دير البلح";}if($row['region'] =="12"){$sityfa = "جرارة";}if($row['region'] =="13"){$sityfa = "كف العبادة";}if($row['region'] =="14"){$sityfa = "بني سهيلة";}if($row['region'] =="15"){$sityfa = "عبسان الكبير";}if($row['region'] =="16"){$sityfa = "خربة عدس";}
                    if ($row['fname'] == "1") {$sityf = "شركة";}if ($row['fname'] == "2") {$sityf = "معرض";}if ($row['fname'] == "3") {$sityf = "متجر";}if ($row['fname'] == "4") {$sityf = "مصنع";}if ($row['fname'] == "5") {$sityf = "مؤسسة";}if ($row['fname'] == "6") {$sityf = "مركز";}if ($row['fname'] == "7") {$sityf = "سنتر";}if ($row['fname'] == "8") {$sityf = "محلات";}if ($row['fname'] == "9") {$sityf = "مجموعة";}if ($row['fname'] == "10") {$sityf = "جمعية";}if ($row['fname'] == "11") {$sityf = "صيدلية";}if ($row['fname'] == "12") {$sityf = "مختبر";}if ($row['fname'] == "13") {$sityf = "مخبز";}if ($row['fname'] == "14") {$sityf = "محطة";}if ($row['fname'] == "15") {$sityf = "مكتبة";}if ($row['fname'] == "16") {$sityf = "مركز";}if ($row['fname'] == "17") {$sityf = null;}
                    echo '
                <tr onclick="window.location='."'".'comp.php?cid='.$row['comp_id'].''."'".';">
                <td style=" vertical-align:middle; text-align:center; ">'.$sityfg.'-'.$sityfa.'</td>
                <td style=" vertical-align:middle; text-align:center; ">'.$sityf . " " . $row['name'].'</td>
                <td style=" vertical-align:middle; text-align:center; "><img src="img/'.$row['logo'].'"width="50px"></td>
                        </tr>';
                }

            }
            else{

            }
    ?>
    </tbody>
    </table>
    

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
</body>
