<?php 
include"config.inc.php";

$sql_bank = "UPDATE tbl_bank SET name_bank = '$_POST[name_bank]', account_number_bank = '$_POST[account_number_bank]', branch_bank = '$_POST[branch_bank]' WHERE tbl_bank.id_bank = $_POST[id_bank]"; 
$conn->query($sql_bank); 



            echo "<script type='text/javascript'>";
			echo  "alert('แก้ไขข้อมูลสำเร็จ');";
		    echo "window.location='bank_list.php'";
		    echo "</script>"; 
?>



