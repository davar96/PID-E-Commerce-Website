<!-- Special price start -->
<?php 
    $brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    //  print_r($brand);
    shuffle($product_shuffle);
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
                    <?php array_map(function($item){?>
                    <div class="grid-item border <?php echo $item['item_brand']??"Erreur";?>">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="<?php echo $item['item_image']??"/assets/imageNotFound.jpg";?>" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6><?php $item['item_name']??"Erreur";?></h6>
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

                                    <button type="submit" class="btn btn-warning font-size-12">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }, $product_shuffle)?>
                </div>
            </div>
        </section>
        <!-- Special price start -->