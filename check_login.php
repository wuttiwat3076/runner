<?PHP
	session_start();
    include "config.inc.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$username_user=@$_POST['username_user'];
$password_user=@$_POST['password_user'];

   $sql = "select * from tbl_user  where  username_user ='$username_user' and password_user ='$password_user'"; 
  $objQuery=$conn ->query($sql);
  $objResult = $objQuery->fetch_assoc();
		
		
	if(!$objResult){
	
	?>
<script language="javascript">
alert("Username หรือ Password ไม่ถูกต้อง...!!");
</script>
<meta http-equiv='refresh'content='0;url=index.php'>
<?php

	}
	else
	{
	    $_SESSION["id_user"] = $objResult["id_user"];
		$_SESSION["name_user"] = $objResult["name_user"];
		$_SESSION["last_user"] = $objResult["last_user"];
		$_SESSION["username_user"] = $objResult["username_user"];
		$_SESSION["level_user"] = $objResult["level_user"];
			
		session_write_close();
			
			
			
			
$level_user = $objResult['level_user'];

switch ($level_user) {
    case "1":
        echo "<meta http-equiv='refresh'content='0;url=index.php'>";
        break;
    case "2":
        echo "<meta http-equiv='refresh'content='0;url=blackoffice/'>";
        break;
    case "3":
        echo "<meta http-equiv='refresh'content='0;url=blackoffice/'>";
        break;
    default:
        echo "<meta http-equiv='refresh'content='0;url=index.php'>";
}
		
		
		
		}
?>




