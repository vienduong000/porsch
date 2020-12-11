<?php
// gọi file adminlogin
include '../classes/adminlogin.php';
?>
<?php
// gọi class adminlogin
$class = new adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
	$adminUser = $_POST['adminUser'];
	$adminPass = md5($_POST['adminPass']);

	$login_check = $class->longin_admin($adminUser, $adminPass); // hàm check User and Pass khi submit lên

}
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen" />
</head>

<body>
	<div class="container">

		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span><?php
					if (isset($login_check)) {
						echo $login_check;
					}
					?> </span>
			<div class="form-group">
				<label for="exampleInputEmail1">User name</label>
				<input type="text" class="form-control" placeholder="Username" required="" name="adminUser" />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" placeholder="Password" required="" name="adminPass" />
			</div>
			<div>
				<input type="submit" class="btn btn-primary" value="Log in" />
			</div>
		</form><!-- form -->
		<!-- content -->
	</div><!-- container -->
</body>

</html>