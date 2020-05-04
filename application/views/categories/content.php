<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/categories.css') ?>">

<div class="home">
	<div class="home_container">
		<div class="home_background" style="background-image:url(<?php echo base_url('public/images/categories.jpg') ?>)"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Smart Phones<span>.</span></div>
							<div class="home_text">
								<p>มีความสามารถหลากหลาย โดยมีระบบปฏิบัติการติดตั้งอยู่ ระบบปฏิบัติการที่ได้รับความนิยมในปัจจุบันได้แก่ Android, iOS และ Windows Phone ซึ่งระบบปฏิบัติการนั้นจะเป็นส่วนพื้นฐานที่ Smartphone ทุกเครื่องต้องมี เพื่อใช้ในการปิด เปิด เครื่อง และทำหน้าที่เชื่อมโยงกับอุปกรณ์ต่าง ๆ ให้ทำงานร่วมกันได้ มีหลายสิ่งที่ทำให้ Smartphone เป็นที่นิยมมากขึ้นเรื่อย ๆ เช่น สามารถถ่ายรูปได้, ส่ง Email ได้, ฟังเพลง ดูวีดีโอได้ และความสามารถอื่น ๆ อีกมากมาย.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Product Sorting -->
				<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
					<div class="results">Showing <span>12</span> results</div>
					<div class="sorting_container ml-md-auto">
						<div class="sorting">
							<ul class="item_sorting">
								<li>
									<span class="sorting_text">Sort by</span>
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<ul>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">

				<div class="product_grid">
					<!-- Product -->
					<?php foreach ($products as $row) { ?>
						<div class="product">
							<div class="product_image img-resize"><img src="<?php echo $row['picture'] ?>" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php"><?php echo $row['product_name'] ?></div>
								<div class="product_price"><?php echo $row['buyPrice'] ?></div>
							</div>
						</div>
					<?php } ?>

				</div>
				<div class="product_pagination">
					<ul>
						<li class="active"><a href="#">01.</a></li>
						<li><a href="#">02.</a></li>
						<li><a href="#">03.</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.img-resize img {
		width: 170px;
		height: auto;
	}

	.img-resize {
		width: 170px;
		height: 170px;
		overflow: hidden;
		text-align: center;
	}
</style>