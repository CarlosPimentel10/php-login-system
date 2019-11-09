<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Registar-se</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
	<div class="input-group">
		<label>Usuário</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirmar password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Registar-se</button>
	</div>
	<p>
		Já está cadastrado? <a href="login.php">Faça Login</a>
	</p>
</form>
</body>
</html>