<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
</head>

<body>
  <?php
ob_start();
include 'includes/session.php';
include 'includes/conn.php';

?>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">

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
<div style="margin-top: 120px;"></div>
<?php
  if (isset($_SESSION['users_dl'])){
    $ses = $_SESSION['users_dl'];
  }
  else{
      $ses ="dsdasdsadsadsafwf";
  }
    $cid = $_GET['cid'];
    $prd = $_GET['prdct'];
    $sql200 = "SELECT * FROM favert WHERE comp_id = '$prd' and user_id = '$ses'	";
    $query200 = $conn->query($sql200);
    $row200 = $query200->fetch_assoc();

    if ($query200->num_rows > 0) {
      $save ="الغاء الحفظ";
      $saveimg ="fa fa-bookmark";
    }
    else if ($query200->num_rows < 1) {
      $save ="حفظ";
      $saveimg ="fa fa-bookmark-o";
    }
    else{
      $save ="حفظ";
      $saveimg ="fa fa-bookmark-o";
    }


        $cid = $_GET['cid'];
        $sql = "SELECT * FROM comp WHERE comp_id = '$cid'";
        $vquery = $conn->query($sql);
        $row = $vquery->fetch_assoc();
          if ($row['fname'] == "1") {
                $sityf = "شركة";
          }
          if ($row['fname'] == "2") {
            $sityf = "معرض";
          }
          if ($row['fname'] == "3") {
            $sityf = "متجر";
          }
          if ($row['fname'] == "4") {
            $sityf = "مصنع";
          }
          if ($row['fname'] == "5") {
            $sityf = "مؤسسة";
          }
          if ($row['fname'] == "6") {
            $sityf = "مركز";
          }
          if ($row['fname'] == "7") {
            $sityf = "سنتر";
          }
          if ($row['fname'] == "8") {
            $sityf = "محلات";
          }
          if ($row['fname'] == "9") {
            $sityf = "مجموعة";
          }
          if ($row['fname'] == "10") {
            $sityf = "جمعية";
          }
          if ($row['fname'] == "11") {
            $sityf = "صيدلية";
          }
          if ($row['fname'] == "12") {
            $sityf = "مختبر";
          }
          if ($row['fname'] == "13") {
            $sityf = "مخبز";
          }
          if ($row['fname'] == "14") {
            $sityf = "محطة";
          }
          if ($row['fname'] == "15") {
            $sityf = "مكتبة";
          }
          if ($row['fname'] == "16") {
            $sityf = "مركز";
          }
          if ($row['fname'] == "17") {
            $sityf = null;
          }
          $cid = $_GET['cid'];
          $prdct = $_GET['prdct'];
          $sql100 = "SELECT * FROM prodect WHERE comp_id = '$cid' and prodect_id = '$prdct'";
          $query100 = $conn->query($sql100);
        if($query100->num_rows > 0){
          $row100 = $query100->fetch_assoc();
            echo '
                        <center>
                         <div class="col-md-4 mb-3" style="width: 90%;">
                                <div class="card text-right">
                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h4 class="card-title"  >' . $row100['name'] . '</h4>
                                        <a href="comp.php?cid='.$cid.'"><h6 class="card-subtitle mb-2 text-muted" >' . $sityf . " " . $row['name'] . '</h6></a>
                                        <p class="card-text">' . $row100['bio'] . '</p>
                                        ';
                                        if($row100['prc'] != 0 ){
                                            echo'
                                        <h6 class="card-subtitle mb-2 text-muted" > سعر المنتج = '. $row100['prc'] . ' ش</h6>
                                        ';
                                        }
                                        else{
                                            echo'
                                            <h6 class="card-subtitle mb-2 text-muted" >عذراً لم يحدد المنشئ سعر المنتج</h6>
                                            ';
                                        }
                                echo'
                                <form action="" method="post">
                                <button type="submit" name="save" class="btn btn-primary" ><i class="'.$saveimg.'"></i> '. $save .'</button>
                                </form>
                                    </div>
                                </div>
                            </div>
                          </center>
                          <br>


                          ';
                          $name22 = $row100['name'];
                          $sql1007 = "SELECT * FROM prodect WHERE name LIKE '%$name22%' and comp_id != '$cid'";
                          $query1007 = $conn->query($sql1007);
                          if($query1007->num_rows > 0){
                              echo'                <div style="float: right; font-size: x-large; padding-right: 10px;">: منتجات مشابها</div>
                              <br><br>';
                        while ($row1007 = $query1007->fetch_assoc()) {
                            $cmp = $row1007['comp_id'];
                            $sql2 = "SELECT * FROM comp WHERE comp_id = '$cmp'";
                            $vquery2 = $conn->query($sql2);
                            $row2 = $vquery2->fetch_assoc();
                            if ($row2['fname'] == "1") {
                                $sityf = "شركة";
                          }
                          if ($row2['fname'] == "2") {
                            $sityf = "معرض";
                          }
                          if ($row2['fname'] == "3") {
                            $sityf = "متجر";
                          }
                          if ($row2['fname'] == "4") {
                            $sityf = "مصنع";
                          }
                          if ($row2['fname'] == "5") {
                            $sityf = "مؤسسة";
                          }
                          if ($row2['fname'] == "6") {
                            $sityf = "مركز";
                          }
                          if ($row2['fname'] == "7") {
                            $sityf = "سنتر";
                          }
                          if ($row2['fname'] == "8") {
                            $sityf = "محلات";
                          }
                          if ($row2['fname'] == "9") {
                            $sityf = "مجموعة";
                          }
                          if ($row2['fname'] == "10") {
                            $sityf = "جمعية";
                          }
                          if ($row2['fname'] == "11") {
                            $sityf = "صيدلية";
                          }
                          if ($row2['fname'] == "12") {
                            $sityf = "مختبر";
                          }
                          if ($row2['fname'] == "13") {
                            $sityf = "مخبز";
                          }
                          if ($row2['fname'] == "14") {
                            $sityf = "محطة";
                          }
                          if ($row2['fname'] == "15") {
                            $sityf = "مكتبة";
                          }
                          if ($row2['fname'] == "16") {
                            $sityf = "مركز";
                          }
                          if ($row2['fname'] == "17") {
                            $sityf = null;
                          }
                            echo '
                            <center>
                             <div class="col-md-4 mb-3" style="width: 90%;">
                                    <div class="card text-right">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body">
                                            <h4 class="card-title"  >' . $row1007['name'] . '</h4>
                                            <a href="comp.php?cid='.$row1007['comp_id'].'"><h6 class="card-subtitle mb-2 text-muted" >' . $sityf . " " . $row2['name'] . '</h6></a>
                                            <p class="card-text">' . $row1007['bio'] . '</p>
                                            ';
                                            if($row1007['prc'] != 0 ){
                                                echo'
                                                <a href="prdct.php?cid='.$cmp.'&prdct=' . $row1007['prodect_id'] . '" class="btn btn-primary">السعر</a>
                                                ';
                                            }
                                    echo'
                                        </div>
                                    </div>
                                </div>
                              </center>
                              <br>
    
            ';
                        }
                          }
          
                          if(isset($_SESSION['users_dl'])){

                            $ses = $_SESSION['users_dl'];
                            $prd = $_GET['prdct'];
                        
                    
                              $cid = $_GET['cid'];
                              $ses = $_SESSION['users_dl'];
                              @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                              @$id = substr(str_shuffle($set), 0, 15); 
                              date_default_timezone_set("Asia/Gaza");
                              $dtime =  date("Y-m-d h:i:s") ;
                              $dye = date("Y-m-d");
                              $sql23 = "INSERT INTO serch (serch_id, comp_id, user_id, day, time, prd) VALUES ('$id', '$prdct', '$ses', '$dye', '$dtime', '1')";
                              $conn->query($sql23);
                        
                        
                            
                              $userblaa = $row100['click_nu'];
                              $newtgrtb = ($userblaa + 1);
                              $updateuser = $conn->prepare("UPDATE prodect SET click_nu = '$newtgrtb' WHERE  prodect_id = '$prd'");
                              $updateuser->execute();
                            
                        }
        }

?>
  <footer class="footer-16371">
    <hr />
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 text-center">
          <div class="footer-site-logo mb-4">
            <a href="#"><img src="img/logoard.png" alt="" /></a>
          </div>
          <ul class="list-unstyled nav-links mb-5">
            <li><a href="#">-البحث</a></li>
            <li><a href="#">-نشاطي التجاري</a></li>
            <li><a href="#">-عنا نحن</a></li>
            <li><a href="#">-المساعدة</a></li>
            <li><a href="#">شروط الاستخدام</a></li>
            <li><a href="#">-سياسة الخصوصية</a></li>
          </ul>

          <div class="social mb-4">
            <h3>Stay in touch</h3>
            <ul class="list-unstyled">
              <li class="in">
                <a href="#"><span class="fa fa-instagram"></span></a>
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
<?php
if (isset($_POST['save'])) {
  if (isset($_SESSION['users_dl'])){
    $ses = $_SESSION['users_dl'];
    $cid = $_GET['cid'];
    $prd = $_GET['prdct'];
    $sql200 = "SELECT * FROM favert WHERE comp_id = '$prd' and user_id = '$ses' and prd = 1	";
    $query200 = $conn->query($sql200);
    $row200 = $query200->fetch_assoc();
    if ($query200->num_rows > 0) {
      $sql7 = "DELETE FROM favert WHERE comp_id = '$prd' and user_id = '$ses' and prd = 1";
      $userblaa = $row100['favrt_nu'];
      $newtgrtb = ($userblaa - 1);
      $updateuser = $conn->prepare("UPDATE prodect SET favrt_nu = '$newtgrtb' WHERE  prodect_id = '$prd' and favrt_nu > 0");
      $updateuser->execute();
      if ($conn->query($sql7)){
        header('location: prdct.php?cid='.$cid.'&prdct='.$prd.'');
      }

    } 
    if ($query200->num_rows < 1) {
      @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      @$id = substr(str_shuffle($set), 0, 15);
      $sql2 = "INSERT INTO favert (favert_id, comp_id, user_id, prd) VALUES ('$id', '$prd', '$ses', '1')";

      $userblaa = $row100['favrt_nu'];
      $newtgrtb = ($userblaa + 1);
      $updateuser2 = $conn->prepare("UPDATE prodect SET favrt_nu = '$newtgrtb' WHERE  prodect_id = '$prd'");
      $updateuser2->execute();
      if ($conn->query($sql2)){
        header('location: prdct.php?cid='.$cid.'&prdct='.$prd.'');
        
      }
    }
  }
  else{
    $ses = "dsadasd123qdsa";
  }

}



?>