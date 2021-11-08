<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$company = $_POST['company'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, tel, company, password)
					VALUES ('$username', '$email', '$tel', '$company', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Bravo, Vous avez créer votre compte.')</script>";
				$username = "";
				$email = "";
				$company = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Ops !! Votre compte n'a pas été créé.')</script>";
			}
		} else {
			echo "<script>alert('Ce mail existe déjà.')</script>";
		}
		
	} else {
		echo "<script>alert('Les 2 mot de passe ne sont pas identiques.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Carte_visite</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 900;">Remplissez les champs </p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>

			<div class="input-group">
				<input type="text" placeholder="tel" name="tel" value="<?php echo $tel; ?>" >
			</div>

			<div class="input-group">
				<input type="text" placeholder="company" name="company" value="<?php echo $company; ?>" >
			</div>

			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">S'enregistrer</button>
			</div>
			<p class="login-register-text">Vous n'avez pas de compte? <a href="index.php">Se connecter</a>.</p>
		</form>
	</div>
</body>
</html>