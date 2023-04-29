
<?php

// Create connection
include 'includes/conn.php';
$name = $_POST['name'];
$typ = $_POST['typ'];
$s = $_POST['sity'];
if(isset($_POST['ntyp'])){
$dd = $_POST['ntyp'];
if($dd != 0){
	$ntyp = "and fname =". $_POST['ntyp'];
}else{$ntyp = null;}
}else{$ntyp = null;}
if($s != 0){
$sity = "and city =". $_POST['sity'];
$sity2 = "city =". $_POST['sity'];
}else{$sity = null;}
if ($typ == "kays"){
	$sql = "SELECT * FROM comp WHERE tayp LIKE '%$name%' or kay1 LIKE '%$name%' or kay2 LIKE '%$name%' or kay3 LIKE '%$name%' $sity";
}
	if ($typ == "comp"){
		$sql = "SELECT * FROM comp WHERE name LIKE '%$name%' $sity $ntyp";
		}
		if ($typ == "prodect"){
			$sql = "SELECT * FROM prodect WHERE bio LIKE '%$name%' $sity";
			}
			if ($typ == "ky"){
				$sql = "SELECT * FROM  kays WHERE bio LIKE '%$name%' $sity ORDER BY num_use DESC";
				}
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {

		if ($typ == "comp"){
			if($row['city'] =="1"){$sityf = "غزة";}if($row['city'] =="2"){$sityf = "خان يونس";}if($row['city'] =="3"){$sityf = "رفح";}if($row['city'] =="4"){$sityf = "بيت لاهيا";}if($row['city'] =="5"){$sityf = "دير البلح";}
			if($row['region'] =="1"){$sityfa = "بيت حانون";}if($row['region'] =="2"){$sityfa = "عطاطرة";}if($row['region'] =="3"){$sityfa = "الريمال";}if($row['region'] =="4"){$sityfa = "جباليا";}if($row['region'] =="5"){$sityfa = "المنطقة الصناعية";}if($row['region'] =="6"){$sityfa = "مخيم الشاطئ";}if($row['region'] =="7"){$sityfa = "وحش";}if($row['region'] =="8"){$sityfa = "البريج";}if($row['region'] =="9"){$sityfa = "مغازي";}if($row['region'] =="10"){$sityfa = "الزوايدة";}if($row['region'] =="11"){$sityfa = "دير البلح";}if($row['region'] =="12"){$sityfa = "جرارة";}if($row['region'] =="13"){$sityfa = "كف العبادة";}if($row['region'] =="14"){$sityfa = "بني سهيلة";}if($row['region'] =="15"){$sityfa = "عبسان الكبير";}if($row['region'] =="16"){$sityfa = "خربة عدس";}
			echo '	<tr onclick="window.location='."'".'comp.php?cid='.$row['comp_id'].''."'".';">
		<td style=" vertical-align:middle; text-align:center; ">'.$sityf.'-'.$sityfa.'</td>
		<td style=" vertical-align:middle; text-align:center; ">'.$row['tayp'].'</td>
		<td style=" vertical-align:middle; text-align:center; ">'.$row['name'].'</td>
		<td style=" vertical-align:middle; text-align:center; "><img src="'.$row['logo'].'"width="40px"></td>
		       </tr>';
		}
		if ($typ == "kays"){
			if($row['city'] =="1"){$sityf = "غزة";}if($row['city'] =="2"){$sityf = "خان يونس";}if($row['city'] =="3"){$sityf = "رفح";}if($row['city'] =="4"){$sityf = "بيت لاهيا";}if($row['city'] =="5"){$sityf = "دير البلح";}
			if($row['region'] =="1"){$sityfa = "بيت حانون";}if($row['region'] =="2"){$sityfa = "عطاطرة";}if($row['region'] =="3"){$sityfa = "الريمال";}if($row['region'] =="4"){$sityfa = "جباليا";}if($row['region'] =="5"){$sityfa = "المنطقة الصناعية";}if($row['region'] =="6"){$sityfa = "مخيم الشاطئ";}if($row['region'] =="7"){$sityfa = "وحش";}if($row['region'] =="8"){$sityfa = "البريج";}if($row['region'] =="9"){$sityfa = "مغازي";}if($row['region'] =="10"){$sityfa = "الزوايدة";}if($row['region'] =="11"){$sityfa = "دير البلح";}if($row['region'] =="12"){$sityfa = "جرارة";}if($row['region'] =="13"){$sityfa = "كف العبادة";}if($row['region'] =="14"){$sityfa = "بني سهيلة";}if($row['region'] =="15"){$sityfa = "عبسان الكبير";}if($row['region'] =="16"){$sityfa = "خربة عدس";}
			echo '
			<tr onclick="window.location='."'".'comp.php?cid='.$row['comp_id'].''."'".';">
			<td style=" vertical-align:middle; text-align:center; ">'.$sityf.'-'.$sityfa.'</td>
			<td style=" vertical-align:middle; text-align:center; ">'.$row['tayp'].'-'.$row['tayp'].'</td>
			<td style=" vertical-align:middle; text-align:center; ">'.$row['name'].'</td>
			<td style=" vertical-align:middle; text-align:center; "><img src="img/'.$row['logo'].'"width="40px"></td>
			</tr>';
			}
		if ($typ == "prodect"){
			$cid = $row['comp_id'];
			$sql2 = "SELECT * FROM comp WHERE comp_id = '$cid'";
			$vquery = $conn->query($sql2);
			$row2 = $vquery->fetch_assoc();
			
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
			<tr style="width: 100%;" onclick="window.location='."'".'prdct.php?cid='.$row['comp_id'].'&prdct='.$row['prodect_id'].''."'".';">
			<td style=" vertical-align:middle; text-align:center; ">'.$sityf . " " . $row2['name'].'</td>
			<td style=" vertical-align:middle; text-align:center; ">'.$row['name'].'</td>
			<td style=" vertical-align:middle; text-align:center; "><img src="img/'.$row['photo'].'"width="40px"></td>
			</tr>';
		}
		if ($typ == "ky"){
			echo '	
			<tr style="width: max-content;" onclick="window.location='."'".'sector.php?sector='.$row['kay_id'].''."'".';"  > 
			<td style=" vertical-align:middle; text-align:center; width: 60%;">'.$row['num_use'].' : عدد الشركات المدرجة</td>
			<td style="  text-align:center; width: 40%;">'.$row['bio'].'</td>
			</tr>';
		}
	}
}
else{
	echo '<tr><td style="float: right;">لا يوجد نتائج مطابقة</td></tr>';
}

?>
