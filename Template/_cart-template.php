 <!-- Shopping cart section start -->
 <section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Votre panier</h5>
                <!-- Shopping cart items start -->
                <div class="row">
                    <div class="col-sm-9">
                        <?php 
                            
                            foreach($product->getData('cart') as $item) :
                            // print_r ($item);
                            $cart = $product->getProduct($item ['item_id']);
                            //  print_r($cart);
                            array_map(function($item){
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
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty-input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>

                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">Supprimer</button>
                                    <button type="submit" class="btn font-baloo text-danger">Enregistrer pour plus tard</button>
                                </div>
                                <!-- Product quantity end -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    <span class="product-price"><?php echo $item['item_price'] ?? '0' ?> €</span>
                                </div>
                            </div>
                            <!-- Cart item end -->
                        </div>
                        <?php 
                            }, $cart); // closing array_map function
                            endforeach;
                        ?>
                    </div>
                    <!-- Subtotal section start -->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Livraison Gratuite</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Total (2 articles): &nbsp;<span class="text-danger">€<span class="text-danger" id="deal-price">846.00</span></span>
                                </h5>
                                <button type="submit" class="btn btn-warning mt-3">Passer la commande</button>
                            </div>
                        </div>
                    </div>
                    <!-- Subtotal section end -->
                </div>
                <!-- Shopping cart items start -->
            </div>
        </section>
        <!-- Shopping cart section end -->