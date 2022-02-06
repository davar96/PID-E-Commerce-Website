 <?php
    $product_shuffle = $product->getData();
 ?>
 
 <!-- Top sale start -->
 <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Les plus vendus</h4>
                <hr>
                <!-- OwlCarousel start -->
                <div class="owl-carousel owl-theme">
                    <?php foreach($product_shuffle as $item) {?>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="<?php echo $item['item_image']??"/assets/imageNotFound.jpg";?>" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name']??"Erreur";?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span><?php echo $item['item_price']??'0';?> €</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php } //closing foreach function ?>      

                </div>
                <!-- OwlCarousel end -->
            </div>
        </section>
        <!-- Top sale end -->