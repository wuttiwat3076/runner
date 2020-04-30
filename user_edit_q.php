<?php 
include"config.inc.php";

$sql_user = "UPDATE tbl_user SET name_user = '$_POST[name_user]', last_user = '$_POST[last_user]', username_user = '$_POST[username_user]', password_user = '$_POST[password_user]', age_user = '$_POST[age_user]', sex_user = '$_POST[sex_user]', tel_user = '$_POST[tel_user]', email_user = '$_POST[email_user]', level_user = '$_POST[level_user]' WHERE tbl_user.id_user = $_POST[id_user]"; 
$conn->query($sql_user); 



            echo "<script type='text/javascript'>";
			echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='index.php'";
		    echo "</script>"; 
?>