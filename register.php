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



<div class="form">
    <h3>Đăng ký tài khoản</h3>
    <?php
    if (isset($insertCustomer)) {
        echo $insertCustomer;
    }
    ?>
    <form action="login.php"  method="POST">
        <table>
            <tbody>
                <tr>
                    <td>
                        <div class="form">
                            <label for="exampleInputEmail1">Họ tên</label>
                            <input type="text"  name="name" placeholder="Nhập họ tên...">
                        </div>

                        <div class="form">
                            <label for="exampleInputEmail1">Tên công ty</label>
                            <input type="text"  name="city" placeholder="Nhập công ty...">
                        </div>

                        <div class="form">
                            <label for="exampleInputEmail1">Zipcode</label>
                            <input type="text"  name="zipcode" placeholder="Nhập Zipcode...">
                        </div>
                        <div class="form">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text"  name="email" placeholder="Nhập E-Mail...">
                        </div>
                        <div class="form">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text"  name="address" placeholder="Nhập địa chỉ...">
                        </div>
                        <div class="form">
                            <label for="exampleInputEmail1">Thành phố</label>
                            <select class="form-control"  id="country" name="country" onchange="change_country(this.value)">
                                <option value="hcm">TPHCM</option>
                                <option value="hn">Hà Nội</option>
                                <option value="dn">Đà Nẵng</option>
                                <option value="ct">Cần Thơ</option>


                            </select>
                        </div>

                        <div class="form">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input type="text" name="phone" placeholder="Nhập số điện thoại...">
                        </div>

                        <div class="form">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input type="password"  name="password" placeholder="Nhập Password...">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <input type="submit" name="submit" value="Tạo tài khoản" class="btn" style="width:150px">
        </div>

        <div class="clear"></div>
    </form>
    <a href="login.php"><input type="submit" name="submit" value="Đăng nhập" class="btn" style="width:150px"></a>
</div>