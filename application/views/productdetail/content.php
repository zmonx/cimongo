<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/product.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/product_responsive.css')?>">
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?php echo base_url('public/images/categories.jpg')?>)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Smart Phones<span>.</span></div>
								<div class="home_text"><p>Smart Phone : โทรศัพท์ที่รองรับระบบปฏิบัติการ ต่างๆได้ เสมือนยกเอาคุณสมบัติที่ PDA และคอมพิวเตอร์มาไว้ในโทรศัพท์ เช่น iOS (ที่ลงในมือถือรุ่น Iphone) ,BlackBerry OS, Android OS , Windows phone 7 และ Symbian Os (Nokia) เป็นต้น</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="<?php echo ($products[0]['picture'])?>" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
						<!-- <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="<php echo base_url('public/images/cam1.jpg')?>"><img src="<?php echo base_url('public/images/cam1.jpg')?>" alt=""></div>
							<div class="details_image_thumbnail " data-image="<php echo base_url('public/images/cam2.jpg')?>"><img src="<?php echo base_url('public/images/cam2.jpg')?>" alt=""></div>
							<div class="details_image_thumbnail " data-image="<php echo base_url('public/images/cam3.jpg')?>"><img src="<?php echo base_url('public/images/cam3.jpg')?>" alt=""></div>
							<div class="details_image_thumbnail " data-image="<php echo base_url('public/images/cam4.jpg')?>"><img src="<?php echo base_url('public/images/cam4.jpg')?>" alt=""></div>
						
						</div> -->
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?php echo ($products[0]['product_name'])?></div>
						<!-- <div class="details_discount">$75000</div> -->
						<div class="details_price"><?php echo ($products[0]['buyPrice'])?></div>

						<!-- In Stock -->
					
						<div class="details_text">
						<p><?php echo ($products[0]['description'])?><br>
					
						</p>
						</div>
						<!-- <p>Canon EOS 5Ds : ใช้เซ็นเซอร์ CMOS แบบฟูลเฟรม ความละเอียด 50.6 ล้านพิกเซล </p>
							<p>ชิปประมวลผลภาพ Dual DIGIC 6 เซ็นเซอร์วัดแสงแบบ RGB + IR 150,000 พิกเซล 252 โซน</p>		
							<p>*รับฟรี !! Workshop ถ่ายภาพ มูลค่าสูงสุด 20,000 บาท </p>
							<p>**สินค้ารับประกันศูนย์ Canon (ประเทศไทย)</p>	 -->
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="<?php echo base_url('cart')?>">Add to cart</a></div>
						</div>

						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
						
					</div>
					<div class="description_text">
					<p><?php echo ($products[0]['description'])?><br>
					
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/product.js"></script>