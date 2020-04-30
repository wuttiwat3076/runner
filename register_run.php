<?php  session_start();
include"config.inc.php";

  if(isset($_SESSION['id_user'])){
 
$id_user=$_SESSION['id_user'];
$id_event_type=$_GET['id_event_type'];

$sql_register_run = "INSERT INTO tbl_register_run (id_register_run, id_user, id_event_type, number_register_run, status_register_run) VALUES (NULL, '$id_user', '$id_event_type', '', '1')"; 
$conn->query($sql_register_run); 



            echo "<script type='text/javascript'>";
			echo  "alert('สำเร็จ');";
		    echo "window.location='register_run_list.php'";
		    echo "</script>"; 
			
			
	}else{
	       echo "<script type='text/javascript'>";
			echo  "alert('เข้าสู่ระบบก่อนสมัคร');";
		    echo "window.location='login.php'";
		    echo "</script>"; 
	}		
?>