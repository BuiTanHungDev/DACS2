

<?php
	session_start();
	session_destroy();
	setcookie('username','', time() -1);
	setcookie('password','', time() -1);
	echo "<script> location.href='home.php';</script>";//alert('đăng xuất thành công!.');
?>
