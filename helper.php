<?php 

function set_message($msg)
{
	$_SESSION['msg'] = $msg;
}

function show_message()
{
	$msg = (isset($_SESSION['msg'])) ? $_SESSION['msg'] : NULL ;
	if ($msg != NULL) {
		echo "<p style='color:red;'>".$msg."</p>";
		unset($_SESSION['msg']);
	}
}

function login($rank)
{
	if (isset($_SESSION['login']['status'])) {
		if($_SESSION['login']['rank'] != $rank){
			set_message("Anda harus login!");
			header("location:login.php");
		}

	}else {
		set_message("Anda belum login!");
		header("location:login.php");
	}
}
?>