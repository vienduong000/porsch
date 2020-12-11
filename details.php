<?php 
include 'inc/header.php';
	// include 'inc/slider.php';
?>
<?php 
if(!isset($_GET['proid']) || $_GET['proid'] == NULL){
	echo "<script> window.location = '404.php' </script>";

}else {
        $id = $_GET['proid']; // Lấy productid trên host
    }
	$customer_id = Session::get('customer_id');
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
		$productid = $_POST['productid'];
        $insertCompare = $product -> insertCompare($productid, $customer_id); // hàm check catName khi submit lên
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    	$productid = $_POST['productid'];
        $insertWishlist = $product -> insertWishlist($productid, $customer_id); // hàm check catName khi submit lên
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    	$quantity = $_POST['quantity'];
        $insertCart = $ct -> add_to_cart($id, $quantity); // hàm check catName khi submit lên
    }  
    ?>
    <div class="logo">
        <img src="../img/taycan/porsche-svg.svg">
    </div>
    <div class="background-video">
        <video src="admin/uploads/video.mp4" autoplay muted playsinline preload="none"></video>
    </div>
    <div class="absolute">
        <div>   
            <p class="text-718">  718 Models S </p>
        </div>
        <div class="flex">
            <div class="left">
                <div class="left-child">
                    <p style="font-size:24px">MSRP $ 77,200</p>
                    <p>price</p>
                </div>
                <div class="left-child">
                    <p style="font-size:24px">300(hp)</p>
                    <p>Max power(hp)</p>
                </div>
            </div>
            <div class="right">
                <p style="font-size:24px">5.1s</p>
                <p>Acceleration from 0 - 100 km/h</p>
                <p style="font-size:24px">4.7s</p>
                <p>Acceleration 0 - 100 km/h with Sport Chrono Package</p>
            </div>
        </div>
    </div>
    <div class="technical">
        <div class="technical01">
            <img src="admin/uploads/model1.png">
        </div>
        <div class="technical02">
            <table class="child" border="0" cellspacing="0">
                <tr>
                    <td></td>
                    <td>Manual</td>
                    <td>PK</td>
                </tr>
                <tr>
                    <td style="color: #959899"> Max power</td>
                    <td>300hp</td>
                    <td>300hp</td>
                </tr>
                <tr>
                    <td style="color: #959899">at rpm</td>
                    <td>6,500rpm</td>
                    <td>6,500rpm</td>
                </tr>
                <tr>
                    <td style="color: #959899">Acceleration from 0 - 100 km/h</td>
                    <td>5.1s</td>
                    <td>4.9s</td>
                </tr>
                <tr>
                    <td style="color: #959899">Acceleration 0 - 100 km/h with Sport Chrono Package</td>
                    <td>---------</td>
                    <td>4.7s</td>
                </tr>
                <tr>
                    <td style="color: #959899">Top Speed</td>
                    <td>245km/h</td>
                    <td>245km/h</td>
                </tr>
                <tr>
                    <td style="color: #959899">Price</td>
                    <td>MSRP $ 66,400</td>
                    <td>MSRP $ 70,060</td>
                </tr>
            </table>
            <div class="click">
                <a href="interested.php">Sending Information</a>
            </div>
        </div>
    </div>
</body>

    	<?php 
    	include 'inc/footer.php';
    	?>