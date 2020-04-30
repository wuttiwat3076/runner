<?php 
include"config.inc.php";

$sql_bank = "DELETE FROM tbl_bank WHERE tbl_bank.id_bank = $_GET[id_bank];"; 
$conn->query($sql_bank); 



            echo "<script type='text/javascript'>";
			//echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='bank_list.php'";
		    echo "</script>"; 