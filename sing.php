<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$markrt = "";
 ob_start();
 include 'includes/conn.php'; 
 ?>

<!DOCTYPE html>
<html  lang="ar">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stayl-sing_up.css">
  <link rel="stylesheet" href="css/footer-100.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<title> dalilips.com  </title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
    <link rel = "apple-touch-icon" href ="img/si.png">

<?php

if(isset($_POST['name'])){
  $Name = $_POST['name'] ;//المسمى
}
if(isset($_POST['lname'])){
  $lname = $_POST['lname'];//الاسم
}
  if(isset($_POST['email'])){ 
  $email = $_POST['email'];
}
  if(isset($_POST['sity'])){
  $sity = $_POST['sity'];
}
  if(isset($_POST['mohavza'])){
  $mohavza = $_POST['mohavza']
  ;}
  if(isset($_POST['strat'])){
  $strat = $_POST['strat'];
}
  if(isset($_POST['mordetls'])){
  $mordetls = $_POST['mordetls'];
}
  if(isset($_POST['gob'])){
  $gob = $_POST['gob'];
}
  if(isset($_POST['dale1'])){
  $dale1 = $_POST['dale1'];
}
  if(isset($_POST['dale2'])){
  $dale2 = $_POST['dale2'];
}
  if(isset($_POST['dale3'])){
  $dale3 = $_POST['dale3'];
}
  if(isset($_POST['bio'])){
  $bio = $_POST['bio'];
}
  if(isset($_FILES["file"]["name"])){
  $logo = $_FILES["file"]["name"];
}
  if(isset($_POST['pohon'])){
  $pohon = $_POST['pohon'];
}
  if(isset($_POST['fasb'])){
  $fasb = $_POST['fasb'];
}
  if(isset($_POST['insta'])){
  $insta = $_POST['insta'];
}
  if(isset($_POST['telpon'])){
  $telpon = $_POST['telpon'];
}
  if(isset($_POST['website'])){
  $wabsite = $_POST['website'];
}
  if(isset($_POST['password'])){
  $password = $_POST['password'];
}




if(isset($_POST['fnameper'])){
  $fnameper = $_POST['fnameper'] ;//المسمى
}
if(isset($_POST['lnameper'])){
  $lnameper = $_POST['lnameper'];//الاسم
}
  if(isset($_POST['emailper'])){ 
  $emailper = $_POST['emailper'];
}
if(isset($_POST['phoneper'])){
  $phoneper = $_POST['phoneper'];//الاسم
}
  if(isset($_POST['passwordper'])){ 
  $passwordper = $_POST['passwordper'];
}
?>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="img/logoard.png" width="150px" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
       <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php" style="float: right;">البحث <i class="fa fa-search" style="font-size: 20px;" aria-hidden="true"></i></a>
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
      <li class="nav-item active">
        <a class="nav-link" href="login.php" style="float: right;">التسجيل <i class="fa fa-sign-in" style="font-size: 20px;" aria-hidden="true"></i></a>
      </li>
      ';
    }
  ?>
</ul>


<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <li class="nav-item">
        <a class="nav-link" href="Privacy_policy.html" style="float: right;">سياسة الخصوصية <i class="fa fa-file-text" style="font-size: 20px;" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="tt.html" style="float: right;">شروط الأستخدام <i class="fa fa-file-text-o" style="font-size: 20px;" aria-hidden="true"></i></a>
    </li>
    </div>
  </nav>
<datalist id="brow">
<option value="صناعة">sads</option>
<option value="Firefox">
<option value="Chrome">
<option value="Opera">
<option value="Safari">
<?php
                        $sql300 = "SELECT * FROM kays" ;
                        $query300 = $conn->query($sql300);
                        
                      while ($row300 = $query300->fetch_assoc()) {
                        $row30sad = $row300['id'];
                        $row30ssad = $row300['bio'];
                        echo'
                        <option value="'.$row30ssad .'">
                        ';
                      }
?>
</datalist> 

  
  
  <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="img/logoard.png" style="width: 55%;"  alt=""/>
            <h3>اهلا</h3>
            <p>أنت على بعد ثواني من ان تضم للدليل التجاري الالكتروني الاحدث</p>
            <?php
            if($_GET['hl'] == "tgr"){
              echo '
            <video src="Sad Deep Insturmental Trap Remix_Journey__ft.AzeTrap.mp4" width="100%"  controls ></video>
            ';
            }
            ?>
            <input type="submit" name="" style="text-align: center;" value="لدي حساب مسبقاً"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified "  id="myTab" role="tablist">
                <li class="nav-item" >
                    <a class="nav-link <?php
            if($_GET['hl'] == "per"){
              echo "
               active
            ";
            }
            ?>"  id="home-tab" data-toggle="tab" href="?hl=per" role="tab" aria-controls="home" aria-selected="false">تسجيل كعميل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
            if($_GET['hl'] == "tgr"){
              echo "
               active
            ";
            }
            ?>" id="profile-tab" data-toggle="tab" href="?hl=tgr" role="tab" aria-controls="profile" aria-selected="true">نشاط تجاري</a>
                </li>
            </ul>
            <?php
            if(isset($_GET['hl'])){
            if($_GET['hl'] == "per"){
              
              echo'
              
            
              <form  method="post" enctype="multipart/form-data">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">اهلا بك, نحن سعداء بتسجيل معنا</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" required class="form-control" name="fnameper" placeholder="الاسم الاول *" value="'.@$fnameper.'" />
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" name="lnameper" placeholder="اسم العائلة *" value="'.@$lnameper.'" />
                            </div>

                            <div class="form-group gender" >
                              
                              <span style="float: right;">: الجنس</span>
                              <center>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1"> غير ذالك </label>
                                 <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0">
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2"> انثى </label>
                                 <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio3"> ذكر </label>
                                 <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="1">
                              </div>
                              </center>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group emailper">
                                <input type="email" class="form-control"name="emailper" required placeholder="البريد الالكتروني *" value="'.@$emailper.'" />
                            </div>
                            <div class="form-group">
                                <input type="number"  name="phoneper" class="form-control" placeholder="رقم الهاتف (اختياري)" value="'.@$phoneper.'" />
                            </div>

                            <div class="input-group mb-3">
                              <input class="form-control" type="password" id="password" name="passwordper" placeholder="كلمة المرور" value="'.@$passwordper.'">
                              <span class="input-group-text"><i class="fa fa-eye" id="togglePassword"  aria-hidden="true"></i></span>
                            </div>
                            <div>
                              <div style="float: right;text-align: right; ">التسجيل يؤكد أنك قد قرأت ووافقت على <a href="tt.html"> شروط الاستخدام</a> و <a href="Privacy_policy.html">سياسة الخصوصية</a></div>
                            <input type="submit" class="btnRegister" style="text-align: center;" name="registerper" value="التسجيل"/>
                        </div>
                    </div>
                </div>
              
              </form>';}
              else if($_GET['hl'] == "tgr"){
                
                  

                echo '
  
                <form  method="post" enctype="multipart/form-data">
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">اهلا بك ,انتا تسجل ك(شركة-متجر-الخ)</h3>
                    <div class="row register-form">
                    
                        <div class="col-md-6">
                          <div class="form-group name">
                            <select dir="rtl" class="form-control " name="name"  id="select-country" data-live-search="true" required>
                              <option class="hidden"  selected disabled>اختر المسمى</option>
                              <option value="1">شركة</option>
                              <option value="2">معرض</option>
                              <option value="3">متجر</option>
                              <option value="4">مصنع</option>
                              <option value="5">مؤسسة</option>
                              <option value="6">مركز</option>
                              <option value="7">سنتر</option>
                              <option value="8">محلات</option>
                              <option value="9">مجموعة</option>
                              <option value="10">جمعية</option>
                              <option value="11">صيدلية</option>
                              <option value="12">مختبر</option>
                              <option value="13">مخبز</option>
                              <option value="14">محطة</option>
                              <option value="15">مكتبة</option>
                              <option value="16">مركز</option>
                              <option value="17">غير ذالك</option>
                            </select>
                        </div>

                          <div class="form-group">
                          
                            <input dir="rtl" type="text" required class="form-control" name="lname" placeholder="الاسم بدون (شركة-متجر-الخ)  *" value="'.@$lname.'" />
                      
                          </div>
                          <div class="form-group sity">
                            <select dir="rtl" class="form-control"  name="sity"  data-live-search="true" required>
                              <option class="hidden"  selected disabled>المدينة</option>
                              <option value="1">غزة</option>
                              <option value="2">خان يونس</option>
                              <option value="3">رفح</option>
                              <option value="4">بيت لاهيا(شمال غزة)</option>
                              <option value="5">دير البلح</option>
                            </select>
                          </div>
                        <div class="form-group mohavza">
                          <select name="mohavza" dir="rtl"  class="form-control" id="" required>
                            <option class="hidden"  selected disabled>المحافظة</option>
                            <option value="1">بيت حانون</option>
                            <option value="2">عطاطرة</option>
                            <option value="3">الريمال</option>
                            <option value="4">جباليا</option>
                            <option value="5">المنطقة الصناعية(غزة)</option>
                            <option value="6">مخيم الشاطئ</option>
                            <option value="7">وحش</option>
                            <option value="8">البريج</option>
                            <option value="9">مغازي</option>
                            <option value="10">الزوايدة</option>
                            <option value="11">دير البلح</option>
                            <option value="12">جرارة</option>
                            <option value="13">كف العبادة</option>
                            <option value="14">بني سهيلة</option>
                            <option value="15">عبسان الكبير</option>
                            <option value="16">خربة عدس</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="text"dir="rtl" required class="form-control" name="strat" placeholder="الشارع" value="'.@$strat.'" />
                      </div>
                        <div class="form-group">
                          <input type="text" dir="rtl" name="mordetls" class="form-control" required placeholder="تفاصيل اضافية(مفترق -عمارة-الخ)" value="'.@$mordetls.'" />
                        </div>
                        
                        <div class="form-group">
                                               
                        <select id="select_page0" name="gob" style="text-align: right;" required class="form-control"> 
                          <option selected disabled >ماذا تقدم (الشركة-المتجر-الخ)</option>
                        ';

                        $sql2 = "SELECT * FROM  kays  ORDER BY num_use DESC";
                        $result = mysqli_query($conn, $sql2);
                        if(mysqli_num_rows($result)>0){
                          while ($rpw=mysqli_fetch_assoc($result)) {
                          echo'
                            <option value="'.$rpw['bio'].'">'.$rpw['bio'].'</option>
                            ';
                        }
                      }

                        echo'
                         </select>

                        </div>

                        <div class="form-group dale1">
                       
                        <select id="select_page2" name="dale1" style="text-align: right;" required class="form-control"> 
                          <option selected disabled >اختر الكلمة الدالة الاولة</option>
                          ';

                          $sql2 = "SELECT * FROM  kays  ORDER BY num_use DESC";
                          $result = mysqli_query($conn, $sql2);
                          if(mysqli_num_rows($result)>0){
                            while ($rpw=mysqli_fetch_assoc($result)) {
                            echo'
                              <option value="'.$rpw['bio'].'">'.$rpw['bio'].'</option>
                              ';
                          }
                        }
  
                          echo'
                         </select>
                        </div>
                        <div class="form-group dale2">
                        
                        <select id="select_page " name="dale2" style="text-align: right;" required placeholder="اختر الكلمة الدالة الثانية"class="form-control"> 
                          <option selected disabled >اختر الكلمة الدالة الثانية</option>
                          ';

                          $sql2 = "SELECT * FROM  kays  ORDER BY num_use DESC";
                          $result = mysqli_query($conn, $sql2);
                          if(mysqli_num_rows($result)>0){
                            while ($rpw=mysqli_fetch_assoc($result)) {
                            echo'
                              <option value="'.$rpw['bio'].'">'.$rpw['bio'].'</option>
                              ';
                          }
                        }
  
                          echo'
                         </select>

                              </div>

                              <div class="form-group dale3">
                              <select  id="select_page" name="dale3" style="text-align: right;" required placeholder="اختر الكلمة الدالة الثانية"class="form-control"> 
                              <option selected disabled >اختر الكلمة الدالة الثالثة</option>
                              ';

                              $sql2 = "SELECT * FROM  kays  ORDER BY num_use DESC";
                              $result = mysqli_query($conn, $sql2);
                              if(mysqli_num_rows($result)>0){
                                while ($rpw=mysqli_fetch_assoc($result)) {
                                echo'
                                  <option value="'.$rpw['bio'].'">'.$rpw['bio'].'</option>
                                  ';
                              }
                            }
      
                              echo'
                             </select>
                              </div>
                              <div class="form-group" dir="rtl" style="float: right; text-align: right;">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> الكلمات الدالة هي القطاعات التي يعرض نشاطك التجاري فيها عند البحث عنها, احسن اختيارها 
                              </div>
                        </div>






                        

                      <div class="col-md-6">

                          <div class="form-group">
                            <input type="text" dir="rtl" required class="form-control" name="bio" placeholder="وصف (الشركة-المتجر-الخ)" value="'.@$bio.'" />
  
                            </div>

                          

                               

                            <div class="input-group mb-3 logogg">
                              
                              <input class="form-control" required type="file" id="formFile" name="file" value="'.@$logo.'">
                              <label class="input-group-text" for="inputGroupFile01">الشعار(logo)</label>
                            </div>
                        
                      
                          <div class="form-group">
                              <input type="number"dir="rtl"   class="form-control" name="telpon" placeholder="الهاتف الارضي (اختياري)" value="'.@$telpon.'" />
                          </div>
                          <div class="form-group">
                              <input type="url" dir="rtl" class="form-control" name="insta" placeholder="رابط صفحة الانستقرام (اختياري) " value="'.@$insta.'" />
                          </div>
                          <div class="form-group">
                          <input type="email"dir="rtl" required class="form-control emal" name="email" placeholder="بريدك الالكتروني *" value="'.@$email.'" />

                              </div>





                          <div class="form-group">
                              <input type="number"required class="form-control" name="pohon" dir="rtl" placeholder="رقم هاتفك*" value="'.@$pohon.'"   />
                          </div>
                          <div class="form-group">
                          <input type="url" dir="rtl" name="fasb" class="form-control" placeholder="رابط صفحة الفيس بوك (اختياري)" value="'.@$fasb.'" />
                          </div>
                          
                          
                          <div class="form-group">
                              <input type="text"dir="rtl" name="website" class="form-control"  placeholder="الموقع الالكتروني (اختياري)" value="'.@$wabsite.'" />
                          </div>


                        <div class="input-group mb-3">
                          <input dir="rtl" type="password"required class="form-control" name="password" id="password2"  placeholder="كلمة المرور " value="'.@$password.'"   pattern="(?=.*[a-z]).{8,}"
                          title=" يجب ان تكون كلمة المرور مكونة من حرف صغير وحرف كبير (بالغة الانجليزية)على الاقل و8 حروف على الاقل" />
                          <span class="input-group-text"><i class="fa fa-eye" id="togglePassword2"  aria-hidden="true"></i></span>
                        </div>
            <div style="float: right;text-align: right; ">التسجيل يؤكد أنك قد قرأت ووافقت على <a href="tt.html"> شروط الاستخدام</a> و <a href="Privacy_policy.html">سياسة الخصوصية</a></div>
                        <input type="submit" class="btnRegister" style="text-align: center;" name="submit" value="تسجيل">
                        <div class="form-group" dir="rtl" style="float: right; text-align: right;">
                          <i class="fa fa-info-circle" aria-hidden="true"></i> يمكنك تغير جميع المعلومات في صفحة ادارة النشاط بعد تسجيلك 
                        </div>
                      </div>
                    
                  </div>
                </div>
            
                </form>
              ';}
              }
            
            else{
              header('location: ?hl=per');
            }
              ?>
              </div>
        </div>
    </div>

</div>



<?php 
if(isset($_POST['submit'])){
    
    include 'includes/conn.php';
    $email = $_POST['email'];
    

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query1 = $conn->query($sql);

      $sql22 = "SELECT * FROM comp WHERE email = '$email'";
      $query20 = $conn->query($sql22);
    
    if($query1->num_rows > 0){
          echo '<div class="emailwor" >
          عذرا  البريد الالكتروني مسجل مسبقا <a href="login.php">سجل الدخول </a>
        </div>';

        ?>
          <style>
            .emal{
              border: red solid 1px;
            }
          </style>


        <?php

      }
      
      else if($query20->num_rows > 0){
            echo '<div class="emailwor" >
            عذرا  البريد الالكتروني مسجل مسبقا <a href="login.php">سجل الدخول </a>
          </div>';
    
          ?>
          <style>
            .emal{
              border: red solid 1px;
            }
          </style>


        <?php
        }
      
        else{
          
          @$Name = $_POST['name'] ;//المسمى
          @$lname = $_POST['lname'];//الاسم
          @$email = $_POST['email'];
          @$sity = $_POST['sity'];
          @$mohavza = $_POST['mohavza'];
          @$strat = $_POST['strat'];
          @$mordetls = $_POST['mordetls'];
          @$gob = $_POST['gob'];
          @$dale1 = $_POST['dale1'];
          @$dale2 = $_POST['dale2'];
          @$dale3 = $_POST['dale3'];
          @$bio = $_POST['bio'];
          @$pohon = $_POST['pohon'];
          @$fasb = $_POST['fasb'];
          @$insta = $_POST['insta'];
          @$telpon = $_POST['telpon'];
          @$wabsite = $_POST['website'];
          @$password = $_POST['password'];
          @$securityCode = md5(date("h:i:s"));
          @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          @$id = substr(str_shuffle($set), 0, 15);

          if($Name == null){
              echo '<div class="emailwor" >
            تأكد من ملء جميع المعلومات المطلوبة
        </div>';

      ?>
      <style>
        .name{
          border: red solid 1px;
          
        }
      </style>
  <?php
  }
          if($sity == null){ ?><style>.sity{  border: red solid 1px;}</style><?php
      }
      if($mohavza == null){?><style>.mohavza{  border: red solid 1px;}</style><?php
  }
  if($dale1 == null){?><style>.dale1{  border: red solid 1px;}</style><?php
  }
  if($dale2 == null){?><style>.dale2{  border: red solid 1px;}</style><?php
  }
  if($dale3 == null){?><style>.dale3{  border: red solid 1px;}</style><?php
  }
    if(!empty($Name) && !empty($lname)  && !empty($email)  && !empty($sity)  && !empty($mohavza)  && !empty($strat)  && !empty($mordetls)  && !empty($gob)
      && !empty($dale1)  && !empty($dale2)  && !empty($dale3)  && !empty($bio)  && !empty($pohon) 
          && !empty($password) ){
          $statusMsg = '';

          // File upload path
          $targetDir = "img/";
          $fileName = basename($_FILES["file"]["name"]);
          $targetFilePath = $targetDir . $fileName;
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
          
          if(!empty($_FILES["file"]["name"])){
              // Allow certain file formats
              $allowTypes = array('jpg','png','jpeg','gif','pdf');
              if(in_array($fileType, $allowTypes)){
                  // Upload file to server
                  if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    $sql ="INSERT INTO `comp`(`comp_id`, `fname`, `tayp`, `email`, `password`, `authentication`, `name`, `num_sarc`, `num_fav`, `logo`, `bio`, `city`, `region`, `street`, `line`, `phone`, `telephone`, `fasbook`, `instgram`, `web_site`, `kay1`, `kay2`, `kay3`,`s_c`,`em_ac`)
                    VALUES ('$id','$Name','$gob','$email','$password','0','$lname','0','0','$fileName','$bio','$sity','$mohavza','$strat','$mordetls','$pohon','$telpon','$fasb','$insta','$wabsite','$dale1','$dale2','$dale3','$securityCode','0')";
                  }else{
                      $statusMsg = "Sorry, there was an error uploading your file.";
                  }
              }else{
                  $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
              }
          }else{
                          echo '<div class="emailwor" >
                          تأكد من ملء جميع المعلومات المطلوبة
                      </div>';

                    ?>
                    <style>
                      .logogg{
                        border: red solid 1px;
                        
                      }
                    </style>
                <?php
          }
          
          // Display status message
          echo $statusMsg;

          $sql3200 = "SELECT * FROM kays WHERE bio = '$gob'";
          $query3200 = $conn->query($sql3200);
          $row3200 = $query3200->fetch_assoc();
          $id = $row3200['kay_id'];

          $userblaa = $row3200['num_use'];
          $newtgrtb = ($userblaa + 1);
          $updateuser = $conn->prepare("UPDATE kays SET num_use = '$newtgrtb' WHERE  kay_id = '$id'");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          $sql13200 = "SELECT * FROM kays WHERE bio = '$dale1'";
          $query13200 = $conn->query($sql13200);
          $row13200 = $query13200->fetch_assoc();
          $id2 = $row13200['kay_id'];

          $userblaa2 = $row13200['num_use'];
          $newtgrtb2 = ($userblaa2 + 1);
          $updateuser2 = $conn->prepare("UPDATE kays SET num_use = '$newtgrtb2' WHERE  kay_id = '$id2'");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          $sql23200 = "SELECT * FROM kays WHERE bio = '$dale2'";
          $query23200 = $conn->query($sql23200);
          $row23200 = $query23200->fetch_assoc();
          $id3 = $row23200['kay_id'];

          $userblaa3 = $row23200['num_use'];
          $newtgrtb3 = ($userblaa3 + 1);
          $updateuser3 = $conn->prepare("UPDATE kays SET num_use = '$newtgrtb3' WHERE  kay_id = '$id3'");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          $sql33200 = "SELECT * FROM kays WHERE bio = '$dale3'";
          $query33200 = $conn->query($sql33200);
          $row33200 = $query33200->fetch_assoc();
          $id4 = $row33200['kay_id'];

          $userblaa4 = $row33200['num_use'];
          $newtgrtb4 = ($userblaa4 + 1);
          $updateuser4 = $conn->prepare("UPDATE kays SET num_use = '$newtgrtb4' WHERE  kay_id = '$id4'");

          if ($conn->query($sql) && $updateuser->execute() && $updateuser2->execute() && $updateuser3->execute() && $updateuser4->execute()) { 



            header('location: index.php');

          
            require_once "mail.php";
            $mail->addAddress($email); 
            
            $mail->Subject = "رمز تحقق من بريد الكتروني";
            $mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
              <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <!--[if !mso]><!-->
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!--<![endif]-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="format-detection" content="telephone=no">
                <meta name="x-apple-disable-message-reformatting">
                <title></title>
                <style type="text/css">
                  @media screen {
                    @font-face {
                      font-family: '."'".'Fira Sans'."'".';
                      font-style: normal;
                      font-weight: 300;
                      src: local('."''".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruRA.woff2'."'".') format('."'".'woff2'."'".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruQg.woff'."'".') format('."'".'woff'."'".');
                    }
                    @font-face {
                      font-family: '."'".'Fira Sans'."'".';
                      font-style: normal;
                      font-weight: 400;
                      src: local('."''".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5VflQ.woff2'."'".') format('."'".'woff2'."'".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5Vfkw.woff'."'".') format('."'".'woff'."'".');
                    }
                    @font-face {
                      font-family: '."'".'Fira Sans'."'".';
                      font-style: normal;
                      font-weight: 500;
                      src: local('."''".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuRA.woff2'."'".') format('."'".'woff2'."'".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuQg.woff'."'".') format('."'".'woff'."'".');
                    }
                    @font-face {
                      font-family: '."'".'Fira Sans'."'".';
                      font-style: normal;
                      font-weight: 700;
                      src: local('."''".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uRA.woff2'."'".') format('."'".'woff2'."'".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uQg.woff'."'".') format('."'".'woff'."'".');
                    }
                    @font-face {
                      font-family: '."'".'Fira Sans'."'".';
                      font-style: normal;
                      font-weight: 800;
                      src: local('."''".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uRA.woff2'."'".') format('."'".'woff2'."'".'),
                      url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uQg.woff'."'".') format('."'".'woff'."'".');
                    }
                  }
                </style>
                <style type="text/css">
                  #outlook a {
                    padding: 0;
                  }
              
                  .ReadMsgBody,
                  .ExternalClass {
                    width: 100%;
                  }
              
                  .ExternalClass,
                  .ExternalClass p,
                  .ExternalClass td,
                  .ExternalClass div,
                  .ExternalClass span,
                  .ExternalClass font {
                    line-height: 100%;
                  }
              
                  div[style*="margin: 14px 0"],
                  div[style*="margin: 16px 0"] {
                    margin: 0 !important;
                  }
              
                  table,
                  td {
                    mso-table-lspace: 0;
                    mso-table-rspace: 0;
                  }
              
                  table,
                  tr,
                  td {
                    border-collapse: collapse;
                  }
              
                  body,
                  td,
                  th,
                  p,
                  div,
                  li,
                  a,
                  span {
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    mso-line-height-rule: exactly;
                  }
              
                  img {
                    border: 0;
                    outline: none;
                    line-height: 100%;
                    text-decoration: none;
                    -ms-interpolation-mode: bicubic;
                  }
              
                  a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                  }
              
                  body {
                    margin: 0;
                    padding: 0;
                    width: 100% !important;
                    -webkit-font-smoothing: antialiased;
                  }
              
                  .pc-gmail-fix {
                    display: none;
                    display: none !important;
                  }
              
                  @media screen and (min-width: 621px) {
                    .pc-email-container {
                      width: 620px !important;
                    }
                  }
                </style>
                <style type="text/css">
                  @media screen and (max-width:620px) {
                    .pc-sm-p-20 {
                      padding: 20px !important
                    }
                    .pc-sm-p-21-10-14 {
                      padding: 21px 10px 14px !important
                    }
                    .pc-sm-h-20 {
                      height: 20px !important
                    }
                    .pc-sm-mw-100pc {
                      max-width: 100% !important
                    }
                    .pc-sm-p-35-30 {
                      padding: 35px 30px !important
                    }
                  }
                </style>
                <style type="text/css">
                  @media screen and (max-width:525px) {
                    .pc-xs-p-10 {
                      padding: 10px !important
                    }
                    .pc-xs-p-5-0 {
                      padding: 5px 0 !important
                    }
                    .pc-xs-br-disabled br {
                      display: none !important
                    }
                    .pc-xs-p-25-20 {
                      padding: 25px 20px !important
                    }
                    .pc-xs-fs-30 {
                      font-size: 30px !important
                    }
                    .pc-xs-lh-42 {
                      line-height: 42px !important
                    }
                  }
                </style>
                <!--[if mso]>
                  <style type="text/css">
                      .pc-fb-font {
                          font-family: Helvetica, Arial, sans-serif !important;
                      }
                  </style>
                  <![endif]-->
                <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
              </head>
              <body style="width: 100% !important; margin: 0; padding: 0; mso-line-height-rule: exactly; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4" class="">
                <div style="display: none !important; visibility: hidden; opacity: 0; overflow: hidden; mso-hide: all; height: 0; width: 0; max-height: 0; max-width: 0; font-size: 1px; line-height: 1px; color: #151515;">dalilips.com توثيق البريد الالكتروني</div>
                <div style="display: none !important; visibility: hidden; opacity: 0; overflow: hidden; mso-hide: all; height: 0; width: 0; max-height: 0; max-width: 0; font-size: 1px; line-height: 1px;">
                  ‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;
                </div>
                <table class="pc-email-body" width="100%" bgcolor="#f4f4f4" border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed;">
                  <tbody>
                    <tr>
                      <td class="pc-email-body-inner" align="center" valign="top">
                        <!--[if gte mso 9]>
                          <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                              <v:fill type="tile" src="" color="#f4f4f4"/>
                          </v:background>
                          <![endif]-->
                        <!--[if (gte mso 9)|(IE)]><table width="620" align="center" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td width="620" align="center" valign="top"><![endif]-->
                        <table class="pc-email-container" width="100%" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto; max-width: 620px;">
                          <tbody>
                            <tr>
                              <td align="left" valign="top" style="padding: 0 10px;">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                  <tbody>
                                    <tr>
                                      <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                                  <tbody>
                                    <tr>
                                      <td valign="top">
                                        <!-- BEGIN MODULE: Menu 1 -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                          <tbody>
                                            <tr>
                                              <td class="pc-sm-p-20 pc-xs-p-10" bgcolor="#ffffff" valign="top" style="padding: 25px 30px; background-color: #ffffff">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                  <tbody>
                                                    <tr>
                                                      <td align="center" valign="top" style="padding: 10px;">
                                                        <a href="http://dalilips.com" style="text-decoration: none;"><img src="img/" width="300" height="109" alt="" style="height: auto; max-width: 100%; border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff; font-size: 14px;"></a>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                          <tbody>
                                                            <tr>
                                                              <td valign="middle" style="padding: 10px;">
                                                                <a href="http://example.com" style="text-decoration: none;"><img src="images/facebook-white.png" width="15" height="15" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                              </td>
                                                              <td valign="middle" style="padding: 10px;">
                                                                <a href="http://example.com" style="text-decoration: none;"><img src="images/instagram-white.png" width="16" height="15" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!-- END MODULE: Menu 1 -->
                                        <!-- BEGIN MODULE: Call to Action 2 -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                          <tbody>
                                            <tr>
                                              <td class="pc-sm-p-35-30 pc-xs-p-25-20" style="padding: 40px; background-color: #6c63ff" valign="top" bgcolor="#6c63ff">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                  <tbody>
                                                    <tr>
                                                      <td class="pc-xs-fs-30 pc-xs-lh-42 pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 900; line-height: 46px; letter-spacing: -0.6px; color: #ffffff; text-align: center" valign="top">شكرا على تسجيلك معنا</td>
                                                    </tr>
                                                    <tr>
                                                      <td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                    </tr>
                                                  </tbody>
                                                  <tbody>
                                                    <tr>
                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 300; line-height: 28px; color: #ffffff; letter-spacing: -0.2px" valign="top" align="center">نحن سعداء بانضمامك لدليلنا التجاري ,نأمل بتوفير افضل تجربة<br>استخدام ممكنة</td>
                                                    </tr>
                                                    <tr>
                                                      <td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                    </tr>
                                                  </tbody>
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding: 5px 0;" valign="top" align="center">
                                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                          <tbody>
                                                            <tr>
                                                              <td style="padding: 13px 17px; border-radius: 8px; background-color: #1595E7;" bgcolor="#1595E7" valign="top" align="center">
                                                                <a href="http://dalilips.com/active.php?typ=com&code='.$securityCode.'" style="line-height: 1.5; text-decoration: none; word-break: break-word; font-weight: 500; display: block; font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff;">اضغط لتوثيق حسابك</a>
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                  <tbody>
                                                    <tr>
                                                      <td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 300; line-height: 28px; color: #f6f2f2; text-align: center" valign="top">ان لم تقوم بالتسجيل فقم بمراسلتنا لحذف الحساب باسرع وقت&nbsp;</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!-- END MODULE: Call to Action 2 -->
                                        <!-- BEGIN MODULE: Footer 1 -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                          <tbody>
                                            <tr>
                                              <td class="pc-sm-p-21-10-14 pc-xs-p-5-0" style="padding: 21px 20px 14px 20px; background-color: #1B1B1B" valign="top" bgcolor="#1B1B1B" role="presentation">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                  <tbody>
                                                    <tr>
                                                      <td style="font-size: 0;" valign="top">
                                                        <!--[if (gte mso 9)|(IE)]><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td width="280" valign="top"><![endif]-->
                                                        <div class="pc-sm-mw-100pc" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
                                                          <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                            <tbody>
                                                              <tr>
                                                                <td style="padding: 20px;" valign="top">
                                                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                                    <tbody>
                                                                      <tr>
                                                                        <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px; color: #ffffff;" valign="top">daliliPs</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="11" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                      </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20px; letter-spacing: -0.2px; color: #D8D8D8" valign="top">الدليل التجاري الألكتروني الاحدث في قطاع غزة</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td class="pc-sm-h-20" height="78" style="line-height: 1px; font-size: 1px">&nbsp;</td>
                                                                      </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td style="font-family: Arial, sans-serif; font-size: 19px;" valign="top">
                                                                          <a href="http://example.com" style="text-decoration: none;"><img src="images/facebook-dark-gray.png" width="20" height="20" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                                          <span>&nbsp;&nbsp;</span>
                                                                          <a href="http://example.com" style="text-decoration: none;"><img src="images/instagram-dark-gray.png" width="21" height="20" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                                        </td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                                </td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <!--[if (gte mso 9)|(IE)]></td><td width="280" valign="top"><![endif]-->
                                                        <div class="pc-sm-mw-100pc" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
                                                          <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                            <tbody>
                                                              <tr>
                                                                <td style="padding: 20px;" valign="top">
                                                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                                    <tbody>
                                                                      <tr>
                                                                        <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 19px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px; color: #ffffff" valign="top">تواصل معنا</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="11" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                      </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20px; letter-spacing: -0.2px; color: #D8D8D8" valign="top">فلسطين - قطاع غزة - غزة - شارع اللبابيدي</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td class="pc-sm-h-20" height="45" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                      </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px;" valign="top">
                                                                          <a href="tel:0566806906" style="text-decoration: none; color: #ffffff;">0566806906</a>
                                                                        </td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="9" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                      </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 500; line-height: 24px;" valign="top">
                                                                          <a href="mailto:info@dalilips.com" style="text-decoration: none; color: #1595E7; font-size: 16px">info@dalilips.com</a>
                                                                        </td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                                </td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!-- END MODULE: Footer 1 -->
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                  <tbody>
                                    <tr>
                                      <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- Fix for Gmail on iOS -->
                <div class="pc-gmail-fix" style="white-space: nowrap; font: 15px courier; line-height: 0;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
              </body>
            </html>';
            $mail->setFrom("business@dalilips.com", "daliliPs");
            $mail->send();
            
            
    
            
            
          }
          else{
              echo '<div class="alert alert-danger" role="alert">
              حدث خطا غير متوقع
            </div>';
          }


        }
        else{
          echo '<div class="emailwor" >
          تأكد من ملء جميع المعلومات المطلوبة
      </div>';

        }
      }
        


        
    
        }
      else{
        $Name = null ;//المسمى
        $lname = null;//الاسم
        $email = null;
        $sity = null;
        $mohavza = null;
        $strat = null;
        $mordetls = null;
        $gob = null;
        $dale1 = null;
        $dale2 = null;
        $dale3 = null;
        $bio = null;
        $logo = null;
        $pohon = null;
        $fasb = null;
        $insta = null;
        $telpon = null;
        $wabsite = null;
      }


if(isset($_POST['registerper'])){
  include 'includes/conn.php';
  $email = $_POST['emailper'];
  

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $query1 = $conn->query($sql);

    $sql22 = "SELECT * FROM comp WHERE email = '$email'";
    $query20 = $conn->query($sql22);
  
  if($query1->num_rows > 0){
        echo '<div class="emailwor" >
        عذرا  البريد الالكتروني مسجل مسبقا <a href="login.php">سجل الدخول </a>
      </div>';

      ?>
        <style>
          .emailper{
            border: red solid 1px;
          }
        </style>


      <?php

    }
    
    else if($query20->num_rows > 0){
          echo '<div class="emailwor" >
          عذرا  البريد الالكتروني مسجل مسبقا <a href="login.php">سجل الدخول </a>
        </div>';
  
        ?>
        <style>
          .emailper{
            border: red solid 1px;
          }
        </style>


      <?php
      }
    
      else{

        @$Name = $_POST['fnameper'] ;//المسمى
        @$lname = $_POST['lnameper'];//الاسم
        @$email = $_POST['emailper'];
        @$pohon = $_POST['phoneper'];
        @$password = $_POST['passwordper'];
        @$gender = $_POST['gender'];
        @$securityCode = md5(date("h:i:s"));
        @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        @$id = substr(str_shuffle($set), 0, 15);

        if($gender == null){?><style>.gender{  border: red solid 1px;}</style><?php
      }
        if(!empty($Name) && !empty($lname)  && !empty($email)  && !empty($password)  && !empty($gender)){

        if($_GET['hl'] == "per"){
          $sql = "INSERT INTO `users`(`user_id`, `email`, `password`, `phone`, `fname`, `lname`, `gender`, `s_c`, `em_ac`) VALUES ('$id','$email','$password ','$pohon ','$Name ','$lname','$gender','$securityCode','0')";
        }
        if ($conn->query($sql)) {

          header('location: index.php');

          
          require_once "mail.php";
          $mail->addAddress($email); 
          
          $mail->Subject = "رمز تحقق من بريد الكتروني";
          $mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
          <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
            <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <!--[if !mso]><!-->
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <!--<![endif]-->
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta name="format-detection" content="telephone=no">
              <meta name="x-apple-disable-message-reformatting">
              <title></title>
              <style type="text/css">
                @media screen {
                  @font-face {
                    font-family: '."'".'Fira Sans'."'".';
                    font-style: normal;
                    font-weight: 300;
                    src: local('."''".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruRA.woff2'."'".') format('."'".'woff2'."'".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruQg.woff'."'".') format('."'".'woff'."'".');
                  }
                  @font-face {
                    font-family: '."'".'Fira Sans'."'".';
                    font-style: normal;
                    font-weight: 400;
                    src: local('."''".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5VflQ.woff2'."'".') format('."'".'woff2'."'".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5Vfkw.woff'."'".') format('."'".'woff'."'".');
                  }
                  @font-face {
                    font-family: '."'".'Fira Sans'."'".';
                    font-style: normal;
                    font-weight: 500;
                    src: local('."''".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuRA.woff2'."'".') format('."'".'woff2'."'".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuQg.woff'."'".') format('."'".'woff'."'".');
                  }
                  @font-face {
                    font-family: '."'".'Fira Sans'."'".';
                    font-style: normal;
                    font-weight: 700;
                    src: local('."''".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uRA.woff2'."'".') format('."'".'woff2'."'".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uQg.woff'."'".') format('."'".'woff'."'".');
                  }
                  @font-face {
                    font-family: '."'".'Fira Sans'."'".';
                    font-style: normal;
                    font-weight: 800;
                    src: local('."''".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uRA.woff2'."'".') format('."'".'woff2'."'".'),
                    url('."'".'https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uQg.woff'."'".') format('."'".'woff'."'".');
                  }
                }
              </style>
              <style type="text/css">
                #outlook a {
                  padding: 0;
                }
            
                .ReadMsgBody,
                .ExternalClass {
                  width: 100%;
                }
            
                .ExternalClass,
                .ExternalClass p,
                .ExternalClass td,
                .ExternalClass div,
                .ExternalClass span,
                .ExternalClass font {
                  line-height: 100%;
                }
            
                div[style*="margin: 14px 0"],
                div[style*="margin: 16px 0"] {
                  margin: 0 !important;
                }
            
                table,
                td {
                  mso-table-lspace: 0;
                  mso-table-rspace: 0;
                }
            
                table,
                tr,
                td {
                  border-collapse: collapse;
                }
            
                body,
                td,
                th,
                p,
                div,
                li,
                a,
                span {
                  -webkit-text-size-adjust: 100%;
                  -ms-text-size-adjust: 100%;
                  mso-line-height-rule: exactly;
                }
            
                img {
                  border: 0;
                  outline: none;
                  line-height: 100%;
                  text-decoration: none;
                  -ms-interpolation-mode: bicubic;
                }
            
                a[x-apple-data-detectors] {
                  color: inherit !important;
                  text-decoration: none !important;
                }
            
                body {
                  margin: 0;
                  padding: 0;
                  width: 100% !important;
                  -webkit-font-smoothing: antialiased;
                }
            
                .pc-gmail-fix {
                  display: none;
                  display: none !important;
                }
            
                @media screen and (min-width: 621px) {
                  .pc-email-container {
                    width: 620px !important;
                  }
                }
              </style>
              <style type="text/css">
                @media screen and (max-width:620px) {
                  .pc-sm-p-20 {
                    padding: 20px !important
                  }
                  .pc-sm-p-21-10-14 {
                    padding: 21px 10px 14px !important
                  }
                  .pc-sm-h-20 {
                    height: 20px !important
                  }
                  .pc-sm-mw-100pc {
                    max-width: 100% !important
                  }
                  .pc-sm-p-35-30 {
                    padding: 35px 30px !important
                  }
                }
              </style>
              <style type="text/css">
                @media screen and (max-width:525px) {
                  .pc-xs-p-10 {
                    padding: 10px !important
                  }
                  .pc-xs-p-5-0 {
                    padding: 5px 0 !important
                  }
                  .pc-xs-br-disabled br {
                    display: none !important
                  }
                  .pc-xs-p-25-20 {
                    padding: 25px 20px !important
                  }
                  .pc-xs-fs-30 {
                    font-size: 30px !important
                  }
                  .pc-xs-lh-42 {
                    line-height: 42px !important
                  }
                }
              </style>
              <!--[if mso]>
                <style type="text/css">
                    .pc-fb-font {
                        font-family: Helvetica, Arial, sans-serif !important;
                    }
                </style>
                <![endif]-->
              <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
            </head>
            <body style="width: 100% !important; margin: 0; padding: 0; mso-line-height-rule: exactly; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4" class="">
              <div style="display: none !important; visibility: hidden; opacity: 0; overflow: hidden; mso-hide: all; height: 0; width: 0; max-height: 0; max-width: 0; font-size: 1px; line-height: 1px; color: #151515;">dalilips.com توثيق البريد الالكتروني</div>
              <div style="display: none !important; visibility: hidden; opacity: 0; overflow: hidden; mso-hide: all; height: 0; width: 0; max-height: 0; max-width: 0; font-size: 1px; line-height: 1px;">
                ‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;
              </div>
              <table class="pc-email-body" width="100%" bgcolor="#f4f4f4" border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed;">
                <tbody>
                  <tr>
                    <td class="pc-email-body-inner" align="center" valign="top">
                      <!--[if gte mso 9]>
                        <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                            <v:fill type="tile" src="" color="#f4f4f4"/>
                        </v:background>
                        <![endif]-->
                      <!--[if (gte mso 9)|(IE)]><table width="620" align="center" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td width="620" align="center" valign="top"><![endif]-->
                      <table class="pc-email-container" width="100%" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto; max-width: 620px;">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" style="padding: 0 10px;">
                              <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                <tbody>
                                  <tr>
                                    <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                  </tr>
                                </tbody>
                              </table>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                                <tbody>
                                  <tr>
                                    <td valign="top">
                                      <!-- BEGIN MODULE: Menu 1 -->
                                      <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                        <tbody>
                                          <tr>
                                            <td class="pc-sm-p-20 pc-xs-p-10" bgcolor="#ffffff" valign="top" style="padding: 25px 30px; background-color: #ffffff">
                                              <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                <tbody>
                                                  <tr>
                                                    <td align="center" valign="top" style="padding: 10px;">
                                                      <a href="http://dalilips.com" style="text-decoration: none;"><img src="img/" width="300" height="109" alt="" style="height: auto; max-width: 100%; border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff; font-size: 14px;"></a>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">
                                                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="middle" style="padding: 10px;">
                                                              <a href="http://example.com" style="text-decoration: none;"><img src="images/facebook-white.png" width="15" height="15" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                            </td>
                                                            <td valign="middle" style="padding: 10px;">
                                                              <a href="http://example.com" style="text-decoration: none;"><img src="images/instagram-white.png" width="16" height="15" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!-- END MODULE: Menu 1 -->
                                      <!-- BEGIN MODULE: Call to Action 2 -->
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                        <tbody>
                                          <tr>
                                            <td class="pc-sm-p-35-30 pc-xs-p-25-20" style="padding: 40px; background-color: #6c63ff" valign="top" bgcolor="#6c63ff">
                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                <tbody>
                                                  <tr>
                                                    <td class="pc-xs-fs-30 pc-xs-lh-42 pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 900; line-height: 46px; letter-spacing: -0.6px; color: #ffffff; text-align: center" valign="top">شكرا على تسجيلك معنا</td>
                                                  </tr>
                                                  <tr>
                                                    <td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                  </tr>
                                                </tbody>
                                                <tbody>
                                                  <tr>
                                                    <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 300; line-height: 28px; color: #ffffff; letter-spacing: -0.2px" valign="top" align="center">نحن سعداء بانضمامك لدليلنا التجاري ,نأمل بتوفير افضل تجربة<br>استخدام ممكنة</td>
                                                  </tr>
                                                  <tr>
                                                    <td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                  </tr>
                                                </tbody>
                                                <tbody>
                                                  <tr>
                                                    <td style="padding: 5px 0;" valign="top" align="center">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                        <tbody>
                                                          <tr>
                                                            <td style="padding: 13px 17px; border-radius: 8px; background-color: #1595E7;" bgcolor="#1595E7" valign="top" align="center">
                                                              <a href="http://dalilips.com/active.php?typ=per&code='.$securityCode.'" style="line-height: 1.5; text-decoration: none; word-break: break-word; font-weight: 500; display: block; font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff;">اضغط لتوثيق حسابك</a>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                                <tbody>
                                                  <tr>
                                                    <td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 300; line-height: 28px; color: #f6f2f2; text-align: center" valign="top">ان لم تقوم بالتسجيل فقم بمراسلتنا لحذف الحساب باسرع وقت&nbsp;</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!-- END MODULE: Call to Action 2 -->
                                      <!-- BEGIN MODULE: Footer 1 -->
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                        <tbody>
                                          <tr>
                                            <td class="pc-sm-p-21-10-14 pc-xs-p-5-0" style="padding: 21px 20px 14px 20px; background-color: #1B1B1B" valign="top" bgcolor="#1B1B1B" role="presentation">
                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                <tbody>
                                                  <tr>
                                                    <td style="font-size: 0;" valign="top">
                                                      <!--[if (gte mso 9)|(IE)]><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td width="280" valign="top"><![endif]-->
                                                      <div class="pc-sm-mw-100pc" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                          <tbody>
                                                            <tr>
                                                              <td style="padding: 20px;" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                                  <tbody>
                                                                    <tr>
                                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px; color: #ffffff;" valign="top">daliliPs</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td height="11" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                    </tr>
                                                                  </tbody>
                                                                  <tbody>
                                                                    <tr>
                                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20px; letter-spacing: -0.2px; color: #D8D8D8" valign="top">الدليل التجاري الألكتروني الاحدث في قطاع غزة</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td class="pc-sm-h-20" height="78" style="line-height: 1px; font-size: 1px">&nbsp;</td>
                                                                    </tr>
                                                                  </tbody>
                                                                  <tbody>
                                                                    <tr>
                                                                      <td style="font-family: Arial, sans-serif; font-size: 19px;" valign="top">
                                                                        <a href="http://example.com" style="text-decoration: none;"><img src="images/facebook-dark-gray.png" width="20" height="20" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                                        <span>&nbsp;&nbsp;</span>
                                                                        <a href="http://example.com" style="text-decoration: none;"><img src="images/instagram-dark-gray.png" width="21" height="20" alt="" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                                      </td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <!--[if (gte mso 9)|(IE)]></td><td width="280" valign="top"><![endif]-->
                                                      <div class="pc-sm-mw-100pc" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                          <tbody>
                                                            <tr>
                                                              <td style="padding: 20px;" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                                                  <tbody>
                                                                    <tr>
                                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 19px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px; color: #ffffff" valign="top">تواصل معنا</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td height="11" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                    </tr>
                                                                  </tbody>
                                                                  <tbody>
                                                                    <tr>
                                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20px; letter-spacing: -0.2px; color: #D8D8D8" valign="top">فلسطين - قطاع غزة - غزة - شارع اللبابيدي</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td class="pc-sm-h-20" height="45" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                    </tr>
                                                                  </tbody>
                                                                  <tbody>
                                                                    <tr>
                                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px;" valign="top">
                                                                        <a href="tel:0566806906" style="text-decoration: none; color: #ffffff;">0566806906</a>
                                                                      </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td height="9" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                                    </tr>
                                                                  </tbody>
                                                                  <tbody>
                                                                    <tr>
                                                                      <td class="pc-fb-font" style="font-family: '."'".'Fira Sans'."'".', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 500; line-height: 24px;" valign="top">
                                                                        <a href="mailto:info@dalilips.com" style="text-decoration: none; color: #1595E7; font-size: 16px">info@dalilips.com</a>
                                                                      </td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!-- END MODULE: Footer 1 -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                <tbody>
                                  <tr>
                                    <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- Fix for Gmail on iOS -->
              <div class="pc-gmail-fix" style="white-space: nowrap; font: 15px courier; line-height: 0;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            </body>
          </html>';
          $mail->setFrom("business@dalilips.com", "daliliPs");
          $mail->send();
          
  
          
          
        }
      }
      else{
        echo '<div class="emailwor" >
        تأكد من ملء جميع المعلومات المطلوبة
    </div>';

      }
    }

}
  
  ob_end_flush();
?>


  </div>


</body>
<script>
  $(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("select").select2();
});

const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
   
  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  // toggle the eye icon
  this.classList.toggle('fa-eye');
  this.classList.toggle('fa-eye-slash');
});
</script>
<script>
const togglePassword2 = document.querySelector("#togglePassword2");
const password2 = document.querySelector("#password2");

togglePassword2.addEventListener("click", function () {
   
  // toggle the type attribute
  const type2 = password2.getAttribute("type") === "password" ? "text" : "password";
  password2.setAttribute("type", type2);
  // toggle the eye icon
  this.classList.toggle('fa-eye');
  this.classList.toggle('fa-eye-slash');
});
</script>
</html>



