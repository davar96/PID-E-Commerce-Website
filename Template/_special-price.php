<!-- Special price start -->
<?php 
    $brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    //  print_r($brand);
    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['special_price_submit'])){
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

    $in_cart = ($Cart->getCartId($product->getData('cart')));
?>
<section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">
                    Prix spécial
                </h4>
                <hr>
                <div id="filters" class="button-group text-right font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">Toutes les marques</button>
                    <?php 
                        array_map(function($brand){
                            printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                        }, $unique);
                    ?>
                </div>

                <div class="grid">
                    <?php array_map(function($item) use($in_cart) {?>
                    <div class="grid-item border <?php echo $item['item_brand']??"Erreur";?>">
                        <div class="item py-2" style="width: 200px;">
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
                                    if (in_array($item['item_id'], $in_cart ?? [])) {
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">Dans le panier</button>';
                                    } else {
                                        echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Ajouter au panier</button>';
                                    }
                                    
                                    ?>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }, $product_shuffle)?>
                </div>
            </div>
        </section>
        <!-- Special price start -->