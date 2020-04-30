<?php 
include"config.inc.php";

$sql_event_type= "DELETE FROM tbl_event_type WHERE tbl_event_type.id_event_type = $_GET[id_event_type];";
$conn->query($sql_event_type); 
    echo "<script type='text/javascript'>";
	//echo  "alert('บันทึกข้อมูสำเร็จ');";
	echo "window.location='eventtype_list.php';";
	echo "</script>";

?>