<!-- CART -->
<section>
    <div class="container">


        <!-- EMPTY CART -->
        <?php if (count($items) == 0) : ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <strong>سبد خرید خالی است</strong><br/>
                    شما آیتی برای خرید انتخاب نکرده اید.<br/>
                    روی <a href="<?= site_url('file/list'); ?>"><span class="label label-warning">این لینک</span></a>
                    کلیک کنید برای ادامه خرید <br/>
                </div>
            </div>
            <!-- /EMPTY CART -->


            <!-- CART -->
        <?php else : ?>
            <div class="row">

                <!-- LEFT -->
                <div class="col-lg-9 col-sm-8">

                    <!-- CART -->
                    <form class="cartContent clearfix" method="post" action="<?= site_url('basket/update') ?>">

                        <!-- cart content -->
                        <div id="cartContent">
                            <!-- cart header -->
                            <div class="item head clearfix">
                                <span class="cart_img size-13 bold"></span>
                                <span class="product_name size-13 bold">نام محصول</span>
                                <span class="remove_item size-13 bold"></span>
                                <span class="total_price size-13 bold">قیمت کل این محصول</span>
                                <span class="qty size-13 bold">تعداد</span>
                            </div>
                            <!-- /cart header -->

                            <!-- cart item -->
                            <?php foreach ($items as $item): ?>
                                <div class="item">
                                    <div class="cart_img pull-right width-100 padding-10 text-left"><img
                                                src="<?= $item->thumb ?>" alt="" width="80"/></div>
                                    <a href="<?= site_url('single/file?id=' . $item->id) ?>" class="product_name">
                                        <span><?= $item->title ?></span>
                                        <small>Color: Brown, Size: XL</small>
                                    </a>
                                    <a href="<?= site_url('basket/item/remove?id='. $item->id) ?>" class="remove_item"><i class="fa fa-times"></i></a>
                                    <div class="total_price"><span><?= $item->price * $item->count ?></span> ریال </div>
                                    <div class="qty"><input type="number" value="<?= $item->count ?>" name="qty[]"
                                                            maxlength="3" max="999" min="1"/>
                                        &times; <?= $item->price ?>
                                        <input type="hidden" name="file_id[]" value="<?= $item->id ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- /cart item -->
                            <?php endforeach; ?>



                            <!-- update cart -->
                            <button class="btn btn-success margin-top-20 margin-right-10 pull-right"><i
                                        class="glyphicon glyphicon-ok"></i> بروزرسانی سبد خرید
                            </button>
                            <a class="btn btn-danger margin-top-20 margin-right-10 pull-right reset-basket" data-url ="<?= site_url('basket/reset') ?>"><i
                                        class="glyphicon glyphicon-remove"></i> خالی کردن سبد خرید
                            </a>
                            <!-- /update cart -->

                            <div class="clearfix"></div>
                        </div>
                        <!-- /cart content -->

                    </form>
                    <!-- /CART -->

                </div>


                <!-- RIGHT -->
                <div class="col-lg-3 col-sm-4">

                    <!-- TOGGLE -->
                    <div class="toggle-transparent toggle-bordered-full clearfix">

                        <div class="toggle nomargin-top">
                            <label>کد تخفیف</label>

                            <div class="toggle-content">
                                <p>کد تخفیف خود را وارد کنید</p>

                                <form action="#" method="post" class="nomargin">
                                    <input type="text" id="cart-code" name="cart-code"
                                           class="form-control text-center margin-bottom-10" placeholder="کد"
                                           required="required">
                                    <button class="btn btn-primary btn-block" type="submit">تایید</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /TOGGLE -->

                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">
										
										<span class="clearfix">
											<span class="pull-right"><?= $total_price ?>  ریال </span>
											<strong class="pull-left">قیمت اصلی کل :</strong>
										</span>
                                <span class="clearfix">
											<span class="pull-right">0 ریال</span>
											<span class="pull-left">مقدار تخفیف :</span>
										</span>

                                <hr/>

                                <span class="clearfix">
											<span class="pull-right size-20"><?= $total_price ?>  ریال </span>
											<strong class="pull-left">هزینه کل پرداختی :</strong>
										</span>

                                <hr/>

                                <a href="shop-checkout.html" class="btn btn-primary btn-lg btn-block size-15"><i
                                            class="fa fa-mail-forward"></i>ادامه فرایند خرید</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        <?php endif; ?>
        <!-- /CART -->

    </div>
</section>
<!-- /CART -->
