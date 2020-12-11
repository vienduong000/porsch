<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>
<?php
$login_check = Session::get('customer_login');
if ($login_check) {
	header('Location:order.php');
}
?>

<?php
// gọi class category

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	// LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
	$insertCustomer = $cs->insert_customer($_POST); // hàm check catName khi submit lên
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
	// LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
	$login_Customer = $cs->login_customer($_POST); // hàm check catName khi submit lên
}
?>

<div class="main">
        <img src="admin/uploads/porsche-svg.svg">
        <div class="infor">
			<p class="welcome"> Nice to see you</p>
			<?php
			if (isset($login_Customer)) {
				echo $login_Customer;
			}
			?>
            <!-- <div class="form">
                <label for="username">Porsche ID (email address)</label>
                <input type="text" id="username" name="username" required />
            </div> -->
            <div>
            <form action="" method="POST">
                
                <div class="form">
                    <label for="email">Email address</label>
                    <input type="text" id="email" name="email" required />
                </div>
                <div class="form">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>
                <div class="buttons">
					<div><input type="submit"  name="login"  value="Đăng nhập"></div>
				</div>
            </form>
            <div class="register">
                <a href="register.php">Register now,</a> to discover the digital world of Porsche.
            </div>
        </div>
    </div>
