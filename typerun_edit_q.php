<?php 
include"config.inc.php";

$sql_type_running = "UPDATE tbl_type_running SET name_type_running = '$_POST[name_type_running]', distance_type_running = '$_POST[distance_type_running]' WHERE tbl_type_running.id_type_running = $_POST[id_type_running]";
$conn->query($sql_type_running); 



            echo "<script type='text/javascript'>";
			echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='typerun_list.php'";
		    echo "</script>"; 
?>
