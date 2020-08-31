<?php
	session_start();
	
	include('koneksi.php');

	$username = isset($_POST['username']) ? mysql_real_escape_string($_POST['username']) : '';
	$password = isset($_POST['password']) ? md5(mysql_real_escape_string($_POST['password'])) : '';

	if(!empty($username) && !empty($password))
	{
		$query  = "SELECT * FROM login WHERE username='$username' AND password='$password' AND level='1'";
		$result = mysql_query($query);
		$data   = mysql_fetch_array($result);

		//cek data ada tidak
		if(mysql_num_rows($result) > 0)
		{
			//daftarkan session
			$_SESSION['username'] = $data['username'];
			$_SESSION['password'] = $data['password'];
			$_SESSION['nama'] 	  = $data['nama'];
			$_SESSION['status']   = "Admin"; //admin
			$_SESSION['id_login'] = $data['id_login'];
			//redirect
			header('location: ../index');
		}
		else
		{
			header('location: ../login&error=wrong');
		}
	}
	else
	{
		//jika inputan kosong
		header('location: ../login&error=wrong');
	}
?>