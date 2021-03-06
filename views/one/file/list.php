<!-- -->
<section>
    <div class="container">

        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">


                <!-- CAROUSEL -->
                <div class="owl-carousel buttons-autohide controlls-over margin-bottom-30 radius-4"
                     data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
                    <!-- item -->
                    <div>
                        <div class="caption-slider-default">
                            <div class="display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="caption-container text-left">
                                        <h2>SHOP <strong>NOW</strong> &ndash; 50% OFF</h2>
                                        <p>
                                            This is a category banner rotator<br/>
                                            for any category of your shop.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img class="img-responsive radius-4" src=" <?= assets("images/demo/shop/banners/top_2.png") ?> "
                             width="851" height="335" alt="">
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <div>

                        <div class="caption-slider-default">
                            <div class="display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="caption-container text-left">
                                        <h2>LOREM IPSUM <strong>DOLOR</strong></h2>
                                        <p>
                                            Unlimited designs, unlimited combinations <br/>
                                            imagination is the limit!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img class="img-responsive radius-4" src=" <?= assets("images/demo/shop/banners/top_1.png") ?> "
                             width="851" height="335" alt="">
                    </div>
                    <!-- /item -->

                </div>
                <!-- /CAROUSEL -->


                <!-- LIST OPTIONS -->
                <div class="clearfix shop-list-options margin-bottom-20">

                    <ul class="pagination nomargin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>

                    <div class="options-left">
                        <select>
                            <option value="pos_asc">Position ASC</option>
                            <option value="pos_desc">Position DESC</option>
                            <option value="name_asc">Name ASC</option>
                            <option value="name_desc">Name DESC</option>
                            <option value="price_asc">Price ASC</option>
                            <option value="price_desc">Price DESC</option>
                        </select>

                        <a class="btn active fa fa-th" href="shop-4col-left.html"><!-- grid --></a>
                        <a class="btn fa fa-list" href="shop-1col-left.html"><!-- list --></a>
                    </div>

                </div>
                <!-- /LIST OPTIONS -->


                <ul class="shop-item-list row list-inline nomargin">

                    <!-- ITEM -->
                    <?php foreach ($files as $file): ?>
                        <li class="col-lg-3 col-sm-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="<?= site_url('single/file?id=' . $file->id) ?>">
                                        <img class="img-responsive"
                                             src=" <?= $file->thumb ?> "
                                             alt="shop first image"/>
                                        <img class="img-responsive"
                                             src=" <?= $file->thumb ?> "
                                             alt="shop hover image"/>
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over">
                                        <!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-default add-wishlist" href="#" data-item-id="<?= $file->id ?>"
                                           data-toggle="tooltip" title="پسندیدن"><i
                                                    class="fa fa-heart nopadding"></i></a>
                                        <a class="btn btn-default add-compare" href="#" data-item-id="1"
                                           data-toggle="tooltip" title="مقایسه"><i
                                                    class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <!--                                    <div class="shop-item-info">-->
                                    <!--                                        <span class="label label-success">NEW</span>-->
                                    <!--                                        <span class="label label-danger">SALE</span>-->
                                    <!--                                    </div>-->
                                    <!-- /product more info -->
                                </div>

                                <div class="shop-item-summary text-center">
                                    <h2><?= $file->title; ?></h2>

                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        <span class="line-through"><?= $file->price; ?></span>
                                        <?= $file->price; ?>
                                    </div>
                                    <!-- /price -->
                                </div>

                                <!-- buttons -->
                                <div class="shop-item-buttons text-center">
                                    <form class="ajax-form" action="<?= site_url('basket/add') ?>" method="post">
                                        <input type="hidden" name="file_id" value="<?= $file->id ?>">

                                    <button class="btn btn-default" type="submit"><i
                                                class="fa fa-cart-plus"></i>
                                        اضافه به سبد خرید</button>
                                    </form>
                                </div>
                                <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->
                    <?php endforeach;; ?>

                </ul>

                <hr/>

                <!-- Pagination Default -->
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /Pagination Default -->

            </div>


            <!-- LEFT -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

                <!-- CATEGORIES -->
                <div class="side-nav margin-bottom-60">

                    <div class="side-nav-head">
                        <button class="fa fa-bars"></button>
                        <h4>CATEGORIES</h4>
                    </div>

                    <ul class="list-group list-group-bordered list-group-noicon uppercase">
                        <li class="list-group-item active">
                            <a class="dropdown-toggle" href="#">WOMEN</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(123)</span> Shoes &amp;
                                        Boots</a></li>
                                <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(331)</span>
                                        Top &amp; Blouses</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(234)</span> Dresses &amp;
                                        Skirts</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">MEN</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Accessories</a>
                                </li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Shoes &amp;
                                        Boots</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Dresses &amp;
                                        Skirts</a></li>
                                <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(78)</span>
                                        Top &amp; Blouses</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">JEWELLERY</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(23)</span> Dresses &amp;
                                        Skirts</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(34)</span> Shoes &amp;
                                        Boots</a></li>
                                <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(21)</span>
                                        Top &amp; Blouses</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">KIDS</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Shoes &amp;
                                        Boots</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(22)</span> Dresses &amp;
                                        Skirts</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(31)</span> Accessories</a>
                                </li>
                                <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(18)</span>
                                        Top &amp; Blouses</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(189)</span>
                                ACCESSORIES</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(61)</span>
                                GLASSES</a></li>

                    </ul>

                </div>
                <!-- /CATEGORIES -->

                <!-- SIZE -->
                <div class="margin-bottom-60">
                    <h4>SIZE</h4>

                    <a class="tag" href="#">
                        <span class="txt">S</span>
                    </a>
                    <a class="tag" href="#">
                        <span class="txt bold">M</span>
                    </a>
                    <a class="tag" href="#">
                        <span class="txt">L</span>
                    </a>
                    <a class="tag" href="#">
                        <span class="txt">XL</span>
                    </a>
                    <a class="tag" href="#">
                        <span class="txt">2XL</span>
                    </a>
                    <a class="tag" href="#">
                        <span class="txt">3XL</span>
                    </a>

                    <hr/>

                    <div class="clearfix size-12">
                        <a class="pull-right glyphicon glyphicon-remove" href="#"></a>
                        SELECTED SIZE: <strong>M</strong>
                    </div>
                </div>
                <!-- /SIZE -->


                <!-- COLOR -->
                <div class="margin-bottom-60">
                    <h4>COLOR</h4>

                    <a class="tag shop-color" href="#" style="background-color:#000000"></a>
                    <a class="tag shop-color" href="#" style="background-color:#FFFFFF"></a>
                    <a class="tag shop-color" href="#" style="background-color:#C0C0C0"></a>
                    <a class="tag shop-color" href="#" style="background-color:#0000E0"></a>
                    <a class="tag shop-color" href="#" style="background-color:#800080"></a>
                    <a class="tag shop-color" href="#" style="background-color:#FF0000"></a>
                    <a class="tag shop-color" href="#" style="background-color:#FF0080"></a>
                    <a class="tag shop-color" href="#" style="background-color:#FF6600"></a>
                    <a class="tag shop-color" href="#" style="background-color:#E0DCC8"></a>
                    <a class="tag shop-color" href="#" style="background-color:#F0E68C"></a>
                    <a class="tag shop-color" href="#" style="background-color:#FFFFD0"></a>
                    <a class="tag shop-color" href="#" style="background-color:#4B0082"></a>
                    <a class="tag shop-color" href="#" style="background-color:#666666"></a>
                    <a class="tag shop-color" href="#" style="background-color:#00FF00"></a>
                    <a class="tag shop-color" href="#" style="background-color:#36454F"></a>
                    <a class="tag shop-color" href="#" style="background-color:#F4A460"></a>
                    <a class="tag shop-color" href="#" style="background-color:#0088CC"></a>
                    <a class="tag shop-color" href="#" style="background-color:#B38B6D"></a>

                    <hr/>

                    <div class="clearfix size-12">
                        <a class="pull-right glyphicon glyphicon-remove" href="#"></a>
                        SELECTED COLOR: <strong>Red</strong>
                    </div>
                </div>
                <!-- /COLOR -->


                <!-- BRANDS -->
                <div class="side-nav margin-bottom-60">

                    <div class="side-nav-head">
                        <button class="fa fa-bars"></button>
                        <h4>BRANDS</h4>
                    </div>

                    <ul class="list-group list-unstyled">
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(21)</span>
                                Armani</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(44)</span>
                                Nike</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span>
                                Jolidon</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(18)</span>
                                Ralph Lauren</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(87)</span>
                                Lotto</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span>
                                Fila</a></li>
                        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(69)</span>
                                Boss</a></li>
                    </ul>

                </div>
                <!-- BRANDS -->


                <!-- BANNER ROTATOR -->
                <div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center"
                     data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
                    <a href="#">
                        <img class="img-responsive" src=" <?= assets("images/demo/shop/banners/off_1.png") ?> "
                             width="270" height="350" alt="">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src=" <?= assets("images/demo/shop/banners/off_2.png") ?> "
                             width="270" height="350" alt="">
                    </a>
                </div>
                <!-- /BANNER ROTATOR -->


                <!-- FEATURED -->
                <div class="margin-bottom-60">

                    <h2 class="owl-featured">FEATURED</h2>
                    <div class="owl-carousel featured"
                         data-plugin-options='{"singleItem": true, "stopOnHover":false, "autoPlay":false, "autoHeight": false, "navigation": true, "pagination": false}'>

                        <div><!-- SLIDE 1 -->
                            <ul class="list-unstyled nomargin nopadding text-left">

                                <li class="clearfix"><!-- item -->
                                    <div class="thumbnail featured clearfix pull-left">
                                        <a href="#">
                                            <img src=" <?= assets("images/demo/shop/products/100x100/p10.jpg") ?> "
                                                 width="80" height="80" alt="featured item">
                                        </a>
                                    </div>

                                    <a class="block size-12" href="#">Long Grey Dress - Special</a>
                                    <div class="rating rating-4 size-13 width-100 text-left">
                                        <!-- rating-0 ... rating-5 --></div>
                                    <div class="size-18 text-left">$132.00</div>
                                </li><!-- /item -->

                                <li class="clearfix"><!-- item -->
                                    <div class="thumbnail featured clearfix pull-left">
                                        <a href="#">
                                            <img src=" <?= assets("images/demo/shop/products/100x100/p2.jpg") ?> "
                                                 width="80" height="80" alt="featured item">
                                        </a>
                                    </div>

                                    <a class="block size-1" href="#">Black Fashion Hat</a>
                                    <div class="rating rating-4 size-13 width-100 text-left">
                                        <!-- rating-0 ... rating-5 --></div>
                                    <div class="size-18 text-left">$65.00</div>
                                </li><!-- /item -->

                                <li class="clearfix"><!-- item -->
                                    <div class="thumbnail featured clearfix pull-left">
                                        <a href="#">
                                            <img src=" <?= assets("images/demo/shop/products/100x100/p13.jpg") ?> "
                                                 width="80" height="80" alt="featured item">
                                        </a>
                                    </div>

                                    <a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
                                    <div class="rating rating-4 size-13 width-100 text-left">
                                        <!-- rating-0 ... rating-5 --></div>
                                    <div class="size-18 text-left">$77.00</div>
                                </li><!-- /item -->

                            </ul>
                        </div><!-- /SLIDE 1 -->

                        <div><!-- SLIDE 2 -->
                            <ul class="list-unstyled nomargin nopadding text-left">

                                <li class="clearfix"><!-- item -->
                                    <div class="thumbnail featured clearfix pull-left">
                                        <a href="#">
                                            <img src=" <?= assets("images/demo/shop/products/100x100/p12.jpg") ?> "
                                                 width="80" height="80" alt="featured item">
                                        </a>
                                    </div>

                                    <a class="block size-12" href="#">Long Grey Dress - Special</a>
                                    <div class="rating rating-4 size-13 width-100 text-left">
                                        <!-- rating-0 ... rating-5 --></div>
                                    <div class="size-18 text-left">$132.00</div>
                                </li><!-- /item -->

                                <li class="clearfix"><!-- item -->
                                    <div class="thumbnail featured clearfix pull-left">
                                        <a href="#">
                                            <img src=" <?= assets("images/demo/shop/products/100x100/p6.jpg") ?> "
                                                 width="80" height="80" alt="featured item">
                                        </a>
                                    </div>

                                    <a class="block size-1" href="#">Black Fashion Hat</a>
                                    <div class="rating rating-4 size-13 width-100 text-left">
                                        <!-- rating-0 ... rating-5 --></div>
                                    <div class="size-18 text-left">$65.00</div>
                                </li><!-- /item -->

                                <li class="clearfix"><!-- item -->
                                    <div class="thumbnail featured clearfix pull-left">
                                        <a href="#">
                                            <img src=" <?= assets("images/demo/shop/products/100x100/p14.jpg") ?> "
                                                 width="80" height="80" alt="featured item">
                                        </a>
                                    </div>

                                    <a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
                                    <div class="rating rating-4 size-13 width-100 text-left">
                                        <!-- rating-0 ... rating-5 --></div>
                                    <div class="size-18 text-left">$77.00</div>
                                </li><!-- /item -->

                            </ul>
                        </div><!-- /SLIDE 2 -->

                    </div>

                </div>
                <!-- /FEATURED -->


                <!-- HTML BLOCK -->
                <div class="margin-bottom-60">
                    <h4>HTML BLOCK</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus
                        eunit.</p>

                    <form action="#" role="form" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control required"
                                   placeholder="Enter your Email">
                            <span class="input-group-btn">
											<button class="btn btn-success" type="submit"><i
                                                        class="glyphicon glyphicon-send"></i></button>
										</span>
                        </div>
                    </form>

                </div>
                <!-- /HTML BLOCK -->

            </div>

        </div>

    </div>
</section>
<!-- / -->
