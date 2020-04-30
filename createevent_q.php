<?php 
include"config.inc.php";

$sql_contact = "INSERT INTO tbl_contact (id_contact, name_contact, faculty_contact, tel_contact, email_contact) VALUES (NULL, '$_POST[name_contact]', '$_POST[faculty_contact]', '$_POST[tel_contact]', '$_POST[email_contact]')"; 
$conn->query($sql_contact); 



            echo "<script type='text/javascript'>";
			echo  "alert('บันทึกข้อมูลสำเร็จ');";
		    echo "window.location='index.php'";
		    echo "</script>"; 
?>