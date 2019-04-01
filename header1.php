<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Online Compiler</a>
		</div>
	  <div class="dropdown navbar-right" id="right">
    
		<a href="logout.php">LOGOUT</a>
    
    </div>
	</div>
</nav>