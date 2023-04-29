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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6523553314029856"
     crossorigin="anonymous"></script>
    <title> dalilips.com الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها</title>
  <link rel="shortcut icon" href="img/si.png">
  <meta name="keywords" content="دليل, دليل تجاري, دليل قطاع غزة,نشاط تجاري ,شركة,معرض,منتج,دليل الكتروني و شركات غزة ,شركات قطاع غزة">
  <meta name="description" content="الدليل التجاري الالكتروني الاحدث في قطاع غزة ,تعرف على الاف الشركات ومنتجاتها وقطاعات اعمالها ">
  <meta name="copyright" content="daliliPs.com" />
  <meta name="robots" content="index, follow" />
</head>
<body>
<?php
ob_start();

        include 'includes/session.php';
        include 'includes/conn.php';
        $cid = $_SESSION['users_dl'];
        $prd = $_GET['pred'];
        $sql100 = "SELECT * FROM prodect WHERE comp_id = '$cid' and prodect_id = '$prd'";
        $query100 = $conn->query($sql100);
        $row100 = $query100->fetch_assoc();
echo'
<section id="'.$row100['prodect_id'].'">
<div class="clls" style="margin-top: 30%;">

                            <div class="modal-content">
                            <form  method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">' . $row100['name'] . 'تعديل المنتج المسمى ب</h5>
                                    <a href="myb.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                                </div>
                                
                                <div class="modal-body">
                                    <div style="float: right;">: اسم المنتج</div>
                                    <div class="form-group">
                                        <input type="text" dir="rtl"required name="prodectnameedit"  class="form-control" value="' . $row100['name'] . '">
                                    </div>
                                    
                                    <div style="float: right;">: صورة المنتج</div>
                                    <div class="form-group">
                                        <input type="file" name="fileedit"  class="form-control"  value="' . $row100['photo'] . '">
                                        </div>
                                        <div style="float: right; color: crimson;">. ان لم تكن تريد تغير صورة المنتج فلا تضغط على الحقل </div>
                                    
                                        <div style="float: right;">: الوصف</div>
                                        <div class="form-group">
                                            <input type="text" dir="rtl"required name="prodectbioedit" class="form-control" value="' . $row100['bio'] . '">
                                        </div>
        
                                        <div style="float: right;">: السعر بالشيكل (اختياري)</div>
                                        <div class="form-group">
                                            <input type="number" dir="rtl" required name="prodectpresedit" lang="en" class="form-control" value="' . $row100['prc'] . '">
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <a href="myb.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الرجوع</button></a>
                                    <button type="submit" class="btn btn-primary" name="editprodecta">تعديل المنتج</button>
                                </div>
                            </form>
                            </div>
                    
                
</div>
</section>
</body>
</html>
';
if (isset($_POST['editprodecta'])) {
    include 'includes/conn.php';
    $cid = $_SESSION['users_dl'];
    $prodectidedit = $_GET['pred'];

                            
                            $prodectnameedit = $_POST['prodectnameedit'];
                            $prodectbioedit = $_POST['prodectbioedit'];
                            $prodectpresedit = $_POST['prodectpresedit'];
                            @$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            @$id = substr(str_shuffle($set), 0, 15);
                            
                            $targetDir = "img/";
                            $fileName = basename($_FILES["fileedit"]["name"]);
                            $targetFilePath = $targetDir . $fileName;
                            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    
                            if (!empty($_FILES["file"]["name"])) {
                                // Allow certain file formats
                                $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                                if (in_array($fileType, $allowTypes)) {
                                    // Upload file to server
                                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                                        $updateuser7 = $conn->prepare("UPDATE prodect SET name = '$prodectnameedit', bio = '$prodectbioedit', prc = '$prodectpresedit', photo = '$fileName' WHERE comp_id = '$cid' and prodect_id = '$pred'");
                                        if ($updateuser7->execute()) {
                                            header('location:myb.php#'.$prodectidedit.'');
                                        }
                                    } else {
                                        $statusMsg = "Sorry, there was an error uploading your file.";
                                    }
                                } else {
                                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                                }
                            }
                            else{
                                if(!empty($prodectnameedit) && !empty($prodectbioedit) && !empty($prodectpresedit)){
                                    $updateuser7 = $conn->prepare("UPDATE prodect SET name = '$prodectnameedit', bio = '$prodectbioedit', prc = '$prodectpresedit' WHERE comp_id = '$cid' and prodect_id = '$prodectidedit'");
                                    if ($updateuser7->execute()) {
                                        header('location:myb.php#'.$prodectidedit.'');

                                    }
                                }
                            }
                        }
    ob_end_flush();

?>