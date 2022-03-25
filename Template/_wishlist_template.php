 <!-- Shopping cart section start -->
 <?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
     if(isset($_POST['delete-cart-submit'])){
       $deletedRecord = $Cart->deleteCart($_POST['item_id']);
     }

     if(isset($_POST['cart-submit'])){
         $Cart->sendToWishlist($_POST['item_id'], 'cart', 'wishlist');
     }
 }
 ?>
 <section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Liste d'envies</h5>
                <!-- Shopping cart items start -->
                <div class="row">
                    <div class="col-sm-9">
                        <?php 
                            if(isset($_SESSION['user_id'])){
                                $wishlist = $product->getWishlistData($_SESSION['user_id']);
                            }else{
                                $wishlist = $_SESSION['wishlist'];

                            }
                            foreach($wishlist as $item) :
                            // print_r ($item);
                            $cart = $product->getProduct($item ['item_id']);
                            //  print_r($cart);
                           $subTotal[] = array_map(function($item){
                        ?>
                        <!-- Cart item start -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "/assets/imageNotFound.jpg" ?>" alt="image" style="height: 120px;" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'Erreur' ?></h5>
                                <small>by <?php echo $item['item_brand'] ?? 'Erreur' ?></small>
                                <!-- Product rating start -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">0 Avis</a>
                                </div>
                                <!-- Product rating end -->

                                <!-- Product quantity start -->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id']?? 0; ?>" name="item_id">    
                                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Supprimer</button>
                                    </form>

                                    <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id']?? 0; ?>" name="item_id">    
                                    <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Ajouter au panier</button>
                                    </form>
                                   
                                   
                                </div>
                                <!-- Product quantity end -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?> €</span>
                                </div>
                            </div>
                            <!-- Cart item end -->
                        </div>
                        <?php 
                            return $item['item_price'];  
                            }, $cart); // closing array_map function
                            endforeach;
                            // print_r($subTotal);
                        ?>
                    </div>
                </div>
                <!-- Shopping cart items start -->
            </div>
        </section>
        <!-- Shopping cart section end -->