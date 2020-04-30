<?php 
include"config.inc.php";


 
if($_FILES["photo_running_event"]["name"] != "") // เช็คค่ารับไฟล์ ถ้ามีไฟล์ส่งมาให้ทำตามเงือนไขต่อไป
{
$Str_file1 = explode(".",$_FILES['photo_running_event']['name']);  //แยกชื่อไฟล์ด้วย "." ค่าที่ได้จะเป็น Array 

$new_name1="photo_running_event_".date('Ymd_Hsi').".".$Str_file1['1']; //เมื่อแยกนามสกุลไฟล์แล้ว ให้สร้างชื่อใหม่เป็น วันที่+เวลา 

if(move_uploaded_file($_FILES["photo_running_event"]["tmp_name"],"photo_running_event/".$new_name1)) //อัพไฟล์ขึ้น
{	
 $photo_running_event=$new_name1;
// @unlink("doc/$_POST[photo_running_events]");
}
}else{
// $photo_running_event=$_POST['photo_running_events'];

$photo_running_event=$_POST['photo_running_event'];
}

 


  if($_FILES["shirtphoto_running_event"]["name"] != "") // เช็คค่ารับไฟล์ ถ้ามีไฟล์ส่งมาให้ทำตามเงือนไขต่อไป
{
$Str_file1 = explode(".",$_FILES['shirtphoto_running_event']['name']);  //แยกชื่อไฟล์ด้วย "." ค่าที่ได้จะเป็น Array 

$new_name1="shirtphoto_running_event_".date('Ymd_Hsi').".".$Str_file1['1']; //เมื่อแยกนามสกุลไฟล์แล้ว ให้สร้างชื่อใหม่เป็น วันที่+เวลา 

if(move_uploaded_file($_FILES["shirtphoto_running_event"]["tmp_name"],"shirtphoto_running_event/".$new_name1)) //อัพไฟล์ขึ้น
{	
 $shirtphoto_running_event=$new_name1;
// @unlink("doc/$_POST[shirtphoto_running_events]");
}
}else{
// $shirtphoto_running_event=$_POST['shirtphoto_running_events'];
$shirtphoto_running_event=$_POST['shirtphoto_running_event'];
}


if($_FILES["map_running_event"]["name"] != "") // เช็คค่ารับไฟล์ ถ้ามีไฟล์ส่งมาให้ทำตามเงือนไขต่อไป
{
$Str_file1 = explode(".",$_FILES['map_running_event']['name']);  //แยกชื่อไฟล์ด้วย "." ค่าที่ได้จะเป็น Array 

$new_name1="map_running_event_".date('Ymd_Hsi').".".$Str_file1['1']; //เมื่อแยกนามสกุลไฟล์แล้ว ให้สร้างชื่อใหม่เป็น วันที่+เวลา 

if(move_uploaded_file($_FILES["map_running_event"]["tmp_name"],"map_running_event/".$new_name1)) //อัพไฟล์ขึ้น
{	
 $map_running_event=$new_name1;
// @unlink("doc/$_POST[map_running_events]");
}
}else{
// $map_running_event=$_POST['map_running_events'];
$map_running_event=$_POST['map_running_event'];
} 

$sql_runevent = "UPDATE tbl_running_event SET name_running_event = '$_POST[name_running_event]', date_running_event = '$_POST[date_running_event]', photo_running_event = '$photo_running_event', shirtphoto_running_event = '$shirtphoto_running_event', map_running_event = '$map_running_event', detail_running_event = '$_POST[detail_running_event]' WHERE tbl_running_event.id_running_event = $_POST[id_running_event]"; 
$conn->query($sql_runevent); 



            echo "<script type='text/javascript'>";
			echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='runevent_list.php'";
		    echo "</script>"; 
?>