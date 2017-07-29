<?php
if(isset($_SESSION['SUCCESS']) && $_SESSION['SUCCESS'] != ""){
	?>
		<div class="alert alert-success" role="alert">
			<?php echo $_SESSION['SUCCESS']; ?>
		</div>
	<?php
	} unset($_SESSION['SUCCESS']);

if(isset($_SESSION['ERROR']) && $_SESSION['ERROR'] != ""){
	?>
		<div class="alert alert-danger" role="alert">
			<?php echo $_SESSION['ERROR']; ?>
		</div>
	<?php
	}unset($_SESSION['ERROR']);
if(isset($_SESSION['WARNING']) && $_SESSION['WARNING'] != ""){
	?>
		<div class="alert alert-warning" role="alert">
			<?php echo $_SESSION['WARNING']; ?>
		</div>
	<?php
	}unset($_SESSION['WARNING']);
?>
