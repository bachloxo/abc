<?php 
session_start();
	if(isset($_POST['number']))
	{
		if($_POST['number'] == NULL)
		{
			echo "Bạn chưa điền mã bảo mật";
		}
		else
		{
			if($_POST['number'] == $_SESSION['security_code'])
			{
				echo "Mã lệnh hợp lệ";
			}
			else
			{
				echo "Mã lệnh không hợp lệ";
			}
		}
	}

?>
