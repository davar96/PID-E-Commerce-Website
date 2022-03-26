<?php
    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['top_sale_submit'])){
            // call method addToCart
            if(isset($_SESSION) && isset($_SESSION['user_id'])){
                $Cart->addToCart($_SESSION['user_id'], $_POST['item_id']);            
            }else{

                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array();
                }
                if(!empty($_SESSION['cart'])){
                    $added = false;
                    foreach ($_SESSION['cart'] as $key => $cart) {
                        if($cart['item_id'] == $_POST['item_id']){
                            $_SESSION['cart'][$key]['qty'] +=1;
                            $added = true;
                        }
                    }
                    if (!$added) {
                        array_push($_SESSION['cart'] , array('item_id'=>$_POST['item_id'],'qty'=>1));
                    }
                }else{
                    array_push($_SESSION['cart'] , array('item_id'=>$_POST['item_id'],'qty'=>1));
                }
            }
        }
    }
 ?>
 
 <!-- Top sale start -->
 <section id="top-sale">
            <div class="container">
                <h4 class="font-rubik font-size-20">Les plus vendus</h4>
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
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '1';?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                    <?php 
                                    if (in_array($item['item_id'], ($Cart->getCartId($product->getData('cart')) ?? []))) {
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">Dans le panier</button>';
                                    } else {
                                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Ajouter au panier</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } //closing foreach function ?>      
                </div>
                <!-- OwlCarousel end -->
            </div>
        </section>
        <!-- Top sale end -->