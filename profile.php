<?php ob_start(); ?>
<?php session_start(); ?>
<?php include_once('parts/header.php'); ?>

<div class = 'container'>
	<div class ="row">
		<div class ="col-md-6">
			<h3>&nbsp;&nbsp;My Profile</h3>
		</div>
	</div>
    <div class ="row">
        <div class ="col-md-3">
            <?php include_once('parts/sidebar.php'); ?>
        </div>
        <div class ="col-md-1">
        </div>
        <div class ="col-md-8">

<?php

$user_details = userDetails($_SESSION['id']);

echo"<form method = 'post'>
					<div class='table-responsive'>
						<table class='table'>
							<thead>
								<tr>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><h4>Username: ".$user_details[1]."</h4></td>
								</tr>
									<td><h4>First Name: ".$user_details[3]."</h4></td>
								</tr>
									<td><h4>Last Name: ".$user_details[4]."</h4></td>
								</tr>
									<td><h4>Date of Birth: ".$user_details[5]."</h4></td>
								</tr>
									<td><h4>Gender: ".$user_details[6]."</h4></td>
								</tr>
									<td><h4>Mail: ".$user_details[7]."</h4></td>
								</tr>
									<td><h4>Phone: ".$user_details[8]."</h4></td>
								</tr>
							</tbody>
						</table>
						<input type = 'submit' value = 'Edit Profile' name = 'edit' class = 'button3'>
						<input type = 'submit' value = 'Delete Account' name = 'delete' class = 'button3'>
					</div>
</form>";


if(isset($_POST['edit'])){
	if($_SESSION['id'] == 1){
		echo "<h3>This is Guest Account. You do not have permission to Edit this account!</h3>";
	}
	else{
		header("Location: account_edit.php");
	}
}
elseif(isset($_POST['delete'])){
	if($_SESSION['id'] == 1){
		echo "<h3>This is Guest Account. You do not have permission to Delete this account!</h3>";
	}
	else{
		$delete = accountDelete($_SESSION['id']);
		if ($delete){
		header ('Location: index.php');
		}
	}
}
?>
</div>
	</div>
</div>
<?php include_once('parts/footer.php');
