<?php 
include"config.inc.php";

$sql_running_event = "DELETE FROM tbl_running_event WHERE tbl_running_event.id_running_event = $_GET[id_running_event];"; 
$conn->query($sql_running_event); 



            echo "<script type='text/javascript'>";
			//echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='runevent_list.php'";
		    echo "</script>"; 
