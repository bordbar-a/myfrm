<?php
$widegtMenuObj = new \App\Widgets\WidgetMenu();
$menus = $widegtMenuObj->handle();
?>

<?php foreach ($menus as $level_one_item): ?>
    <li class="<?= $level_one_item->subs ? "dropdown" : '' ?>"><!-- HOME -->
        <a class="<?= $level_one_item->subs ? "dropdown-toggle" : '' ?>"
           href="<?= $level_one_item->subs ? '#' : $level_one_item->url ?>">
            <?= $level_one_item->title ?>
        </a>
        <?php if ($level_one_item->subs): ?>
            <ul class="dropdown-menu">
                <?php foreach ($level_one_item->subs as $level_two_item): ?>
                    <li class="<?= $level_two_item->subs ? "dropdown" : '' ?>">
                        <a class="<?= $level_two_item->subs ? "dropdown-toggle" : '' ?>"
                           href="<?= $level_two_item->subs ? '#' : $level_two_item->url ?>">
                            <?= $level_two_item->title; ?>
                        </a>
                        <?php if ($level_two_item->subs): ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($level_two_item->subs as $level_three_item): ?>
                                    <li><a href="<?= $level_three_item->url ?>"><?= $level_three_item->title ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; ?>

<!--<li class="dropdown mega-menu">  SHORTCODES -->
<!--    <a class="dropdown-toggle" href="#">-->
<!--        عناصر و شورتکدها-->
<!--    </a>-->
<!--    <ul class="dropdown-menu">-->
<!--        <li>-->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-md-5th">-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li><a href="shortcode-animations.html">انیمیشن ها</a></li>-->
<!--                        <li><a href="shortcode-buttons.html">دکمه ها</a></li>-->
<!--                        <li><a href="shortcode-carousel.html">تحرکات</a></li>-->
<!--                        <li><a href="shortcode-charts.html">گراف ها</a></li>-->
<!--                        <li><a href="shortcode-clients.html">مشتریان</a></li>-->
<!--                        <li><a href="shortcode-columns.html">ردیف ها و ستون ها</a></li>-->
<!--                        <li><a href="shortcode-counters.html">شمارنده</a></li>-->
<!--                        <li><a href="shortcode-forms.html">عناصر فرم</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-5th">-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li><a href="shortcode-dividers.html">تقسیم کننده</a></li>-->
<!--                        <li><a href="shortcode-icon-boxes.html">جعبه ها و آیکون ها</a></li>-->
<!--                        <li><a href="shortcode-galleries.html">گالری ها</a></li>-->
<!--                        <li><a href="shortcode-headings.html">استایل های هدر</a></li>-->
<!--                        <li><a href="shortcode-icon-lists.html">لیست آیکون ها</a></li>-->
<!--                        <li><a href="shortcode-labels.html">ویژگی های برجسته</a></li>-->
<!--                        <li><a href="shortcode-lightbox.html">لایت باکس</a></li>-->
<!--                        <li><a href="shortcode-forms-editors.html">ویرایش کننده های HTML</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-5th">-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li><a href="shortcode-list-pannels.html">لیست پنل ها</a></li>-->
<!--                        <li><a href="shortcode-maps.html">نقشه ها</a></li>-->
<!--                        <li><a href="shortcode-media-embeds.html">کد های EMBED محتواها</a></li>-->
<!--                        <li><a href="shortcode-modals.html">المان های آژاکس و بوت استرپ</a></li>-->
<!--                        <li><a href="shortcode-navigations.html">ناوبار ها</a></li>-->
<!--                        <li><a href="shortcode-paginations.html">شمارنده صفحات</a></li>-->
<!--                        <li><a href="shortcode-progress-bar.html">کنداکتورها</a></li>-->
<!--                        <li><a href="shortcode-widgets.html">ویجت و ابزراک ها</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-5th">-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li><a href="shortcode-pricing.html">جعبه قیمت ها</a></li>-->
<!--                        <li><a href="shortcode-process-steps.html">فرآیند عملیات</a></li>-->
<!--                        <li><a href="shortcode-callouts.html">پیشنهادات</a></li>-->
<!--                        <li><a href="shortcode-info-bars.html">باکس اطلاعات</a></li>-->
<!--                        <li><a href="shortcode-blockquotes.html">دیدگاه و نظرات</a></li>-->
<!--                        <li><a href="shortcode-responsive.html">واکنشگرا</a></li>-->
<!--                        <li><a href="shortcode-sections.html">جداکننده عناوین</a></li>-->
<!--                        <li><a href="shortcode-social-icons.html">آیکون شبکه های اجتماعی</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-5th">-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li><a href="shortcode-alerts.html">اعلان ها</a></li>-->
<!--                        <li><a href="shortcode-styled-icons.html">آیکون های دیگر</a></li>-->
<!--                        <li><a href="shortcode-tables.html">جداول مختلف</a></li>-->
<!--                        <li><a href="shortcode-tabs.html">نوار ابزارها</a></li>-->
<!--                        <li><a href="shortcode-testimonials.html">دیدگاه مشتریان</a></li>-->
<!--                        <li><a href="shortcode-thumbnails.html">تصاویر شاخص</a></li>-->
<!--                        <li><a href="shortcode-toggles.html">منوهای کشویی</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
