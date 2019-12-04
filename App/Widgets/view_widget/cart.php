<?php
$widgetModel = new \App\Widgets\WidgetBasket();
$items = $widgetModel->handle();
?>
<a href="#">
    <span class="badge badge-aqua btn-xs badge-corner"><?= \App\Services\Basket\Basket::count(); ?></span>
    <i class="fa fa-shopping-cart"></i>
</a>
<div class="quick-cart-box">
    <h4>سبد خرید</h4>

    <div class="quick-cart-wrapper">
        <?php foreach (\App\Services\Basket\Basket::items() as $item): ?>
            <a href="#">

                <!-- cart item -->
                <img src="<?= $item->thumb ?>" width="45"
                     height="45" alt=""/>
                <h6><span><?= $item->count ?> X </span> <?= $item->title; ?> </h6>

                <small><?= $item->price; ?></small>
            </a><!-- /cart item -->
        <?php endforeach; ?>

        <!-- cart no items example -->
        <?php if (\App\Services\Basket\Basket::is_basket_empty()): ?>
            <a class="text-center" href="#">
                <h6>سبد خرید شما خالی است</h6>
            </a>
        <?php endif; ?>

    </div>

    <!-- quick cart footer -->
    <div class="quick-cart-footer clearfix">
        <a href="<?= site_url('basket/list') ?>" class="btn btn-primary btn-xs pull-right">سبد خرید</a>
        <a href="#" data-url="<?= site_url('basket/reset') ?>" class="btn btn-danger btn-xs pull-right margin-left-10 reset-basket">خالی کردن سبد
            خرید</a>
        <span class="pull-left"><strong>مجموع :</strong> <?= \App\Services\Basket\Basket::total_price() ?></span>
    </div>
    <!-- /quick cart footer -->

</div>