<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Smarty - Multipurpose + Admin</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
        rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="<?= assets("plugins/bootstrap/css/bootstrap.min.css") ;?>" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="<?= assets("css/essentials.css") ;?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets("css/layout.css") ;?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets("plugins/bootstrap/RTL/bootstrap-rtl.min.css") ;?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets("plugins/bootstrap/RTL/bootstrap-flipped.min.css") ;?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets("css/layout-RTL.css") ;?>" rel="stylesheet" type="text/css" />
    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?= assets("css/header-1.css") ;?>" rel="stylesheet" type="text/css" />
    <link href="<?= assets("css/color_scheme/green.css") ;?>" rel="stylesheet" type="text/css" id="color_scheme" />
</head>

<body class="smoothscroll enable-animation">

    <!-- wrapper -->
    <div id="wrapper">


        <!-- -->
        <section id="slider" class="fullheight dark">

            <div class="display-table">
                <div class="display-table-cell vertical-align-middle">
                    <div class="container">

                        <div class="row err-404-row">
                            <div class="text-center col-md-8 col-xs-12 col-md-offset-2">

                                <h1 class="fa fa-times size-100 theme-color hidden-xs"></h1>
                                <h2><strong>شما به این صفحه دسترسی ندارید</strong></h2>

                                <p>از کادر زیر می‌توانید جست‌وجو کنید.</p>

                            </div>

                            <div class="text-center col-md-4 col-xs-12 col-md-offset-4">
                                <!-- INLINE SEARCH -->
                                <div class="row">
                                    <a href="<?= site_url(); ?>"><button type="button" class="btn btn-success">صفحه اول</button><a>
                                </div>
                                <div class="inline-search clearfix inline-search-404">
                                    <form action="" method="get" class="widget_search">
                                        <input type="search" placeholder="تایپ کنید ..." id="s" name="s"
                                            class="serch-input">
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <!-- /INLINE SEARCH -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- / -->



        <!-- FOOTER -->
        <!-- <footer id="footer" class="sticky footer-err-404">

            <div class="copyright">
                <div class="container">
                    <ul class="pull-right nomargin list-inline mobile-block">
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li>&bull;</li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                    &copy; All Rights Reserved, Company LTD
                </div>
            </div>

        </footer> -->
        <!-- /FOOTER -->


    </div>
    <!-- /wrapper -->


    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div><!-- /PRELOADER -->


    <!-- JAVASCRIPT FILES -->

    <script type="text/javascript">
    var plugin_path = '<?= assets("plugins/") ;?>';
    </script>
    <script type="text/javascript" src="<?= assets("plugins/jquery/jquery-2.1.4.min.js") ;?>"></script>

    <script type="text/javascript" src="<?= assets("js/scripts.js") ;?>"></script>

    <!-- STYLESWITCHER - REMOVE -->

</body>

</html>