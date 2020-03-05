<?php require('partials/header.php'); ?>


<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	<div class="header">
		<h2>Register Staff</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>" required>
		</div>
        <div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<div class="input-group">
			<label>Role</label>
			<select name="role" id="role" required>
				<option value=""></option>
				<option value="supervisor">Supervisor</option>
                <option value="operator">Operator</option>
				<option value="labourer">Labourer</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password-1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password-2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>

<?php require('partials/footer.php'); ?>