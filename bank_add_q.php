<?php 
include"config.inc.php";

$sql_bank = "INSERT INTO tbl_bank (id_bank, id_running_event, name_bank, account_number_bank, branch_bank) VALUES (NULL, '$_POST[id_running_event]', '$_POST[name_bank]', '$_POST[account_number_bank]', '$_POST[branch_bank]')";
$conn->query($sql_bank); 



            echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มธนาคารสำเร็จ');";
		    echo "window.location='bank_list.php?id_running_event=$_POST[id_running_event]'";
		    echo "</script>"; 
?>
