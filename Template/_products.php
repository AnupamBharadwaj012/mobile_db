<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    $db = new DBController();
    $product =new Product($db);
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
            $itemspec[]= $product->getDataWhere($item_id);
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
<!--                    <div class="col">-->
<!--                        <a href="/MobileDB/cart.php" class="btn btn-danger form-control">Proceed to Buy</a>-->
<!--                    </div>-->
<!--                    <div class="col">-->
<!--                        --><?php
//                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
//                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
//                        }else{
//                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
//                        }
//                        ?>
<!--                    </div>-->
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h1 class="font-baloo text-info"><?php echo $item['item_name'] ?? "Unknown"; ?></h1>
                <h5>by <?php echo $item['item_brand'] ?? "Brand"; ?></h5>
                <div class="d-flex">
                    <div class="rating text-warning font-size-25">
                    <?php
                        for($i=1;$i<=5;$i++){
                            if($i<=$itemspec[0]['product_rating']){
                        echo '<span><i class="fas fa-star"></i></span>';
                        }else{
                        echo '<span><i class="far fa-star"></i></span>';
                        }
                        }?>
                    </div>
<!--                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>-->
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike><?php echo $item['item_price']+9999?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">Rs.<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger"><small>Rs.9999</small></span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">MDB <br>Delivered</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery in : 2 Days</small>
                    <small>Sold by <a href="#">Mobile DB</a>( 4.5 out of 5 )</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 560098</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
<!--                        <div class="color my-3">-->
<!--                            <div class="d-flex justify-content-between">-->
<!--                                <h6 class="font-baloo">Color:</h6>-->
<!--                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>-->
<!--                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>-->
<!--                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
<!--                            <h6 class="font-baloo">Qty</h6>-->
<!--                            <div class="px-4 d-flex font-rale">-->
<!--                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>-->
<!--                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">-->
<!--                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>-->
<!--                            </div>-->
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 text success font-size-14"><?php echo $itemspec[0]['product_ram'];?>GB RAM</button>
                            <hr/>
                            <button class="btn p-0 text success font-size-14"><?php echo $itemspec[0]['product_storage'];?>GB ROM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->


            </div>
            <br/>
            <br/>
            <div class="col-12">
                <h2 class="font-rubik text-secondary">Product Description</h2>
                <hr>
                <h3 class="font-rale text-danger">Category : <?php echo $itemspec[0]['item_cat'];?></h3>
                <br/>
                <h4 class="font-rale text-primary">Processor : <?php echo $itemspec[0]['product_processor'];?></h4>
                <h5 class="font-rale text-primary">Display : <?php echo $itemspec[0]['product_display'];?></h5>
                <h5 class="font-rale text-primary">Camera : <?php echo $itemspec[0]['product_camera'];?></h5>
                <h5 class="font-rale text-primary">Ram : <?php echo $itemspec[0]['product_ram'];?>GB</h5>
                <h5 class="font-rale text-primary">Storage : <?php echo $itemspec[0]['product_storage'];?>GB</h5>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>