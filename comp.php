<!DOCTYPE html>
<html lang="en">

<head>
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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
  <link rel = "apple-touch-icon" href = "img/si.png">
  <?php
  include 'includes/conn.php';
  if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    $sql = "SELECT * FROM comp WHERE comp_id = '$cid'";
    $vquery = $conn->query($sql);
    $row = $vquery->fetch_assoc();

    if ($row['city'] == "1") {
      $f = "غزة";
    }
    if ($row['city'] == "2") {
      $f = "خان يونس";
    }
    if ($row['city'] == "3") {
      $f = "رفح";
    }
    if ($row['city'] == "4") {
      $f = "بيت لاهيا";
    }
    if ($row['city'] == "5") {
      $f = "دير البلح";
    }
    if ($row['region'] == "1") {
      $sityfa = "بيت حانون";
    }
    if ($row['region'] == "2") {
      $sityfa = "عطاطرة";
    }
    if ($row['region'] == "3") {
      $sityfa = "الريمال";
    }
    if ($row['region'] == "4") {
      $sityfa = "جباليا";
    }
    if ($row['region'] == "5") {
      $sityfa = "المنطقة الصناعية";
    }
    if ($row['region'] == "6") {
      $sityfa = "مخيم الشاطئ";
    }
    if ($row['region'] == "7") {
      $sityfa = "وحش";
    }
    if ($row['region'] == "8") {
      $sityfa = "البريج";
    }
    if ($row['region'] == "9") {
      $sityfa = "مغازي";
    }
    if ($row['region'] == "10") {
      $sityfa = "الزوايدة";
    }
    if ($row['region'] == "11") {
      $sityfa = "دير البلح";
    }
    if ($row['region'] == "12") {
      $sityfa = "جرارة";
    }
    if ($row['region'] == "13") {
      $sityfa = "كف العبادة";
    }
    if ($row['region'] == "14") {
      $sityfa = "بني سهيلة";
    }
    if ($row['region'] == "15") {
      $sityfa = "عبسان الكبير";
    }
    if ($row['region'] == "16") {
      $sityfa = "خربة عدس";
    }
    if ($row['fname'] == "1") {$sityf = "شركة";}if ($row['fname'] == "2") {$sityf = "معرض";}if ($row['fname'] == "3") {$sityf = "متجر";}if ($row['fname'] == "4") {$sityf = "مصنع";}if ($row['fname'] == "5") {$sityf = "مؤسسة";}if ($row['fname'] == "6") {$sityf = "مركز";}if ($row['fname'] == "7") {$sityf = "سنتر";}if ($row['fname'] == "8") {$sityf = "محلات";}if ($row['fname'] == "9") {$sityf = "مجموعة";}if ($row['fname'] == "10") {$sityf = "جمعية";}if ($row['fname'] == "11") {$sityf = "صيدلية";}if ($row['fname'] == "12") {$sityf = "مختبر";}if ($row['fname'] == "13") {$sityf = "مخبز";}if ($row['fname'] == "14") {$sityf = "محطة";}if ($row['fname'] == "15") {$sityf = "مكتبة";}if ($row['fname'] == "16") {$sityf = "مركز";}if ($row['fname'] == "17") {$sityf = null;}
  } else {
    header('location:index.php ');
  }
  ?>
  <title>  <?php echo $sityf . " " . $row['name'] ?></title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content=",دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة,<?php echo $row['tayp'];?>,<?php echo $row['kay1'];?>,<?php echo $row['kay2'];?>,<?php echo $row['kay3'];?>,<?php echo $row['bio'];?>">
  <meta name="description" content="  <?php echo $sityf . " " . $row['name'] ?>dalilips.com ">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
</head>

<body>
  <?php
ob_start();

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

  <?php

	if(isset($_SESSION['users_dl'])){

    $ses = $_SESSION['users_dl'];

    $dye = date("Y-m-d");
    $sql6200 = "SELECT * FROM serch WHERE comp_id = '$cid' and user_id = '$ses' and prd = '0'";
    $query6200 = $conn->query($sql6200);
    $row6200 = $query6200->fetch_assoc();
 
      $cid = $_GET['cid'];
      $ses = $_SESSION['users_dl'];
      @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      @$id = substr(str_shuffle($set), 0, 15); 
      date_default_timezone_set("Asia/Gaza");
      $dtime =  date("Y-m-d h:i:s") ;
      $dye = date("Y-m-d");
      $sql23 = "INSERT INTO serch (serch_id, comp_id, user_id, day, time, prd) VALUES ('$id', '$cid', '$ses', '$dye', '$dtime', '0')";
      $conn->query($sql23);


    
      $userblaa = $row['num_sarc'];
      $newtgrtb = ($userblaa + 1);
      $updateuser = $conn->prepare("UPDATE comp SET num_sarc = '$newtgrtb' WHERE  comp_id = '$cid'");
      $updateuser->execute();
    
  }else{
    $ses = "dsadddd";
  }
  $cid = $_GET['cid'];
  $sql200 = "SELECT * FROM favert WHERE comp_id = '$cid' and user_id = '$ses'	";
  $query200 = $conn->query($sql200);
  $row200 = $query200->fetch_assoc();
  if (isset($_GET['see'])) {
    $save ="التعديل";
    $saveimg ="bx-edit";
  }
  else{
  if ($query200->num_rows == 1) {
    $save ="الغاء الحفظ";
    $saveimg ="bxs-bookmark";
  }
  else if ($query200->num_rows == 0) {
    $save ="حفظ";
    $saveimg ="bx-bookmark";
  }
  else{
    $save ="حفظ";
    $saveimg ="bx-bookmark";
  }
 }
  ?>


  <section id="home">
    <div style="margin-top: 65px;">
      <div class="columns the-header is-marginless">
        <div class="column header-text is-6 is-offset-3 is-12-mobile">
          <div class="header-background">
            
            <div style="height:180px;width:100%;">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
<!-- comp1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6523553314029856"
     data-ad-slot="7606760808"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
          </div>
        </div>
      </div>

      <!-- header ends -->
      <!-- test -->
      <div class="column is-12 has-text-centered sdas" style="  padding-right: 10px;">
        <span class="name1" style="padding-right:10px ;"><?php echo $sityf . " " . $row['name'] ?></span><img class="profile-picture" src="img/<?php echo $row['logo'] ?>" alt="profile-picture">
        <div class="goobe" ><?php echo $row['kay1'] . "-" . $row['tayp'] ?></div>
      </div>
      <!-- test -->
    </div>
    <div style="font-size: medium; float: right;padding-right: 10px; margin-top: 30px; "><?php echo $f . "-" . $sityfa . "-" . $row['street'] . "-" . $row['line'] ?></div>
    <center>
      <div class="bio" dir="rtl"><?php echo $row['bio'] ?></div>
    </center>
  </section>
  <br>
  <section id="links">
    <div style="float: right; padding-right: 10px; font-size: large;">:الكلمات الدالة</div>
<br>
    <center>
      <?php
      $typ = $row['tayp'];
    $sql32001 = "SELECT * FROM kays WHERE bio = '$typ'";
    $query32001 = $conn->query($sql32001);
    $row32001 = $query32001->fetch_assoc();

    $kay1 = $row['kay1'];
    $sql132002 = "SELECT * FROM kays WHERE bio = '$kay1'";
    $query132002 = $conn->query($sql132002);
    $row132002 = $query132002->fetch_assoc();

    $kay2 = $row['kay2'];
    $sql232003 = "SELECT * FROM kays WHERE bio = '$kay2'";
    $query232003 = $conn->query($sql232003);
    $row232003 = $query232003->fetch_assoc();

    $kay3 = $row['kay3'];
    $sql332004 = "SELECT * FROM kays WHERE bio = '$kay3'";
    $query332004 = $conn->query($sql332004);
    $row332004 = $query332004->fetch_assoc();
      ?>
      <div style="margin-top: 20px;" ><?php echo '<a  href="sector.php?sector='.$row32001['kay_id'].'"><span style="background-color:#E4F2BE;">' . $row['tayp'] . '</span style="background-color:#E4F2BE;"></a>-<a href="sector.php?sector='.$row132002['kay_id'].'"><span style="background-color:#E4F2BE;">' . $row['kay1'] . '</span></a>-<a href="sector.php?sector='.$row232003['kay_id'].'"> <span style="background-color:#E4F2BE;">' . $row['kay2'] . '</span> </a>-<a href="sector.php?sector='.$row332004['kay_id'].'"><span style="background-color:#E4F2BE;"> ' . $row['kay3'] . ' </span></a>'  ?>
      </div>
    </center>

    <hr>
    </section>
    <center>
      <h2>الروابط</h2>
    </center>
    <section id="call">
    <center>
      <?php
      if ($row['fasbook'] != null) {
        echo '<a href="' . $row['fasbook'] . '"><i class="bx bxl-facebook-circle nav__icon ba"></i></a>';
      }
      if ($row['instgram'] != null) {
        echo '<a href="' . $row['instgram'] . '"><i class="bx bxl-instagram nav__icon ba"></i></a>';
      }
      ?>
      <a href="mailto:<?php echo $row['email'] ?>"><i class="bx bxl-gmail nav__icon ba"></i></a>
      
        <?php
        if ($row['web_site'] != null) {
          echo '<a href="' . $row['web_site'] . '"><i class="bx bx-globe nav__icon ba"></i></a>';
        }
        ?>
        
    
     </center>
     <hr>
     
  
    


    <center>
      <h2>الأتصال</h2>
    </center>
    <div class="control-label visible-ie8 visible-ie9" style=" font-size: large;">
      <center><a href="tel:+97<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a> : <i class="fa fa-mobile"></i> رقم الهاتف</center></label>
      <br>
      </section>
      <section id="product">
        <div class="control-label visible-ie8 visible-ie9" style=" font-size: large;">
          <center><a href="tel:+97<?php echo $row['telephone']; ?>"><?php echo $row['telephone']; ?></a> : <i class="fa fa-phone"></i> رقم الهاتف الارضي</center></label>

          <br>
          <div class="control-label visible-ie8 visible-ie9" style=" font-size: large;">
            <center><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a> : <i class="fa fa-envelope-o"></i> الايمل</center></label>

            <hr>

          </div>
        </div>
        
          <center>
            <h2>المنتجات</h2>
          </center>
          <?php
          include 'includes/conn.php';
          $cid = $_GET['cid'];
          $sql100 = "SELECT * FROM prodect WHERE comp_id = '$cid'";
          $query100 = $conn->query($sql100);
          if($query100->num_rows > 0){
          while ($row100 = $query100->fetch_assoc()) {

            echo '
                        <center>
                         <div class="col-md-4 mb-3" style="width: 90%;">
                                <div class="card text-right">
                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h4 class="card-title"  >' . $row100['name'] . '</h4>
                                        <h6 class="card-subtitle mb-2 text-muted" >' . $sityf . " " . $row['name'] . '</h6>
                                        <p class="card-text">' . $row100['bio'] . '</p>
                                        <a href="prdct.php?cid='.$cid.'&prdct=' . $row100['prodect_id'] . '" class="btn btn-primary">السعر</a>
                                    </div>
                                </div>
                            </div>
                          </center>
                          ';
          }
        }
        else{
          echo '<center><h3>لا يوجد منتجات مرفوعة</h3></center><br>';
        }

          ?>
      </section>

        <section id="save">
          <div class="portlet light bordered" id="block-0" style="display: none;">
            <hr>
            <div class="portlet-title">
              <div class="caption">
                <i class="icon-fire"></i>
                <span class="caption-subject" style="font-size: x-large;">
                  <center> يجب ان تسجل الدخول للحفظ</center>
                </span>
              </div>
            </div>

            <div class="portlet-body">
              <div class="login">
                <div class="content">
                  <!-- BEGIN LOGIN FORM -->
                  <form class="login-form" action="" method="post" novalidate="novalidate">
                    



                    <div class="form-group">
                      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                      <label class="control-label visible-ie8 visible-ie9" style="float: right; padding-right: 10px; font-size: large;">: <i class="fa fa-envelope"></i> المستخدم/الإيميل</label>
                      <div class="input-icon">

                        <input class="   form-control form-control-solid   placeholder-no-fix " dir="rtl" style="text-align: right;" value="" type="text" autocomplete="off" placeholder="المستخدم/الإيميل" name="user_name" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label visible-ie8 visible-ie9" style="float: right;padding-right: 10px; font-size: large;">: <i class="fa fa-user"></i> كلمة المرور </label>
                      <div class="input-icon">

                        <input class=" form-control form-control-solid placeholder-no-fix" dir="rtl" style="text-align: right;" type="password" autocomplete="off" placeholder="كلمة المرور" name="password" />
                      </div>
                    </div>
                    <center>
                      <br>
                      <div class="d-grid gap-2" style="width: 95%;">

                        <button type="submit" class="btn  btn-success uppercase ">
                          دخول
                          <i class="fa fa-arrow-left fa-fw"></i>
                        </button>



                        <a href="" class="btn-default btn-block btn">
                          <i class="fa fa-question-circle"> </i>
                          نسيت كلمة المرور ؟
                        </a>


                        <a href="sing.php" class="btn-primary btn-block btn">
                          <i class="fa fa-user"> </i>
                          مستخدم جديد</a>

                      </div>
                    </center>

                  </form>
                </div>
              </div>

            </div>
            <hr>



          </div>
          <div style="width:100%;">
        </section>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
<!-- comp2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6523553314029856"
     data-ad-slot="3863080620"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
          <header class="header" id="header">
            <nav class="nav container">

              <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                  <li class="nav__item">
                  <?php
                      if (isset($_GET['see'])) {
                        echo'
                        <a href="myb.php?cid='.$cid.'" class="nav__link">
                            
                        <i class='."'".'bx '.$saveimg.' nav__icon'."'".'></i>
                        <span class="nav__name">'.$save.'</span>
                      
                        </a>
                        ';
                      }
                      else{
                          echo'
                          <form action="" method="post">
                          <a href="#save" class="nav__link">
                            <button type="submit" name="save" style="background-color:unset;border: unset;" class="nav__link">
                            
                              <i class='."'".'bx '.$saveimg.' nav__icon'."'".'></i>
                              <span class="nav__name">'.$save.'</span>
                            
                            </button>
                            </a>
                          </form>
                          ';
                      }
                    ?>

                  </li>

                  <li class="nav__item">
                    <a href="#product" class="nav__link">
                      <i class='bx bxs-package nav__icon'></i>
                      <span class="nav__name">المنتجات</span>
                    </a>
                  </li>

                  <li class="nav__item">
                    <a href="#call" class="nav__link">
                      <i class='bx bx-phone-call nav__icon'></i>
                      <span class="nav__name">الاتصال</span>
                    </a>
                  </li>

                  <li class="nav__item">
                    <a href="#links" class="nav__link">
                      <i class='bx bx-link nav__icon'></i>
                      <span class="nav__name">الروابط</span>
                    </a>
                  </li>

                  <li class="nav__item">
                    <a href="#home" class="nav__link active-link">
                      <i class='bx bx-home-alt nav__icon'></i>
                      <span class="nav__name">الرئيسية</span>
                    </a>
                  </li>
                </ul>
              </div>

            </nav>
          </header>

</body>

</html>

<?php

if (isset($_POST['save'])) {
  if (isset($_SESSION['users_dl'])){
    $ses = $_SESSION['users_dl'];
    $cid = $_GET['cid'];
    $sql200 = "SELECT * FROM favert WHERE comp_id = '$cid' and user_id = '$ses' and prd = 0	";
    $query200 = $conn->query($sql200);
    $row200 = $query200->fetch_assoc();
    if ($query200->num_rows > 0) {
      $sql7 = "DELETE FROM favert WHERE comp_id = '$cid' and user_id = '$ses'";
      $userblaa = $row['num_fav'];
      $newtgrtb = ($userblaa - 1);
      $updateuser = $conn->prepare("UPDATE comp SET num_fav = '$newtgrtb' WHERE  comp_id = '$cid' and num_fav > 0");
      $updateuser->execute();
      if ($conn->query($sql7)){
        header('location: comp.php?cid='.$cid.'');
      }

    } 
    if ($query200->num_rows < 1) {
      @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      @$id = substr(str_shuffle($set), 0, 15);
      $sql2 = "INSERT INTO favert (favert_id, comp_id, user_id, prd) VALUES ('$id', '$cid', '$ses', '0')";

      $userblaa = $row['num_fav'];
      $newtgrtb = ($userblaa + 1);
      $updateuser = $conn->prepare("UPDATE comp SET num_fav = '$newtgrtb' WHERE  comp_id = '$cid'");
      $updateuser->execute();
      if ($conn->query($sql2)){
        header('location: comp.php?cid='.$cid.'');
        
      }
    }
  } 

} 
ob_end_flush();

?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  const sections = document.querySelectorAll('section[id]')

  function scrollActive() {
    const scrollY = window.pageYOffset

    sections.forEach(current => {
      const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop - 50,
        sectionId = current.getAttribute('id')

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
      } else {
        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
      }
    })
  }
  window.addEventListener('scroll', scrollActive)


  /*=============== CHANGE BACKGROUND HEADER ===============*/
  function scrollHeader() {
    const header = document.getElementById('header')
    // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 80) header.classList.add('scroll-header');
    else header.classList.remove('scroll-header')
  }
  window.addEventListener('scroll', scrollHeader)
  
</script>
<style>
  .goobe {
    margin-top: -50px; 
  }
  @media screen and (max-width: 300px) {
  .name1 {
    font-size: 11px;
  }
  .goobe {
    font-size: 10px;
    margin-top: -35px; 
  }
  .profile-picture{
    border-radius: 50%;
    height: 80px;
    width: 80px;
  }
}
@media screen and (max-width: 365px) and (min-width: 301px){
  .name1 {
    font-size: 13px;
  }
  .goobe {
    font-size: 12px;
    margin-top: -45px; 

  }
  .profile-picture{
    border-radius: 50%;
    height: 100px;
    width: 100px;
  }
}
@media screen and (max-width: 400px) and (min-width: 366px){
  .name1 {
    font-size: 15px;
  }
  .goobe {
    font-size: 14px;
  }
}
a{  text-decoration: none;
  
}
</style>


