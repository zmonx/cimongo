

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/contact.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/cart.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/checkout.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/checkout_responsive.css') ?>">

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url('public/images/cart.jpg') ?>)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                                    <li>Confirm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="content">
    <div class="container">
        <!-- <div class="col-sm-4" style="float:none;margin:auto;padding: inherit">
            <div class="order-details-confirmation" style="background-color: rgb(255,255,255);border-radius: 25px;"> -->

        <br><br>
        <!-- <center><h3>Order: <?php print_r($items[0]['product_id']);?></h3></center>
     -->
     
     
    </div>
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
            
            
            <div class="order checkout_section">
                <div class="section_title">Your order</div>
                    <div class="section_subtitle">Order details</div><hr>
          
                    <?php $shipPrice = 0; ?>
                    <!-- Order details -->
                    <div class="order_list_container">
                        <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                            <div class="order_list_title">Product</div>
                            <div class="order_list_value ml-auto">Total</div>
                        </div>
                        <ul class="order_list">
                            <?php $subtotal = 0;
                           ?>
                            <?php foreach ($items as $row) { ?>
                                <?php for ($x = 0; $x < $row['quantity']; $x++) { ?>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title"> <?php echo getProductNameFromId($row['product_id']); ?></div>
                                        <div class="order_list_value ml-auto">$ <?php echo getProductPriceFromId($row['product_id']) ?></div>
                                    </li>
                                <?php } ?>
                                <?php $subtotal += getProductPriceFromId($row['product_id']) * ($row['quantity']) ?>
                            <?php } ?>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Order Date</div>
                                <div class="order_list_value ml-auto"><?php echo $order[0]['order_date'] ?></div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Subtotal</div>
                                <div class="order_list_value ml-auto">$ <?php echo number_format($subtotal) ?></div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Shipping</div>
                                <div class="order_list_value ml-auto"> $ <?php echo number_format($order[0]['shipping']) ?></div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Total</div>
                                <div class="order_list_value ml-auto">$ <?php echo number_format($subtotal + $order[0]['shipping'] ) ?></div>
                            
                            </li>
                        </ul>
                    </div>
          
           
           <br><hr><br>
                    <center><a href="<?php echo base_url('home'); ?>"><button class="button contact_button buttons" type="submit" value="">Confirm</a></center>
                </div>
                <br>  
                <!-- <button  type="submit" class="button contact_button buttons" form="checkout_form"><span> <strong> place order </strong></span></button> -->
             </div>
        </div>
 </div>
 <style>
    .buttons {
    width: 250px;
    height: 60px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b;
    overflow: hidden;
    cursor: pointer;
}
</style>