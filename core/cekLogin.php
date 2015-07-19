<?php
//cek jika session ada, maka redirect ke page login
if(empty($_SESSION['username'])){
		header('location:login.php');
}
?>