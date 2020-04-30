<?php 
include"config.inc.php";

$sql_type_running= "INSERT INTO tbl_type_running (id_type_running, name_type_running, distance_type_running) VALUES (NULL, '$_POST[name_type_running]', '$_POST[distance_type_running]')"; 
$conn->query($sql_type_running); 



            echo "<script type='text/javascript'>";
			echo  "alert('บันทึกข้อมูลสำเร็จ');";
		    echo "window.location='typerun_list.php'";
		    echo "</script>"; 

?>