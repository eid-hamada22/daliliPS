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
</head>
<title> dalilips.com</title>
  <link rel="shortcut icon" href="img/si.png">
  <link rel = "apple-touch-icon" href = "img/si.png">

  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
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
  <div class="serc">
    <label class="control-label visible-ie8 visible-ie9" style="float: right; padding-right: 10px; font-size: large"><i
        class="fa fa-search"></i><button style="background: none; border: none; color:cornflowerblue;" type="button"  data-bs-toggle="modal"  data-bs-target="#exampleModal"> دليل البحث</button>/ هل تبحث عن شئ ما؟  </label>
    <center>
      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
        <button type="button" onclick="typ4()" class="btn btn-danger">
          قطاعات الاعمال
        </button>
        <button type="button" onclick="typ1()" class="btn btn-warning">
         نشاط تجاري (قطاع)
        </button>
        <button type="button" onclick="typ2()" class="btn btn-info">
          منتج
        </button>
        <button type="button" onclick="typ3()" class="btn btn-success">
          نشاط تجاري
        </button>
      </div>
    </center>

    <center>
      <select class="form-select" id="sity" onchange="val()" style="width: 50%; margin-top: 0.5em">
        <option value="0" selected>كل المدن/المحافظات</option>
        <option value="1">غزة</option>
        <option value="2">خان يونس</option>
        <option value="3">رفح</option>
        <option value="4">بيت لاهيا(شمال غزة)</option>
        <option value="5">دير البلح</option>
      </select>
      <br id="br" style="display: none;">
    </center>
    <div id="typ3">
      <div class="input-group شركة">
        <input type="text" class="form-control" autocomplete="false" id="search3"
          aria-label="Text input with dropdown button" dir="rtl" placeholder="ابحث عن نشاط تجاري عبر اسمه" />
        <div class="input-group-append">
          <select class="form-select dropdown-toggle" style="border: 1px solid #6c757d" onchange="sel1()" id="sel1">
            <option value="0" selected>الكل</option>
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
      </div>
    </div>

    <div style="display: none" id="typ1">
      <div class="input-group فئة نشاط تجاري">
        <input type="text" class="form-control" autocomplete="false" id="search1"
          aria-label="Text input with dropdown button" dir="rtl"  placeholder="ابحث عن نشاط تجاري عبر قطاعه" />
      </div>
    </div>
    <div style="display: none" id="typ2">
      <div class="input-group منتج">
        <input type="text" class="form-control" autocomplete="false" id="search2"
          aria-label="Text input with dropdown button" dir="rtl" placeholder="ابحث عن منتج عبر اسمه" />
      </div>
    </div>

    <div style="display: none" id="typ4">
     
      <div class="input-group قطاع">
        <input type="text" class="form-control" autocomplete="false" id="search4"
          aria-label="Text input with dropdown button" dir="rtl" placeholder="ابحث عن الشركات داخل قطاع اعمالها" />
      </div>
      <center><a href="sectorlist.php">او / انتقل الى قائمة القطاعات</a></center>
    </div>
  </div>
  <table class="table table-hover" style="width: 100%;">
    <tbody id="output1" style="width: 100%;"></tbody>
  </table>

  <table class="table table-hover" style="width: 100%;">
    <tbody id="output2" style="width: 100%;"></tbody>
    
  </table>

  <table class="table table-hover" style="width: 100%;">
    <tbody id="output3" style="width: 100%;"></tbody>
  </table>

  <table class="table table-hover" >
    <tbody id="output4"></tbody>
  </table>
<div style="width: 100%;">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
<!-- idx1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6523553314029856"
     data-ad-slot="8999007170"
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

  <script>
    var x = document.getElementById("dranks");
    const menuBtn = document.querySelector(".menu-btn");
    let menuOpen = false;
    menuBtn.addEventListener("click", () => {
      if (!menuOpen) {
        menuBtn.classList.add("open");
        menuOpen = true;
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "block";
        }
      } else {
        menuBtn.classList.remove("open");
        menuOpen = false;

        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "none";
        }
      }
    });
    $(".carousel").carousel();
  </script>
  <script src="serc.js"></script>

  <script type="text/javascript">
    var e = document.getElementById("sity").value;

    var x = document.getElementById("typ1");
    var z = document.getElementById("typ2");
    var n = document.getElementById("typ3");

    function val() {
      d = document.getElementById("sity").value;
      if (d != null) {
        if (document.getElementById("typ1").style.display != "none") {
          $(document).ready(function () {
            $.ajax({
              type: "POST",
              url: "search.php",
              data: {
                name: $("#search1").val(),
                typ: "kays",
                sity: d,
              },
              success: function (data) {
                $("#output1").html(data);
              },
            });
          });
        }
        if (document.getElementById("typ2").style.display != "none") {
          $(document).ready(function () {
            $.ajax({
              type: "POST",
              url: "search.php",
              data: {
                name: $("#search2").val(),
                typ: "prodect",
                sity: d,
              },
              success: function (data) {
                $("#output2").html(data);
              },
            });
          });
        }
        if (document.getElementById("typ3").style.display != "none") {
          $(document).ready(function () {
            s = document.getElementById("sel1").value;
            $.ajax({
              type: "POST",
              url: "search.php",
              data: {
                name: $("#search3").val(),
                typ: "comp",
                sity: d,
                ntyp: s,
              },
              success: function (data) {
                $("#output3").html(data);
              },
            });
          });
          function sel1() {
            s = document.getElementById("sel1").value;
            $(document).ready(function () {
              $.ajax({
                type: "POST",
                url: "search.php",
                data: {
                  name: $("#search3").val(),
                  typ: "comp",
                  sity: d,
                  ntyp: s,
                },
                success: function (data) {
                  $("#output3").html(data);
                },
              });
            });
          }
        }
        if (document.getElementById("typ4").style.display != "none") {
          $(document).ready(function () {
            $.ajax({
              type: "POST",
              url: "search.php",
              data: {
                name: $("#search4").val(),
                typ: "ky",
              },
              success: function (data) {
                $("#output4").html(data);
              },
            });
          });
        }
      }
    }
    function sel1() {
      s = document.getElementById("sel1").value;
      $(document).ready(function () {
        $.ajax({
          type: "POST",
          url: "search.php",
          data: {
            name: $("#search3").val(),
            typ: "comp",
            sity: d,
            ntyp: s,
          },
          success: function (data) {
            $("#output3").html(data);
          },
        });
      });
    }
    $(document).ready(function () {
      $("#search1").keypress(function () {
        $.ajax({
          type: "POST",
          url: "search.php",
          data: {
            name: $("#search1").val(),
            typ: "kays",
            sity: "0",
          },
          success: function (data) {
            $("#output1").html(data);
          },
        });
      });
    });

    $(document).ready(function () {
      $("#search2").keypress(function () {
        $.ajax({
          type: "POST",
          url: "search.php",
          data: {
            name: $("#search2").val(),
            typ: "prodect",
            sity: "0",
          },
          success: function (data) {
            $("#output2").html(data);
          },
        });
      });
    });

    $(document).ready(function () {
      $("#search3").keypress(function () {
        s = document.getElementById("sel1").value;
        $.ajax({
          type: "POST",
          url: "search.php",
          data: {
            name: $("#search3").val(),
            typ: "comp",
            sity: "0",
            ntyp: s,
          },
          success: function (data) {
            $("#output3").html(data);
          },
        });
      });
    });

    $(document).ready(function () {
      $("#search4").keypress(function () {
        $.ajax({
          type: "POST",
          url: "search.php",
          data: {
            name: $("#search4").val(),
            typ: "ky",
            sity: "0",
          },
          success: function (data) {
            $("#output4").html(data);
          },
        });
      });
    });
  </script>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">عرض توضيحي</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <ul dir="rtl" style="width: 100%;">
                  <li>لا تستخدم اي من ( أ - آ - إ ) واستخدم ( ا ) عادية .</li>
                  <li>تبدا النتائج بالتصفية بعد كتابة 3احرف على الاقل في حال لم تضغط (Enter) .</li>
                  <li>اضغط زر (Enter) عند انتهائك من البحث او حدوث اي تأخر .</li>
                  <li>لا تستخدم الحروف الانجليزية.</li>
                  <li>يمكنك تصفية النتائج اكثر عبر اختيار (مسمى) او (محافظة) او الاثنين معاً ثم اضغط على حقل الاسم واضغط (Enter).</li>
                  <li>في حصلت معك اي مشاكل لاتتردد بالاتصال بنا .</li>
                </ul>
            </div>
              <div class="carousel-item ">
                <img src="img/std1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/std2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/std3.png" class="d-block w-100" alt="...">
              </div>

            </div>
            <button class="carousel-control-prev" type="button"  data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal"  data-bs-target="#carouselExampleIndicators" data-bs-slide="next">السابق</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal"  data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">التالي</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>