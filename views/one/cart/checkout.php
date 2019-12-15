<!-- CART -->
<section>
    <div class="container">

        <?php if (!\App\Services\Auth\Auth::is_login()): ?>
            <!-- NOT LOGGED IN -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <strong>شما وارد نشده اید</strong>
                    لظفا یا <a href="<?= site_url('auth') ?>">وارد</a> شوید یا <a href="javascript:;"
                                                                                  onclick="jQuery('#accountswitch').trigger('click'); _scrollTo('#newaccount', 200);">ثبت
                        نام کنید</a> برای خرید های بعدی
                </div>
            </div>
            <!-- /NOT LOGGED IN -->
        <?php endif; ?>

        <!-- CHECKOUT -->
        <form class="row clearfix" method="post" action="<?= site_url('basket/register') ?>">
            <?php if (!\App\Services\Auth\Auth::is_login()): ?>
                <div class="col-lg-7 col-sm-7">
                    <div class="heading-title">
                        <h4>ثبت نام سریع</h4>
                    </div>


                    <!-- BILLING -->
                    <fieldset class="margin-top-60">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label for="billing_firstname">نام *</label>
                                <input id="billing_firstname" name="user[name]" type="text"
                                       class="form-control required"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="billing_lastname">نام خانوادگی *</label>
                                <input id="billing_lastname" name="user[lastname]" type="text"
                                       class="form-control required"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label for="billing_email">ایمیل *</label>
                                <input id="billing_email" name="user[email]" type="text"
                                       class="form-control required"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="billing_phone">شماره تلفن *</label>
                                <input id="billing_phone" name="user[phonenumber]" type="text"
                                       class="form-control required"/>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <label for="account:password">رمزعبور *</label>
                                <input id="account:password" name="user[password]" type="password"
                                       class="form-control"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="account:password2">تکرار رمزعبور *</label>
                                <input id="account:password2" name="user[re-password]" type="password"
                                       class="form-control"/>
                            </div>
                        </div>

                        <hr/>


                    </fieldset>
                    <!-- /BILLING -->
                </div>
            <?php endif; ?>

            <div class="col-lg-5 col-sm-5">
                <div class="heading-title">
                    <h4>نحوه پرداخت</h4>
                </div>

                <!-- PAYMENT METHOD -->
                <fieldset class="margin-top-60">
                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                <div class="row nomargin-bottom">
                                    <div class="col-lg-12 nomargin clearfix">
                                        <label class="radio pull-left">
                                            <input id="payment_card" name="payment[method]" type="radio" value="2"
                                                   checked="checked"/>
                                            <i></i> <span class="weight-300">کارت اعتباری</span>
                                        </label>
                                    </div>
                                    <?php if (\App\Services\Auth\Auth::is_login()): ?>
                                    <div class="col-lg-12 nomargin clearfix">
                                        <label class="radio pull-left nomargin-top">
                                            <input id="payment_check" name="payment[method]" type="radio" value="1"
                                            />
                                            <i></i> <span class="weight-300">کیف پول</span>
                                        </label>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /PAYMENT METHOD -->


                <!-- CREDIT CARD PAYMENT -->
                <fieldset id="ccPayment" class="margin-top-30 softhide">

                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                درگاه پرداخت زرین پال

                            </div>
                        </div>
                    </div>

                </fieldset>
                <!-- /CREDIT CARD PAYMENT -->


                <!-- TOTAL / PLACE ORDER -->
                <div class="toggle-transparent toggle-bordered-full clearfix">
                    <div class="toggle active">
                        <div class="toggle-content">
										
										<span class="clearfix">
											<span class="pull-right"><?= $total_price ?></span>
											<strong class="pull-left">هزینه سفارش :</strong>
										</span>
                            <span class="clearfix">
											<span class="pull-right">000</span>
											<span class="pull-left">تخفیف :</span>
										</span>
                            <span class="clearfix">
											<span class="pull-right">000</span>
											<span class="pull-left">هزینه ارسال :</span>
										</span>

                            <hr/>

                            <span class="clearfix">
											<span class="pull-right size-20"><?= $total_price ?></span>
											<strong class="pull-left">مجموع :</strong>
										</span>

                            <hr/>

                            <button class="btn btn-primary btn-lg btn-block size-15"><i class="fa fa-mail-forward"></i>
                                تکمیل فرایند خرید
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /TOTAL / PLACE ORDER -->

        </form>
        <!-- /CHECKOUT -->

    </div>
    <div class="row">
        <a class="btn btn-info" href="<?= site_url('basket/list') ?>">بازگشت به سبد خرید</a>
    </div>
</section>
<!-- /CART -->


