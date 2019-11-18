<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>صفحه خالی و آزاد</title>
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- WEB FONTS -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext"
        rel="stylesheet" type="text/css" />



    <!-- CORE CSS -->
    <link href="<?= assets_admin("plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />


    <!-- THEME CSS -->
    <link href="<?= assets_admin("css/essentials.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets_admin("css/layout.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets_admin("css/color_scheme/green.css"); ?>" rel="stylesheet" type="text/css"
        id="color_scheme" />
    <link href="<?= assets_admin("plugins/bootstrap/RTL/bootstrap-rtl.min.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets_admin("plugins/bootstrap/RTL/bootstrap-flipped.min.css"); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?= assets_admin("css/layout-RTL.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets_admin("css/style.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<!--
		.boxed = boxed version
	-->

<body>


    <!-- WRAPPER -->
    <div id="wrapper">

        <!-- 
				ASIDE 
				Keep it outside of #wrapper (responsive purpose)
			-->
        <?php include "partials/aside.php" ?>
        <!-- /ASIDE -->


        <!-- HEADER -->
        <header id="header">

            <!-- Mobile Button -->
            <button id="mobileMenuBtn"></button>

            <!-- Logo -->
            <span class="logo pull-left">
                <a href="<?= site_url(); ?>"> <button type="button" class="btn btn-info btn-sm">صفحه اصلی
                        سایت</button></a>

            </span>

            <form method="get" action="page-search.html" class="search pull-left hidden-xs">
                <input type="text" class="form-control" name="k" placeholder="جستجو در سایت ..." />
            </form>

            <nav>

                <!-- OPTIONS LIST -->
                <ul class="nav pull-right">

                    <!-- USER OPTIONS -->
                    <li class="dropdown pull-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-close-others="true">
                            <img class="user-avatar" alt="" src="assets/images/noavatar.jpg" height="34" />
                            <span class="user-name">
                                <span class="hidden-xs">
                                    کاربر ادمین <i class="fa fa-angle-down"></i>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu hold-on-click">
                            <li>
                                <!-- my calendar -->
                                <a href="calendar.html"><i class="fa fa-calendar"></i> تقویم کاربری</a>
                            </li>
                            <li>
                                <!-- my inbox -->
                                <a href="#"><i class="fa fa-envelope"></i> صندوق ورودی
                                    <span class="pull-right label label-default">10</span>
                                </a>
                            </li>
                            <li>
                                <!-- settings -->
                                <a href="page-user-profile.html"><i class="fa fa-cogs"></i> تنظیمات</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <!-- lockscreen -->
                                <a href="page-lock.html"><i class="fa fa-lock"></i> قفل صفحه</a>
                            </li>
                            <li>
                                <!-- logout -->
                                <a href="page-login.html"><i class="fa fa-power-off"></i> خروج</a>
                            </li>
                        </ul>
                    </li>
                    <!-- /USER OPTIONS -->

                </ul>
                <!-- /OPTIONS LIST -->

            </nav>

        </header>
        <!-- /HEADER -->


        <!-- 
				MIDDLE 
			-->
        <?=  $view; ?>
		<!-- /MIDDLE -->
		
		<?php \App\Utilities\FlashMessage::show_messages(); ?>
    </div>

   




    <!-- JAVASCRIPT FILES -->


    <script type="text/javascript">
    var plugin_path = '<?= assets_admin("plugins/") ?>';
    </script>
    <script type="text/javascript" src="<?= assets_admin("plugins/jquery/jquery-2.1.4.min.js") ?>"></script>
    <script type="text/javascript" src="<?= assets_admin("js/app.js") ?>"></script>
    <script>
    $('.flash-message').click(function() {
        $(this).fadeOut();
    });
    </script>
</body>

</html>