<?php 
include 'inc/header.php';
	// include 'inc/slider.php';
?>
<?php include 'classes/brand.php';  ?>
    <?php
    // gọi class category
    $brand = new brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $insertBrand = $brand->insert_comment($phone, $email); // hàm check catName khi submit lên
    }
    ?>
<div class="main">
        <img src="admin/uploads/porsche-svg.svg">
        <div class="infor">
        <?php
          if (isset($insertBrand)) {
            echo $insertBrand;
          }
          ?>
            <form method="post" action="#">
                <label>Email: </label>
                <input type="text" id="email" name="email" required />
                <label>Phone Number: </label>
                <input type="text" id="email" name="phone" required />
                <button class="submit">> Sent Information</button>
            </form>
        </div>
    </div>