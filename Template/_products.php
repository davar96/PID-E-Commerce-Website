  <!-- Product start -->
  <?php 
    $item_id = $_GET['item_id'] ?? 'Erreur';
    foreach($product->getData() as $item):
        if ($item['item_id'] == $item_id):
?>
  <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image']??"/assets/imageNotFound.jpg";?>" alt="image" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">

                            <div class="col">
                            <?php 
                                    if (in_array($item['item_id'], ($Cart->getCartId($product->getData('cart')) ?? []))) {
                                        echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Dans le panier</button>';
                                    } else {
                                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Ajouter au panier</button>';
                                    }
                                    
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Erreur";?></h5>
                        <small>by <?php echo $item['item_brand']??"Erreur";?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>

                            <a href="#" class="px-2 font-rale font-size-14">Avis</a>
                        </div>
                        <hr class="m-0">

                        <!-- Product price start -->
                        <table class="my-3">

                            <tr class="font-rale font-size-14">
                                <td>Notre prix</td>
                                <td class="font-size-20 text-danger"><span><?php echo $item['item_price']?? '0';?> €</span><small class="text-dark font-size-12">&nbsp;&nbsp;TVAC</small></td>
                            </tr>

                        </table>
                        <!-- Product price end -->

                        <!-- Policy start -->
                        <div class="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size- my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">14 jours<br>Droit de rétractation</a>
                                </div>

                                <div class="return text-center mr-5">
                                    <div class="font-size- my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Livreur UPS</a>
                                </div>

                                <div class="return text-center mr-5">
                                    <div class="font-size- my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Garantie 2 ans</a>
                                </div>
                            </div>
                        </div>
                        <!-- Policy end -->
                        <hr>

                        <!-- Order details start -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Délai de livraison: 20/03-25/03</small>
                            <small>Vendu par<a href="#">PID-E-Commerce-Website</a></small>
                        </div>
                        <!-- Order details end -->

                    </div>

                    <div class="col-12">
                        <br>
                        <h6 class="font-rubik">Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim velit reprehenderit deserunt voluptatibus nihil. Provident consequatur error voluptatum id laudantium sunt eius voluptatibus dicta ipsum aliquam nisi minima modi temporibus,
                            sequi quisquam voluptate tenetur molestiae fugit, aperiam iusto odio iste ea fugiat. Optio ratione rerum sapiente magni voluptas quas culpa.</p>

                        <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim velit reprehenderit deserunt voluptatibus nihil. Provident consequatur error voluptatum id laudantium sunt eius voluptatibus dicta ipsum aliquam nisi minima modi temporibus,
                            sequi quisquam voluptate tenetur molestiae fugit, aperiam iusto odio iste ea fugiat. Optio ratione rerum sapiente magni voluptas quas culpa.</p>
                    </div>
                </div>
            </div>
        </section>

<?php 
    endif;
    endforeach;
?>
        <!-- Product end -->