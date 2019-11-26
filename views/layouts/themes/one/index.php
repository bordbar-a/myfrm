<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title>Smarty - Multipurpose + Admin</title>
    <meta name="keywords" content="HTML5,CSS3,Template"/>
    <meta name="description" content=""/>
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]"/>

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
            rel="stylesheet" type="text/css"/>

    <!-- CORE CSS -->
    <link href="<?= assets('plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>

    <!-- THEME CSS -->
    <link href="<?= assets('css/essentials.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= assets('css/layout.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= assets('plugins/bootstrap/RTL/bootstrap-rtl.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= assets('plugins/bootstrap/RTL/bootstrap-flipped.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= assets('css/layout-RTL.css') ?>" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?= assets('css/header-1.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= assets('css/color_scheme/green.css') ?>" rel="stylesheet" type="text/css" id="color_scheme"/>

    <!-- SWIE SLIDER -->
    <link href="<?= assets('plugins/slider.swiper/dist/css/swiper.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= assets('css/style.css') ?>" rel="stylesheet" type="text/css"/>
</head>

<!--
		AVAILABLE BODY CLASSES:

		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background

		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click

		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->

<body class="smoothscroll enable-animation">


<!-- wrapper -->
<div id="wrapper">

    <!--
            AVAILABLE HEADER CLASSES

            Default nav height: 96px
            .header-md 		= 70px nav height
            .header-sm 		= 60px nav height

            .noborder 		= remove bottom border (only with transparent use)
            .transparent	= transparent header
            .translucent	= translucent header
            .sticky			= sticky header
            .static			= static header
            .dark			= dark header
            .bottom			= header on bottom

            shadow-before-1 = shadow 1 header top
            shadow-after-1 	= shadow 1 header bottom
            shadow-before-2 = shadow 2 header top
            shadow-after-2 	= shadow 2 header bottom
            shadow-before-3 = shadow 3 header top
            shadow-after-3 	= shadow 3 header bottom

            .clearfix		= required for mobile menu, do not remove!

            Example Usage:  class="clearfix sticky header-sm transparent noborder"
        -->
    <div id="header" class="sticky clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box">
                            <form action="page-search-result-1.html" method="get">
                                <div class="input-group">
                                    <input type="text" name="src" placeholder="Search" class="form-control"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->

                    <!-- QUICK SHOP CART -->
                    <?php include_once theme_path('partials|cart.php', 'one') ?>
                    <!-- /QUICK SHOP CART -->

                </ul>
                <!-- /BUTTONS -->

                <!-- Logo -->

                <a class="logo pull-left" href="<?= admin_url(); ?>">
                    <button type="button" class="btn btn-info margin-left-20">پنل ادمین</button>
                </a>

                <?php if(!\App\Services\Auth\Auth::is_login()): ?>
                <a class="logo pull-left" href="<?= site_url('auth'); ?>">
                    <button type="button" class="btn btn-info margin-left-20">ورود/ثبت‌نام</button>
                </a>
                <?php else:?>
                    <a class="logo pull-left" href="<?= site_url('auth/logout'); ?>">
                        <button type="button" class="btn btn-info margin-left-20">خروج</button>
                    </a>
                <?php endif;?>

                <?php include_once theme_path('partials|menu.php', 'one'); ?>
            </div>
        </header>
        <!-- /Top Nav -->

    </div>


    <!--
            PAGE HEADER

            CLASSES:
                .page-header-xs	= 20px margins
                .page-header-md	= 50px margins
                .page-header-lg	= 80px margins
                .page-header-xlg= 130px margins
                .dark			= dark page header

                .shadow-before-1 	= shadow 1 header top
                .shadow-after-1 	= shadow 1 header bottom
                .shadow-before-2 	= shadow 2 header top
                .shadow-after-2 	= shadow 2 header bottom
                .shadow-before-3 	= shadow 3 header top
                .shadow-after-3 	= shadow 3 header bottom
                .light			= light page header
        -->

    <?php include_once get_page_header(); ?>
    <!-- /PAGE HEADER -->


    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <?= $view; ?>

            </div>


            <!-- PAGINATION -->
            <ul class="pager">
                <li class="previous"><a class="radius-0" href="#">&larr; Older</a></li>
                <li class="next"><a class="radius-0" href="#">Newer &rarr;</a></li>
            </ul>
            <!-- /PAGINATION -->

        </div>
    </section>
    <!-- / -->
    <?php \App\Utilities\FlashMessage::show_messages(); ?>

    <!-- FOOTER -->
    <?php include_once theme_path('partials|footer.php', 'one') ?>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">
    var plugin_path = '<?= assets("plugins/"); ?>';
</script>
<script type="text/javascript" src="<?= assets('plugins/jquery/jquery-2.1.4.min.js') ?>"></script>

<script type="text/javascript" src="<?= assets('js/scripts.js') ?>"></script>

<!-- STYLESWITCHER - REMOVE -->
<!-- <script async type="text/javascript" src="'plugins/styleswitcher/styleswitcher.js' "></script> -->

<!-- SWIPE SLIDER -->
<script type="text/javascript" src="<?= assets('plugins/slider.swiper/dist/js/swiper.min.js') ?>"></script>
<script type="text/javascript" src="<?= assets('js/view/demo.swiper_slider.js') ?>"></script>
<script type="text/javascript">

    /**
     Checkbox on "I agree" modal Clicked!
     **/
    jQuery("#terms-agree").click(function () {
        jQuery('#termsModal').modal('toggle');

        // Check Terms and Conditions checkbox if not already checked!
        if (!jQuery("#checked-agree").checked) {
            jQuery("input.checked-agree").prop('checked', true);
        }

    });

    $('.flash-message').click(function() {
        $(this).fadeOut();
    });
</script>
</body>

</html>