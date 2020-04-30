<?php 

include"config.inc.php";


$i=0;
$id_event_type=@$_GET['id_event_type'];

$sql_register_run = "SELECT * FROM tbl_register_run  where  tbl_register_run.status_register_run=3  and tbl_register_run.id_event_type=$id_event_type "; 
$query_register_run = $conn->query($sql_register_run); 
while($result_register_run = $query_register_run->fetch_assoc())
{
$i++;

$id_register_run=$result_register_run['id_register_run'];

$sql_run = "UPDATE tbl_register_run SET number_register_run = '$i' WHERE tbl_register_run.id_register_run = $id_register_run"; 
$conn->query($sql_run); 



            
}

echo "<script type='text/javascript'>";
			echo  "alert('สำเร็จ');";  
		    echo "window.location='runevent_list_reg_user.php?id_event_type=$id_event_type'";
		    echo "</script>"; 


?>