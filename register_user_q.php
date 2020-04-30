<?php 
include"config.inc.php";

$sql_user = "INSERT INTO tbl_user (id_user, name_user, last_user, username_user, password_user, age_user, sex_user, tel_user, email_user, level_user) VALUES (NULL, '$_POST[name_user]', '$_POST[last_user]', '$_POST[username_user]', '$_POST[password_user]', '$_POST[age_user]', '$_POST[sex_user]', '$_POST[tel_user]', '$_POST[email_user]', '$_POST[level_user]')"; 
$conn->query($sql_user); 



            echo "<script type='text/javascript'>";
			echo  "alert('สมัครสมาชิกสำเร็จ');";
		    echo "window.location='login.php'";
		    echo "</script>"; 
?>