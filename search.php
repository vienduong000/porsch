<?php 
include 'inc/header.php';
?>

<div class="main">
	<div class="content">
		<div class="content_top">
			<div class="heading">
				<h3>Latest Product</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$count=0;
			$product_new = $product->getTotalProduct();
			if($product_new){
				while ($result = $product_new->fetch_assoc()) {
					
					$count++; 
				}
			}
			//B1: Tìm tổng số bản ghi trong bảng sản phẩm
			$total_records=$count;//$row['total'];
			// B2: Tìm limit và current page (trang hien tại)
			$current_page=isset($_GET['page']) ? $_GET['page']:1;
			$limit=4;
			// B3: Tính toán tổng số trang và start
			//Lấy tổng số trang
			$total_page=ceil($total_records/$limit);
			// Giới hạn current_page trong khoảng từ 1 đến total_page
			if($current_page>$total_page){
				$current_page=$total_page;
			}else if($current_page<1){
				$current_page=1;
			}
			//Tìm start
			$start=($current_page-1)*$limit;
			//B5: Lay san pham trong product dua vao limit va start
			$search = addslashes($_GET['search']);
			$result=$product->searchProductByName($start, $limit, $search);
			if(isset($_REQUEST['ok'])){
				// Gán hàm addslashes để chống sql injection
            
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                $message = "Hãy nhập dữ liệu cần tìm";
				echo "<script type='text/javascript'>alert('$message');</script>";
            }else{
            	if($result && $search!=""){
				while ($res = $result->fetch_assoc()) {
					?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
						<h2><?php echo $res['productName'] ?></h2>
						<p><?php echo $fm->textShorten($res['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $fm->format_currency($res['price'])." VND" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $res['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
					<?php 
				}
            } 
        }
    }
			?>

		</div>
		<div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="products.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="products.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="products.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        </div>

		<div class="content_bottom">
			<div class="heading">
				<h3>Latest from Acer</h3>
			</div>
			<div class="clear"></div>
		</div>

	</div>
</div>
<?php 
include 'inc/footer.php';
?>

