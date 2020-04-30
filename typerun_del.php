<?php 
include"config.inc.php";

echo $sql_type_running = "DELETE FROM tbl_type_running WHERE tbl_type_running.id_type_running = $_GET[id_type_running];"; 
$conn->query($sql_type_running); 



            echo "<script type='text/javascript'>";
			//echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		   // echo "window.location='typerun_list.php'";
		    echo "</script>"; 
?>
