<!-- New phones start -->

<?php
    shuffle($product_shuffle);

     // request method post
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['new_phones_submit'])){
            // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
 ?>
<section id="new-phones">
            <div class="container">
                <h4 class="font-rubik font-size-20">Les Nouveautés</h4>
                <hr>
                <!-- OwlCarousel start -->
                <div class="owl-carousel owl-theme">
                <?php foreach($product_shuffle as $item) {?>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']); ?>"><img src="<?php echo $item['item_image']??"/assets/imageNotFound.jpg";?>" alt="image4" class="img-fluid"></a>
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

                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '2';?>">
                                    <input type="hidden" name="user_id" value="<?php echo '2';?>">
                                <button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } //closing foreach function ?>  
                </div>
                <!-- OwlCarousel end -->
            </div>
        </section>
        <!-- New phones end -->