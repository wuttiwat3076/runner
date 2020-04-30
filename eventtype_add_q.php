<?php 
include"config.inc.php";

$sql_event_type = "INSERT INTO tbl_event_type (id_event_type, id_running_event, id_type_running, number_received, entry_fee) VALUES (NULL, '$_POST[id_running_event]', '$_POST[id_type_running]', '$_POST[number_received]', '$_POST[entry_fee]')";
$conn->query($sql_event_type); 



            echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มประเภทรายการวิ่งสำเร็จ');";
		    echo "window.location='eventtype_list.php?id_running_event=$_POST[id_running_event]'";
		    echo "</script>"; 
?>
