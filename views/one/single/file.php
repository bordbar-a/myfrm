<!-- -->
<section>
    <div class="container">

        <div class="row">

            <!-- IMAGE -->
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?= $file->thumb ?>" alt="" />
                    <div class="caption">
                        <h4>تصویر بند انگشتی</h4>
                        <?= $file->title ?>

                    </div>
                </div>
            </div>
            <!-- /IMAGE -->

            <!-- ITEM DESC -->
            <div class="col-lg-5 col-sm-8">

                <!-- buttons -->
                <div class="pull-right">
                    <!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                    <a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip"
                       title="اضافه به مورد پسندها"><i class="fa fa-heart nopadding"></i></a>
                    <a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip"
                       title="اضافه برای مقایسه"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
                </div>
                <!-- /buttons -->

                <!-- price -->
                <div class="shop-item-price">
                    <span class="line-through nopadding-left">$98.00</span>
                    <?= $file->price; ?>
                </div>
                <!-- /price -->

                <hr/>

                <div class="clearfix margin-bottom-30">
                    <span class="pull-right text-success"><i class="fa fa-check"></i> In Stock</span>
                    <!--
                    <span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
                    -->

                    <strong>SKU:</strong> UY7321987
                </div>


                <!-- short description -->
                <?= $file->title ?>
                <!-- /short description -->


                <!-- countdown -->
                <div class="text-center">
                    <h5>پیشنهاد محدود</h5>
                    <div class="countdown" data-from="January 31, 2020 15:03:26"
                         data-labels="years,months,weeks,days,hour,min,sec">
                        <!-- Example Date From: December 31, 2018 15:03:26 --></div>
                </div>
                <!-- /countdown -->


                <hr/>

                <!-- FORM -->
                <form class="clearfix form-inline nomargin ajax-form" method="post" action="<?= site_url('basket/add') ?>">
                    <input type="hidden" name="product_id" value="1"/>

                    <!-- see assets/js/view/demo.shop.js -->
                    <input type="hidden" id="color" name="color" value="yellow"/>
                    <input type="hidden" id="qty" name="qty" value="1"/>
                    <input type="hidden" id="size" name="size" value="5"/>
                    <input type="hidden" id="size" name="file_id" value="<?= $file->id ?>"/>
                    <!-- see assets/js/view/demo.shop.js -->

                    <div class="btn-group pull-left product-opt-color">
                        <button type="button" class="btn btn-default dropdown-toggle product-color-dd noradius"
                                data-toggle="dropdown">&nbsp;
                            <span class="caret"></span>
                            <span id="product-selected-color" class="tag shop-color"
                                  style="background-color:#F0E68C"></span>
                        </button>

                        <!-- 
                            href = required to be hex color starting with: #
                            data-val = color name or color id from the database 
                        -->
                        <ul id="product-color-dd" class="dropdown-menu clearfix" role="menu">
                            <li class="active"><a class="tag shop-color" data-val="purple" href="#800080"
                                                  style="background-color:#800080"></a></li>
                            <li><a class="tag shop-color" data-val="red" href="#FF0000"
                                   style="background-color:#FF0000"></a></li>
                            <li><a class="tag shop-color" data-val="pink" href="#FF0080"
                                   style="background-color:#FF0080"></a></li>
                            <li><a class="tag shop-color" data-val="orange" href="#FF6600"
                                   style="background-color:#FF6600"></a></li>
                            <li><a class="tag shop-color" data-val="grey" href="#E0DCC8"
                                   style="background-color:#E0DCC8"></a></li>
                            <li><a class="tag shop-color" data-val="yellow" href="#F0E68C"
                                   style="background-color:#F0E68C"></a></li>
                            <li><a class="tag shop-color" data-val="light-yellow" href="#FFFFD0"
                                   style="background-color:#FFFFD0"></a></li>
                            <li><a class="tag shop-color" style="background-color:#4B0082"></a></li>
                            <li><a class="tag shop-color" data-val="dark-grey" href="#666666"
                                   style="background-color:#666666"></a></li>
                            <li><a class="tag shop-color" data-val="green" href="#00FF00"
                                   style="background-color:#00FF00"></a></li>
                        </ul>
                    </div><!-- /btn-group -->

                    <div class="btn-group pull-left product-opt-size">
                        <button type="button" class="btn btn-default dropdown-toggle product-size-dd noradius"
                                data-toggle="dropdown">
                            <span class="caret"></span>
                            Size
                            <small id="product-selected-size">(<span>5</span>)</small>
                        </button>

                        <!-- data-val = size value or size id -->
                        <ul id="product-size-dd" class="dropdown-menu" role="menu">
                            <li class="active"><a data-val="5" href="#">5</a></li>
                            <li><a data-val="5.5" href="#">5.5</a></li>
                            <li><a data-val="6" href="#">6</a></li>
                            <li><a data-val="6.5" href="#">6.5</a></li>
                            <li><a data-val="7" href="#">7</a></li>
                            <li><a data-val="7.5" href="#">7.7</a></li>
                            <li><a data-val="8" href="#">8</a></li>
                            <li><a data-val="8.5" href="#">8.5</a></li>
                            <li><a data-val="9" href="#">9</a></li>
                            <li><a data-val="9.5" href="#">9.5</a></li>
                            <li><a data-val="10" href="#">10</a></li>
                            <li><a data-val="10.5" href="#">10.5</a></li>
                            <li><a data-val="11" href="#">11</a></li>
                            <li><a data-val="11.5" href="#">11.5</a></li>
                            <li><a data-val="12" href="#">12</a></li>
                            <li><a data-val="13" href="#">13</a></li>
                            <li><a data-val="14" href="#">14</a></li>
                        </ul>
                    </div><!-- /btn-group -->

                    <div class="btn-group pull-left product-opt-qty">
                        <button type="button" class="btn btn-default dropdown-toggle product-qty-dd noradius"
                                data-toggle="dropdown">
                            <span class="caret"></span>
                            Qty
                            <small id="product-selected-qty">(<span>5</span>)</small>
                        </button>

                        <ul id="product-qty-dd" class="dropdown-menu clearfix" role="menu">
                            <li class="active"><a data-val="1" href="#">1</a></li>
                            <li><a data-val="2" href="#">2</a></li>
                            <li><a data-val="3" href="#">3</a></li>
                            <li><a data-val="4" href="#">4</a></li>
                            <li><a data-val="5" href="#">5</a></li>
                            <li><a data-val="6" href="#">6</a></li>
                            <li><a data-val="7" href="#">7</a></li>
                            <li><a data-val="8" href="#">8</a></li>
                            <li><a data-val="9" href="#">9</a></li>
                            <li><a data-val="10" href="#">10</a></li>
                        </ul>
                    </div><!-- /btn-group -->

                    <button type="submit" class="btn btn-primary pull-left product-add-cart noradius">اضافه به سبد خرید</button>

                </form>
                <!-- /FORM -->


                <hr/>

                <!-- Share -->
                <div class="pull-right">

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left"
                       data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left"
                       data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left"
                       data-toggle="tooltip" data-placement="top" title="Google plus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left"
                       data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                </div>
                <!-- /Share -->


                <!-- rating -->
                <div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
                <!-- /rating -->

            </div>
            <!-- /ITEM DESC -->

            <!-- INFO -->
            <div class="col-sm-4 col-md-3">

                <h4 class="size-18">
                    <i class="fa fa-paper-plane-o"></i>
                    دانلود محصولات
                </h4>
                <p></p>

                <h4 class="size-18">
                    <i class="fa fa-clock-o"></i>
                    گارانتی بازگشت وجه
                </h4>
                <p>ما تا سی روز تضمین با بازگشت وجه را مید‌هیم</p>

                <h4 class="size-18">
                    <i class="fa fa-users"></i>
                    پشتیبانی مشتری
                </h4>
                <p>در صورت مشکل میتوانید با پشتیانی صحبت کنید.</p>

                <hr>

                <p class="size-11">
                    همیشه مطمئن خرید کنید
                </p>
            </div>
            <!-- /INFO -->

        </div>


        <ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
            <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">Description</a>
            </li>
            <li role="presentation"><a href="#specs" role="tab" data-toggle="tab">Specifications</a></li>
            <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (2)</a></li>
        </ul>


        <div class="tab-content padding-top-20">

            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade in active" id="description">
                <?= $file->description; ?>
            </div>

            <!-- SPECIFICATIONS -->
            <div role="tabpanel" class="tab-pane fade" id="specs">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Column name</th>
                            <th>Column name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Size</td>
                            <td>2XL</td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td>Red</td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td>132lbs</td>
                        </tr>
                        <tr>
                            <td>Height</td>
                            <td>74cm</td>
                        </tr>
                        <tr>
                            <td>Bluetooth</td>
                            <td><i class="fa fa-check text-success"></i> YES</td>
                        </tr>
                        <tr>
                            <td>Wi-Fi</td>
                            <td><i class="glyphicon glyphicon-remove text-danger"></i> NO</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- REVIEWS -->
            <div role="tabpanel" class="tab-pane fade" id="reviews">
                <!-- REVIEW ITEM -->
                <div class="block margin-bottom-60">

								<span class="user-avatar"><!-- user-avatar -->
									<img class="pull-left media-object" src=" <?= assets('images/avatar2.jpg') ?> "
                                         width="64" height="64" alt="">
								</span>

                    <div class="media-body">
                        <h4 class="media-heading size-14">
                            John Doe &ndash;
                            <span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
                            <span class="size-14 text-muted"><!-- stars -->
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</span>
                        </h4>

                        <p>
                            Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum
                            id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed,
                            dignissim pretium nunc. Nam et lacus neque.
                        </p>

                    </div>

                </div>
                <!-- /REVIEW ITEM -->

                <!-- REVIEW ITEM -->
                <div class="block margin-bottom-60">

								<span class="user-avatar"><!-- user-avatar -->
									<img class="pull-left media-object" src=" <?= assets('images/avatar2.jpg') ?> "
                                         width="64" height="64" alt="">
								</span>

                    <div class="media-body">
                        <h4 class="media-heading size-14">
                            John Doe &ndash;
                            <span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
                            <span class="size-14 text-muted"><!-- stars -->
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</span>
                        </h4>

                        <p>
                            Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum
                            id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed,
                            dignissim pretium nunc. Nam et lacus neque.
                        </p>

                    </div>

                </div>
                <!-- /REVIEW ITEM -->


                <!-- REVIEW FORM -->
                <h4 class="page-header margin-bottom-40">ADD A REVIEW</h4>
                <form method="post" action="#" id="form">

                    <div class="row margin-bottom-10">

                        <div class="col-md-6 margin-bottom-10">
                            <!-- Name -->
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name *"
                                   maxlength="100" required="">
                        </div>

                        <div class="col-md-6">
                            <!-- Email -->
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email *"
                                   maxlength="100" required="">
                        </div>

                    </div>

                    <!-- Comment -->
                    <div class="margin-bottom-30">
                        <textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment"
                                  maxlength="1000"></textarea>
                    </div>

                    <!-- Stars -->
                    <div class="product-star-vote clearfix">

                        <label class="radio pull-left">
                            <input type="radio" name="product-review-vote" value="1"/>
                            <i></i> 1 Star
                        </label>

                        <label class="radio pull-left">
                            <input type="radio" name="product-review-vote" value="2"/>
                            <i></i> 2 Stars
                        </label>

                        <label class="radio pull-left">
                            <input type="radio" name="product-review-vote" value="3"/>
                            <i></i> 3 Stars
                        </label>

                        <label class="radio pull-left">
                            <input type="radio" name="product-review-vote" value="4"/>
                            <i></i> 4 Stars
                        </label>

                        <label class="radio pull-left">
                            <input type="radio" name="product-review-vote" value="5"/>
                            <i></i> 5 Stars
                        </label>

                    </div>

                    <!-- Send Button -->
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Send Review</button>

                </form>
                <!-- /REVIEW FORM -->

            </div>
        </div>


        <hr class="margin-top-80 margin-bottom-80"/>

    </div>
</section>
<!-- / -->

