<div class="content">
    <div class="container-fluid">
        <div class="col-sm-4" style="float:none;margin:auto;padding: inherit">
            <div class="order-details-confirmation" style="background-color: rgb(255,255,255);border-radius: 25px;">
    <br><br><br><br><br><br><br><br><br>
                <center>
                    <h4>Order: <?php print_r($items[0]['product_id']);?></h4>

                </center>

                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <div class="section_title">Your order</div>
                        <div class="section_subtitle">Order details</div>

                        <?php $shipPrice = 0; ?>
                        <!-- Order details -->
                        <div class="order_list_container">
                            <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Product</div>
                                <div class="order_list_value ml-auto">Total</div>
                            </div>
                            <ul class="order_list">
                                <?php $subtotal = 0;
                                echo sizeof($items);?>
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

               
               
                    </div>
                </div>
              
                <center><a href="<?php echo base_url('home'); ?>"><input class="btn essence-btn" type="submit" value="Confirm"></a></center>

            </div>
        </div>
    </div>

</div>
</div>