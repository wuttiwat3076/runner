<?PHP
include "config.inc.php"; // ไฟล์ตดิตอ่ฐานข้อมูล

$date_pro=date('Y-m-d');




 if($_FILES["slip_payment"]["name"] != "") // เช็คค่ารับไฟล์ ถ้ามีไฟล์ส่งมาให้ทำตามเงือนไขต่อไป
	{
$Str_file1 = explode(".",$_FILES['slip_payment']['name']);  //แยกชื่อไฟล์ด้วย "." ค่าที่ได้จะเป็น Array ครับ

$new_name1="slip_".date('Ymdhis').".".$Str_file1['1']; //เมื่อแยกนามสกุลไฟล์แล้ว ให้สร้างชื่อใหม่เป็น วันที่+เวลา 
	
if(move_uploaded_file($_FILES["slip_payment"]["tmp_name"],"blackoffice/slip_payment/".$new_name1)) //อัพไฟล์ขึ้น
	{	
	 $slip_payment=$new_name1;
    }
}else{
	 $slip_payment='';
	}
	


 $sql1= "INSERT INTO tbl_payment (id_payment, id_register_run, id_bank, amount_payment, date_payment, time_payment, slip_payment) VALUES (NULL, '$_POST[id_register_run]', '$_POST[id_bank]', '$_POST[amount_payment]', '$_POST[date_payment]', '$_POST[time_payment]', '$slip_payment')";
$conn->query($sql1); 


$sql2= "UPDATE tbl_register_run SET status_register_run = '2'  , size_register_run = '$_POST[size_register_run]' WHERE tbl_register_run.id_register_run =$_POST[id_register_run]";
$conn->query($sql2); 





            echo "<script type='text/javascript'>";
			echo  "alert('[บันทึกข้อมูสำเร็จ]');";
		    echo "window.location='register_run_list.php';";
			echo "</script>";
			
			
?>