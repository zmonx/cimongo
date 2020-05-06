<div class="products">
    <div class="container">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <form action="get">
                <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="product_name" class="form-control" placeholder="ค้นหาด้วยชื่อสินค้า" value="<?php echo $product_name;?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" name="categories_id">
                                    <option value="">เลือกหมวดหมู่</option>
                                    <?php foreach ($categories as $key => $row) {?>
                                        <option value="<?php echo $row['categories_id'] ?>" <?php echo ($categories_id==$row['categories_id'])?'selected':''; ?>><?php echo $row['categories_name']?></option>
                                    <?php }?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="search" class="btn btn-primary btn-block" value="search"><i class="fas fa-search"></i> ค้นหา</button>
                        </div>
                </div>
            </form>
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