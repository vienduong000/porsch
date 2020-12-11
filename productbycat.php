<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>
<?php

if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
	echo "<script> window.location = '404.php' </script>";
} else {
	$id = $_GET['catid']; // Lấy catid trên host
}
// gọi class category
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
//     $catName = $_POST['catName'];
//     $updateCat = $cat -> update_category($catName,$id); // hàm check catName khi submit lên
// }

?>
<div class="main">
	<div class="content">
		<div class="content_top">
			<?php
			$name_cat = $cat->get_name_by_cat($id);
			if ($name_cat) {
				while ($result_name = $name_cat->fetch_assoc()) {
					# code...

			?>
					<div class="heading">
						<h3>Danh mục: <?php echo $result_name['catName']; ?></h3>
					</div>
			<?php
				}
			}
			?>
			<div class="clear"></div>
		</div>
		<div class="section group">
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

			$productbycat = $cat->get_product_by_cat($id);
			if ($productbycat) {
				while ($result = $productbycat->fetch_assoc()) {
					# code...

			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="preview-3.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $result['price'] . ' VND' ?></span></p>
						<span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details"><div class="btn btn-danger">Chi tiết</div></a></span>
					</div>
			<?php
				}
			} else {
				echo "Sản phẩm này hiện chưa có trong danh mục";
			}
			?>
		</div>



	</div>
	<div class="pagination">
		<?php
		// PHẦN HIỂN THỊ PHÂN TRANG
		// BƯỚC 7: HIỂN THỊ PHÂN TRANG

		// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
		if ($current_page > 1 && $total_page > 1) {
			echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($current_page - 1) . '">Prev</a></li> ';
		}

		// Lặp khoảng giữa
		for ($i = 1; $i <= $total_page; $i++) {
			// Nếu là trang hiện tại thì hiển thị thẻ span
			// ngược lại hiển thị thẻ a
			if ($i == $current_page) {
				echo '<li class="page-item"> <a class="page-link">' . $i . '</a></li> ';
			} else {
				echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li> ';
			}
		}

		// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
		if ($current_page < $total_page && $total_page > 1) {
			echo '<li class="page-item"> <a class="page-link" href="index.php?page=' . ($current_page + 1) . '">Next</a></li> ';
		}
		?>
	</div>
</div>

<?php
include 'inc/footer.php';
?>