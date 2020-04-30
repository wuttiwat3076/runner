<?php 
include"config.inc.php";

$sql_user = "DELETE FROM tbl_user WHERE tbl_user.id_user = $_GET[id_user];"; 
$conn->query($sql_user); 



            echo "<script type='text/javascript'>";
			//echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='user_list.php'";
		    echo "</script>"; 
?>
