<?php 
include"config.inc.php";

$sql_user = "UPDATE tbl_register_run SET status_register_run = '3' WHERE tbl_register_run.id_register_run = $_GET[id_register_run];
"; 
$conn->query($sql_user); 



            echo "<script type='text/javascript'>";
			echo  "alert('ยืนยันสำเร็จ');";  
		    echo "window.location='payment_list.php'";
		    echo "</script>"; 
?>