<div class="logo">
	<img src="https://files.porsche.com/filestore/image/multimedia/none/875d5e3d-6763-47fe-bc52-809142d53274/svg/9bee0427-35f0-11ea-80c6-005056bbdc38/porsche-svg.svg" width="130px" height="80px">
	<hr>



</div>
<div class="menu primary-navication">
	<ul>
		<?php
		$getall_category = $cat->show_category_fontend();
		if ($getall_category) {
			while ($result_allcat = $getall_category->fetch_assoc()) {


		?>
				<li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>"><?php echo $result_allcat['catName'] ?></a></li>
		<?php
			}
		}
		?>
	</ul>
</div>
<!-- <div class="background">
        <img src="../img/homepage/background.png" >
	</div> -->
<div class="slide">
	<img src="admin/uploads/slider1.jpg" class="slide-item" number="0" />
	<img src="admin/uploads/slider2.jpg" class="slide-item" number="1" style="display: none;" />
	<img src="admin/uploads/slider3.jpg" class="slide-item" number="2" style="display: none;" />
	<a href="#" class="next">></a>
	<a href="#" class="prev">
		<</a> </div> <script>
			$(() => {

			$('.next').click(function() {
			changeImage('next');
			})

			$('.prev').click(function() {
			changeImage('prev');
			})

			})

			function changeImage(type) {
			let imgSelectVisible = $('img.slide-item:visible');
			let imgVisible = parseInt(imgSelectVisible.attr('number'));
			let eqNumber = type === 'next' ? imgVisible + 1 : imgVisible - 1;

			if (eqNumber >= $('.slide-item').length) {
			eqNumber = 0
			}

			$('img.slide-item').eq(eqNumber).fadeIn()

			imgSelectVisible.fadeOut();
			}
			setInterval(changeImage, 2500)
			</script>





</div>