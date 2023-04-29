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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <title> dalilips.com </title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
    <link rel = "apple-touch-icon" href = "img/si.png">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
</head>
<?php
ob_start();
include 'includes/session.php';
if ($_SESSION['type_dl'] != 2) {
    echo'
    <center><div style="font-size: larger; margin-top: 100px;">عذرا ليس لديك نشاط تجاري,<a href="sing.php?hl=tgr">انشئ واحداً</a></div></center>
    ';
}
if (isset($_SESSION['users_dl'])) {

    $cid = $_SESSION['users_dl'];
    $sql = "SELECT * FROM comp WHERE comp_id = '$cid'";
    $vquery = $conn->query($sql);
    $row = $vquery->fetch_assoc();

    /*
        $taas= $row['tayp'];
        $sql2 = "SELECT * FROM kays WHERE bio = '$taas'";
        $vquery2 = $conn->query($sql2);
        $row2 = $vquery2->fetch_assoc();

        $taas= $row['tayp'];
        $sql3 = "SELECT * FROM kays WHERE bio = '$taas'";
        $vquery3 = $conn->query($sql3);
        $row3 = $vquery3->fetch_assoc();


        $taas= $row['tayp'];
        $sql4 = "SELECT * FROM kays WHERE bio = '$taas'"; 
        $vquery4 = $conn->query($sql4);
        $row4 = $vquery4->fetch_assoc();


        $taas= $row['tayp'];
        $sql5 = "SELECT * FROM kays WHERE bio = '$taas'";
        $vquery5 = $conn->query($sql5);
        $row5 = $vquery5->fetch_assoc();
        */
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
}
?>

<body>
    <div id="unsee">
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
                            <a class="nav-link active" href="myb.php" style="float: right;">نشاطي التجاري <i class="fa fa-briefcase" style="font-size: 20px;" aria-hidden="true"></i></a>
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
    <div style="margin-top: 100px; font-size: large;">
        <center>اهلا بك ,في صفحة ادارة النشاط الخاص بك</center>
    </div>
    <br>
    <center>
        <div style="font-size: medium; width: 90%;">يمكنك تغير اغلب العناصر التي تراها من خلال الضغط عليها, ويمكنك اضافة
            عناصر جديد من خلال الضغط على ازرار الاضافة</div>
    </center>
    <section id="home">
        <div style="margin-top: 65px;">

            <div class="columns the-header is-marginless">
                <div class="column header-text is-6 is-offset-3 is-12-mobile">
                    <div class="header-background">
                        <img src="img/n.png" height="180px" width="100%" id="header-background-id" alt="background-img">
                    </div>
                </div>
            </div>

            <!-- header ends -->
            <!-- test -->
            <div class="column is-12 has-text-centered sdas" style="  padding-right: 10px;">

                <span style="font-size:17px; padding-right:10px ;"><?php echo '<button type="button"  data-bs-toggle="modal" data-bs-target="#name">' . $sityf  . " " . $row['name'] . '</button>' ?></span><button type="button" data-bs-toggle="modal" data-bs-target="#logo"><img class="profile-picture" src="https://unsplash.it/300/300/?random&pic=1(14 kB)" alt="profile-picture"></button>
                <div class="modal fade" id="logo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="name"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="" method="post">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل الاسم</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div style="float: right;">: مسمى نشاطك التجاري</div>
                                    <div class="form-group">
                                        <select dir="rtl" class="form-control" id="sel1" style="width: 100%;" name="fname" required>
                                            <option class="hidden" disabled>اختر المسمى</option>
                                            <option value="1" <?php if ($row['fname'] == "1") {
                                                                    echo "selected";
                                                                } ?>>
                                                شركة</option>
                                            <option value="2" <?php if ($row['fname'] == "2") {
                                                                    echo "selected";
                                                                } ?>>
                                                معرض</option>
                                            <option value="3" <?php if ($row['fname'] == "3") {
                                                                    echo "selected";
                                                                } ?>>
                                                متجر</option>
                                            <option value="4" <?php if ($row['fname'] == "4") {
                                                                    echo "selected";
                                                                } ?>>
                                                مصنع</option>
                                            <option value="5" <?php if ($row['fname'] == "5") {
                                                                    echo "selected";
                                                                } ?>>
                                                مؤسسة</option>
                                            <option value="6" <?php if ($row['fname'] == "6") {
                                                                    echo "selected";
                                                                } ?>>
                                                مركز</option>
                                            <option value="7" <?php if ($row['fname'] == "7") {
                                                                    echo "selected";
                                                                } ?>>
                                                سنتر</option>
                                            <option value="8" <?php if ($row['fname'] == "8") {
                                                                    echo "selected";
                                                                } ?>>
                                                محلات</option>
                                            <option value="9" <?php if ($row['fname'] == "9") {
                                                                    echo "selected";
                                                                } ?>>
                                                مجموعة</option>
                                            <option value="10" <?php if ($row['fname'] == "10") {
                                                                    echo "selected";
                                                                } ?>>
                                                جمعية</option>
                                            <option value="11" <?php if ($row['fname'] == "11") {
                                                                    echo "selected";
                                                                } ?>>
                                                صيدلية</option>
                                            <option value="12" <?php if ($row['fname'] == "12") {
                                                                    echo "selected";
                                                                } ?>>
                                                مختبر</option>
                                            <option value="13" <?php if ($row['fname'] == "13") {
                                                                    echo "selected";
                                                                } ?>>
                                                مخبز</option>
                                            <option value="14" <?php if ($row['fname'] == "14") {
                                                                    echo "selected";
                                                                } ?>>
                                                محطة</option>
                                            <option value="15" <?php if ($row['fname'] == "15") {
                                                                    echo "selected";
                                                                } ?>>
                                                مكتبة</option>
                                            <option value="16" <?php if ($row['fname'] == "16") {
                                                                    echo "selected";
                                                                } ?>>
                                                مركز</option>
                                            <option value="17" <?php if ($row['fname'] == "17") {
                                                                    echo "selected";
                                                                } ?>>
                                                غير ذالك</option>
                                        </select>
                                    </div>

                                    <div style="float: right;">: اسم نشاطك التجاري بدون المسمى</div>
                                    <div class="form-group">
                                        <input type="text" dir="rtl" class="form-control" name="lname" value="<?php echo $row['name'] ?>" style="float: right;">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                    <button type="submit" class="btn btn-primary" name="nameeee">حفظ التغيرات</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div style="font-size: 15px; margin: auto;  margin-top: -50px; "><button type="button" data-bs-toggle="modal" data-bs-target="#kays"><?php echo $row['kay1'] . "-" . $row['tayp'] ?></button></div>
            </div>
            <!-- test -->
        </div>
        <div style="font-size: medium; float: right;padding-right: 10px; margin-top: 30px; "><button type="button" data-bs-toggle="modal" data-bs-target="#adrs"><?php echo $f . "-" . $sityfa . "-" . $row['street'] . "-" . $row['line'] ?></button>
        </div>
        <div class="modal fade adrs" id="adrs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog ">
                <form action="" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تعديل الموقع</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div style="float: right;">: المدينة</div>
                            <div class="form-group">
                                <select dir="rtl" class="form-control" style="width: 100%; z-index: 99999999999px;" name="sity" required>
                                    <option class="hidden" disabled>: اختر المدينة </option>
                                    <option value="1" <?php if ($row['city'] == "1") {
                                                            echo "selected";
                                                        } ?>>
                                        غزة</option>
                                    <option value="2" <?php if ($row['city'] == "2") {
                                                            echo "selected";
                                                        } ?>>
                                        خان يونس</option>
                                    <option value="3" <?php if ($row['city'] == "3") {
                                                            echo "selected";
                                                        } ?>>
                                        رفح</option>
                                    <option value="4" <?php if ($row['city'] == "4") {
                                                            echo "selected";
                                                        } ?>>
                                        بيت لاهيا</option>
                                    <option value="5" <?php if ($row['city'] == "5") {
                                                            echo "selected";
                                                        } ?>>
                                        دير البلح</option>

                                </select>
                            </div>

                            <div style="float: right;">: المحافظة</div>
                            <div class="form-group">
                                <select dir="rtl" id="sel11" class="form-control" style="width: 100%; z-index: 99999999999px;" name="mohfzi" required>
                                    <option class="hidden" disabled>: اختر المحافظة </option>
                                    <option value="1" <?php if ($row['region'] == "1") {
                                                            echo "selected";
                                                        } ?>>
                                        بيت حانون</option>
                                    <option value="2" <?php if ($row['region'] == "2") {
                                                            echo "selected";
                                                        } ?>>
                                        عطاطرة</option>
                                    <option value="3" <?php if ($row['region'] == "3") {
                                                            echo "selected";
                                                        } ?>>
                                        الريمال</option>
                                    <option value="4" <?php if ($row['region'] == "4") {
                                                            echo "selected";
                                                        } ?>>
                                        جباليا</option>
                                    <option value="5" <?php if ($row['region'] == "5") {
                                                            echo "selected";
                                                        } ?>>
                                        المنطقة الصناعية</option>
                                    <option value="6" <?php if ($row['region'] == "6") {
                                                            echo "selected";
                                                        } ?>>
                                        مخيم الشاطئ</option>
                                    <option value="7" <?php if ($row['region'] == "7") {
                                                            echo "selected";
                                                        } ?>>
                                        وحش</option>
                                    <option value="8" <?php if ($row['region'] == "8") {
                                                            echo "selected";
                                                        } ?>>
                                        البريج</option>
                                    <option value="9" <?php if ($row['region'] == "9") {
                                                            echo "selected";
                                                        } ?>>
                                        مغازي</option>
                                    <option value="10" <?php if ($row['region'] == "10") {
                                                            echo "selected";
                                                        } ?>>
                                        الزوايدة</option>
                                    <option value="11" <?php if ($row['region'] == "11") {
                                                            echo "selected";
                                                        } ?>>
                                        دير البلح</option>
                                    <option value="12" <?php if ($row['region'] == "12") {
                                                            echo "selected";
                                                        } ?>>
                                        جرارة</option>
                                    <option value="13" <?php if ($row['region'] == "13") {
                                                            echo "selected";
                                                        } ?>>
                                        كف العبادة</option>
                                    <option value="14" <?php if ($row['region'] == "14") {
                                                            echo "selected";
                                                        } ?>>
                                        بني سهيلة</option>
                                    <option value="15" <?php if ($row['region'] == "15") {
                                                            echo "selected";
                                                        } ?>>
                                        عبسان الكبير</option>
                                    <option value="16" <?php if ($row['region'] == "16") {
                                                            echo "selected";
                                                        } ?>>
                                        خربة عدس</option>



                                </select>
                            </div>

                            <div style="float: right;">: الشارع</div>
                            <div class="form-group">
                                <input type="text" dir="rtl" name="strt" class="form-control" value="<?php echo $row['street'] ?>" style="float: right;">
                            </div>

                            <div style="float: right;">: تفاصيل اضافية(مفترق -عمارة-الخ)</div>
                            <div class="form-group">
                                <input type="text" dir="rtl" name="line" class="form-control" value="<?php echo $row['line'] ?>" style="float: right;">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="adssrsss">Save changes</button>
                </form>
            </div>
        </div>
        </div>
        </div>
        <center>
            <div class="bio" dir="rtl"><button type="button" data-bs-toggle="modal" data-bs-target="#bio"><?php echo $row['bio'] ?></button></div>
        </center>
        <div class="modal fade bio" id="bio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" method="post">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تعديل الوصف</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div style="float: right;">: الوصف</div>
                            <div class="form-group">

                                <textarea dir="rtl" class="form-control" name="biaoo" id="" cols="30" rows="10"><?php echo $row['bio'] ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="bio">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="links">
        <div style="float: right; padding-right: 10px; font-size: x-large;">:الكلمات الدالة</div>
        <br>
        <center>
            <div style="margin-top: 20px;"><button type="button" data-bs-toggle="modal" data-bs-target="#kays"><?php echo '<span style="background-color:#E4F2BE;">' . $row['tayp'] . '</span style="background-color:#E4F2BE;"> <span style="background-color:#E4F2BE;">' . $row['kay1'] . '</span> <span style="background-color:#E4F2BE;">' . $row['kay2'] . '</span> <span style="background-color:#E4F2BE;"> ' . $row['kay3'] . ' </span>'  ?>
                </button></div>
        </center>
        <div class="modal fade" id="kays"  aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" method="post">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تعديل الكلمات الدالة</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="float: right;">: ماذا يقدم نشاطك التجاري </div>
                            <br>
                            <div class="form-group" style="float: right; width: 100%;">
                                <select dir="rtl" id="sel223" class="form-control" name="job" style="width: 100%;" required id="select_page1" data-live-search="true">
                                    <option value="<?php echo $row['tayp'] ?>" selected><?php echo $row['tayp'] ?></option
                                    <?php
                                            $sql7100 = "SELECT * FROM kays ";
                                            $query7100 = $conn->query($sql7100);
                                            if ($query7100->num_rows > 0) {
                                                while ($row7100 = $query7100->fetch_assoc()) {
                                                    echo'
                                                    <option value="'.$row7100['bio'] .'">'.$row7100['bio'].'</option>
                                                    ';
                                                }
                                            }
                                    ?>
                                </select>
                            </div>

                            <div style="float: right;">: الكلمة الدالة الأولة </div>
                            <br>
                            <div class="form-group" style="float: right; width: 100%;">
                                <select dir="rtl" id="sel55" class="form-control" name="job" style="width: 100%;" required id="select_page15" data-live-search="true">
                                    <option value="<?php echo $row['kay1'] ?>" selected><?php echo $row['kay1'] ?></option>
                                    <?php
                                            $sql7100 = "SELECT * FROM kays ";
                                            $query7100 = $conn->query($sql7100);
                                            if ($query7100->num_rows > 0) {
                                                while ($row7100 = $query7100->fetch_assoc()) {
                                                    echo'
                                                    <option value="'.$row7100['bio'] .'" >'.$row7100['bio'].'</option>
                                                    ';
                                                }
                                            }
                                    ?>
                                </select>
                            </div>
                            <div style="float: right;">: الكلمة الدالة الثانية </div>
                            <br>
                            <div class="form-group" style="float: right; width: 100%;">
                                <select dir="rtl" id="selll6" class="form-control" name="job" style="width: 100%;" required id="select_page16" data-live-search="true">
                                    <option value="<?php echo $row['kay2'] ?>" selected><?php echo $row['kay2'] ?></option>
                                    <?php
                                            $sql7100 = "SELECT * FROM kays ";
                                            $query7100 = $conn->query($sql7100);
                                            if ($query7100->num_rows > 0) {
                                                while ($row7100 = $query7100->fetch_assoc()) {
                                                    echo'
                                                    <option value="'.$row7100['bio'] .'" >'.$row7100['bio'].'</option>
                                                    ';
                                                }
                                            }
                                    ?>
                                </select>
                            </div>

                            <div style="float: right;">: الكلمة الدالة الثالثة </div>
                            <br>
                            <div class="form-group" style="float: right; width: 100%;">
                                <select dir="rtl" id="sell67" class="form-control" name="job" style="width: 100%;" required id="select_page17" data-live-search="true">
                                    <option value="<?php echo $row['kay3'] ?>" selected><?php echo $row['kay3'] ?></option>
                                    <?php
                                            $sql7100 = "SELECT * FROM kays ";
                                            $query7100 = $conn->query($sql7100);
                                            if ($query7100->num_rows > 0) {
                                                while ($row7100 = $query7100->fetch_assoc()) {
                                                    echo'
                                                    <option value="'.$row7100['bio'] .'" >'.$row7100['bio'].'</option>
                                                    ';
                                                }
                                            }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary" name="kays">حفظ التغيرات</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <hr>
    </section>
    <center>
        <h2>الروابط</h2>
    </center>
    <section id="call">
        <center>
            <button type="button" data-bs-toggle="modal" data-bs-target="#lin">
                <?php
                if ($row['fasbook'] != null) {
                    echo '<i class="bx bxl-facebook-circle nav__icon ba"></i>';
                }
                if ($row['instgram'] != null) {
                    echo '<i class="bx bxl-instagram nav__icon ba"></i>';
                }
                ?>
                <i class="bx bxl-gmail nav__icon ba"></i></a>

                <?php
                if ($row['web_site'] != null) {
                    echo '<i class="bx bx-globe nav__icon ba"></i>';
                }
                ?>
            </button>

        </center>
        <div class="modal fade bio" id="lin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" method="post">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            if ($row['fasbook'] != null) {
                                echo '
                        <div style="float: right;">: رابط صفحة الفيس بوك</div>
                        <div class="form-group">
                            <input type="text" dir="rtl" name="fsa" class="form-control" value=" ' . $row['fasbook'] . '" style="float: right;">
                        </div>
                ';
                            }
                            if ($row['instgram'] != null) {
                                echo '
                        <div style="float: right;">: رابط صفحة الانستقرام</div>
                        <div class="form-group">
                            <input type="text" dir="rtl" name="indast" class="form-control" value="' . $row['instgram'] . '" style="float: right;">
                        </div>
                        ';
                            }
                            if ($row['web_site'] != null) {
                                echo '
                        <div style="float: right;">: رابط الموقع الالكتروني</div>
                        <div class="form-group">
                            <input type="text" dir="rtl" name="webs" class="form-control" value="' . $row['web_site'] . '" style="float: right;">
                        </div>
                    ';
                            }
                            ?>
                            <div style="float: right;">: الايميل الالكتروني</div>
                            <div class="form-group">
                                <input type="text" dir="rtl" name="emaiiil" class="form-control" value="<?php echo $row['email'] ?>" style="float: right;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="cals">Save changes</button>
                        </div>
                    </div>
            </form>
        </div>
        </div>
        <hr>





        <center>
            <h2>الأتصال</h2>

            <div class="control-label visible-ie8 visible-ie9" style=" font-size: large;">
                <button type="button" data-bs-toggle="modal" data-bs-target="#clls">
                    <center><?php echo $row['phone']; ?> : <i class="fa fa-mobile"></i> رقم الهاتف</center></label>
                    <br>

                    <section id="product">
                        <div class="control-label visible-ie8 visible-ie9" style=" font-size: large;">
                            <center><?php echo $row['telephone']; ?> : <i class="fa fa-phone"></i> رقم الهاتف الارضي
                            </center></label>

                            <br>
                            <div class="control-label visible-ie8 visible-ie9" style=" font-size: large;">
                                <center><?php echo $row['email']; ?>: <i class="fa fa-envelope-o"></i> الايمل</center>
                                </label>
                </button>
        </center>
        <hr>
        <div class="modal fade clls" id="clls" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" method="post">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div style="float: right;">: رقم الهاتف</div>
                            <div class="form-group">
                                <input type="number" dir="rtl"required name="pohne"  class="form-control" value="<?php echo $row['phone'] ;?>">
                            </div>
                            
                                <div style="float: right;">: رقم التيلفون</div>
                                <div class="form-group">
                                <input type="number" dir="rtl" required name="telpohne" class="form-control" value="<?php echo $row['telephone'] ;?>">
                                </div>

                                <div style="float: right;">: البريد الالكتروني</div>
                                <div class="form-group">
                                    <input type="text" dir="rtl" required name="eadfvmail" lang="en" class="form-control" value="<?php echo $row['email'] ;?>">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="moalme">Save changes</button>
                        </div>
                    </div>
            </form>
        </div>
        </div>
        </div>
        </div>

        <center>
            <h2>المنتجات</h2>
        </center>
        <center>
            <div style="font-size: medium;">اضغط على اي منتج لتعديله, ويمكنك اضافة منتج جديد</div>
        </center>
        <center><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addprodect">
                اضافة منتج جديد
            </button></center>
        <br>
        <div class="modal fade clls" id="addprodect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <form method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="float: right;">: اسم المنتج</div>
                            <div class="form-group">
                                <input type="text" dir="rtl" required name="prodectname" class="form-control">
                            </div>

                            <div style="float: right;">: صورة المنتج</div>
                            <div class="form-group">
                                <input type="file" name="file" class="form-control" required>
                            </div>

                            <div style="float: right;">: الوصف</div>
                            <div class="form-group">
                                <input type="text" dir="rtl" required name="prodectbio" class="form-control">
                            </div>

                            <div style="float: right;">: السعر بالشيكل (اختياري)</div>
                            <div class="form-group">
                                <input type="number" dir="rtl" required name="prodectpres" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary" name="addprodecta">اضافة المنتج</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <?php
        include 'includes/conn.php';
        $cid = $_SESSION['users_dl'];
        $sql100 = "SELECT * FROM prodect WHERE comp_id = '$cid'";
        $query100 = $conn->query($sql100);
        if ($query100->num_rows > 0) {
            while ($row100 = $query100->fetch_assoc()) {
                $dsa = $row100['prodect_id'];
                echo '
                <a href="editprd.php?pred='.$dsa.'">
              <section id="'.$dsa.'">
                <div style="border: 1px solid black;">
                        <center>
                         <div class="col-md-4 mb-3" style="width: 90%;">
                         
                                <div class="card text-right">
                                    <img class="img-fluid" alt="100%x280" src="img/' . $row100['photo'] . '">
                                    <div class="card-body">
                                        <h4 class="card-title"  >' . $row100['name'] . '</h4>
                                        <h6 class="card-subtitle mb-2 text-muted" >' . $sityf . " " . $row['name'] . '</h6>
                                        <p class="card-text">' . $row100['bio'] . '</p>
                                        <a  class="btn btn-primary">السعر</a>
                                    </div>
                                </div>
                                
                            </div>
                          </center>

                    </div>
                </section>
                </a>
                        <br><hr><br>
                          ';

            }
        } else {
            echo '<center><h3>لا يوجد منتجات مرفوعة</h3></center><br>';
        }

        ?>
    </section>




    <header class="header" id="header">
        <nav class="nav container">

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                    <li class="nav__item">
                        
                            <a href="test.php?cid=<?php echo $cid; ?>&see=yes" class="nav__link">
                                <button type="submit" id="see" style="background-color:unset;border: unset;" class="nav__link">

                                    <i class='bx bx-show-alt nav__icon'></i>
                                    <span class="nav__name">النتيجة</span>

                                </button>
                            </a>
                        
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
    </div>
</body>




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

        $(document).ready(function() {
        $("#sel1").select2({
          dropdownParent: $("#name")
        });
        });
      $(document).ready(function() {
        $("#sel11").select2({
          dropdownParent: $("#adrs")
        });
      });
      $(document).ready(function() {
        $("#sel223").select2({
          dropdownParent: $("#kays")
        });
        });
      $(document).ready(function() {
        $("#sel55").select2({
          dropdownParent: $("#kays")
        });
      });
      $(document).ready(function() {
        $("#selll6").select2({
          dropdownParent: $("#kays")
        });
        });
      $(document).ready(function() {
        $("#sell67").select2({
          dropdownParent: $("#kays")
        });
      });

    </script>

<?php
    $cid = $_SESSION['users_dl'];

    if (isset($_POST['nameeee'])) { //الاسم
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $updateuser1 = $conn->prepare("UPDATE comp SET fname = '$fname', name = '$lname' WHERE comp_id = '$cid'");

        if ($updateuser1->execute()) {
            header('location:myb.php ');
        }
    }
    if (isset($_POST['adssrsss'])) { //adssrsss
        $sity = $_POST['sity'];
        $mohfzi = $_POST['mohfzi'];
        $strt = $_POST['strt'];
        $line = $_POST['line'];

        $updateuser2 = $conn->prepare("UPDATE comp SET city = '$sity', region = '$mohfzi', street = '$strt', line = '$line' WHERE comp_id = '$cid'");

        if ($updateuser2->execute()) {
            header('location:myb.php ');
        }
    }
    if (isset($_POST['bio'])) { //bio
        $bio = $_POST['biaoo'];


        $updateuser3 = $conn->prepare("UPDATE comp SET bio = '$bio' WHERE comp_id = '$cid'");

        if ($updateuser3->execute()) {
            header('location:myb.php ');
        }
    }
    if (isset($_POST['kays'])) { //kays
        $job = $_POST['job'];
        $kay1 = $_POST['kay1'];
        $kay2 = $_POST['kay2'];
        $kay3 = $_POST['kay3'];

        $updateuser4 = $conn->prepare("UPDATE comp SET tayp = '$job', kay1 = '$kay1', kay2 = '$kay2', kay3 = '$kay3' WHERE comp_id = '$cid'");

        if ($updateuser4->execute()) {
            header('location:myb.php ');
        }
    }
    if (isset($_POST['cals'])) { //cals
        $fsa = $_POST['fsa'];
        $indast = $_POST['indast'];
        $webs = $_POST['webs'];
        $emaiiil = $_POST['emaiiil'];

        $updateuser5 = $conn->prepare("UPDATE comp SET fasbook = '$fsa', instgram = '$indast', web_site = '$webs', email = '$emaiiil' WHERE comp_id = '$cid'");

        if ($updateuser5->execute()) {
            header('location:myb.php ');
        }
    }
    if (isset($_POST['moalme'])) { //cals
        $pohne = $_POST['pohne'];
        $telpohne = $_POST['telpohne'];
        $eadfvmail = $_POST['eadfvmail'];

        $updateuser6 = $conn->prepare("UPDATE comp SET phone = '$pohne', telephone = '$telpohne', email = '$eadfvmail' WHERE comp_id = '$cid'");

        if ($updateuser6->execute()) {
            header('location:myb.php ');
        }
    }
    
    if (isset($_POST['addprodecta'])) {

        $prodectname = $_POST['prodectname'];
        $prodectbio = $_POST['prodectbio'];
        $prodectpres = $_POST['prodectpres'];
        @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        @$id = substr(str_shuffle($set), 0, 15);

        $targetDir = "img/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (!empty($_FILES["file"]["name"])) {
            // Allow certain file formats
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    $sql = "INSERT INTO `prodect`(`prodect_id`, `comp_id`, `name`, `bio`, `photo`, `prc`, `click_nu`, `favrt_nu`)
                     VALUES ('$id','$cid','$prodectname','$prodectbio','$fileName','$prodectpres','0','0')";
                    if ($conn->query($sql)) {
                        header('location: index.php');
                    }
                } else {
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            } else {
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        }
    }





    ob_end_flush();
    ?>

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
</style>
