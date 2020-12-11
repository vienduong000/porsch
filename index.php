<?php
include 'inc/header.php';
include 'inc/slider.php';
?>




<diV class="wapper">
	<!-- <p>Models</p> -->
	<div class="wrapper-img-1">

		<?php
		$count = 0;
		$product_new = $product->getproduct_featheread();
		if ($product_new) {
			while ($result = $product_new->fetch_assoc()) {

				$count++;
			}
		}
		//B1: Tìm tổng số bản ghi trong bảng sản phẩm
		$total_records = $count; //$row['total'];
		// B2: Tìm limit và current page (trang hien tại)
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 4;
		// B3: Tính toán tổng số trang và start
		//Lấy tổng số trang
		$total_page = ceil($total_records / $limit);
		// Giới hạn current_page trong khoảng từ 1 đến total_page
		if ($current_page > $total_page) {
			$current_page = $total_page;
		} else if ($current_page < 1) {
			$current_page = 1;
		}
		//Tìm start
		$start = ($current_page - 1) * $limit;
		//B5: Lay san pham trong product dua vao limit va start
		$result = $product->getProduct($start, $limit);
		if ($result) {
			while ($res = $result->fetch_assoc()) {
		?>
				<div class="box">
					<img src="admin/uploads/<?php echo $res['image'] ?>" class="models">
					<p><a href="details.php?proid=<?php echo $res['productId'] ?>"> > <?php echo $res['productName'] ?> $ <?php echo $fm->format_currency($res['price']) ?></a></p>
				</div>
		<?php
			}
		}
		?>


	</div>
</div>
<div class="wapper">
	<!-- <p>Models</p> -->
	<div class="wrapper-img-1">

		<?php
		$count = 0;
		$product_new = $product->getproduct_featheread();
		if ($product_new) {
			while ($result = $product_new->fetch_assoc()) {

				$count++;
			}
		}
		//B1: Tìm tổng số bản ghi trong bảng sản phẩm
		$total_records = $count; //$row['total'];
		// B2: Tìm limit và current page (trang hien tại)
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 4;
		// B3: Tính toán tổng số trang và start
		//Lấy tổng số trang
		$total_page = ceil($total_records / $limit);
		// Giới hạn current_page trong khoảng từ 1 đến total_page
		if ($current_page > $total_page) {
			$current_page = $total_page;
		} else if ($current_page < 1) {
			$current_page = 1;
		}
		//Tìm start
		$start = ($current_page - 1) * $limit;
		//B5: Lay san pham trong product dua vao limit va start
		$result = $product->getproduct_new($start, $limit);
		if ($result) {
			while ($res = $result->fetch_assoc()) {
		?>
				<div class="box">
					<img src="admin/uploads/<?php echo $res['image'] ?>" class="models">
					<p><a href="details.php?proid=<?php echo $res['productId'] ?>"> > <?php echo $res['productName'] ?> $ <?php echo $fm->format_currency($res['price']) ?></a></p>
				</div>
		<?php
			}
		}
		?>


	</div>
</div>
<div class="find">
	<p>Find a Porsche near you</p>
	<div class="relative">
		<img src="admin/uploads/find1.png" class="img">
		<!-- <a href="#">Reserve a 781 Model</a> -->
		<img src="admin/uploads/find2.png" class="img">
		<!-- <a href="#">Reserve a 911 Model</a> -->
		<img src="admin/uploads/find3.png" class="img">
		<!-- <a href="#">Reserve a Taycan Model</a> -->
	</div>
</div>
<div class="discover">
	<p>Discover</p>
	<div class="grid-container">
		<div class="row">
			<div class="grid-item">
				<img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2020-homepage-teaser-pcl-porscheconnect-kw41/normal/0de81ee8-0305-11eb-80ce-005056bbdc38;sL;twebp/porsche-normal.webp">
			</div>
			<div class="grid-item">
				<img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2018-homepage-teaser-ww-e-performance-kw12/normal/f7cc8e7c-6599-11e9-80c4-005056bbdc38;sL;twebp/porsche-normal.webp">
			</div>
			<div class="grid-item">
				<img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2020-homepage-teaser-pcl-myporsche-kw39/normal/3dc71943-f82d-11ea-80ce-005056bbdc38;sL;twebp/porsche-normal.webp">
			</div>
			<div class="grid-item">
				<img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2020-homepage-teaser-pcl-porscheonlinecatalogue-kw41/normal/5e1186a2-0303-11eb-80ce-005056bbdc38;sL;twebp/porsche-normal.webp">
			</div>
		</div>
	</div>
</div>
<!-- <div class="video">
        <div class="autoplay">
            <iframe title="YouTube video player" width="1380" height="770" background="white" src="../img/homepage/y2mate.com - The new Panamera Turbo and Panamera 4S in motion._1080p.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div> -->
<!-- <div class="box_view">
        <a href="#"> View more Panamera...</a>
    </div> -->

<?php
include 'inc/footer.php';
?>