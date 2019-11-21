<aside id="aside">
    <!--
					Always open:
					<li class="active alays-open">

					LABELS:
						<span class="label label-danger pull-right">1</span>
						<span class="label label-default pull-right">1</span>
						<span class="label label-warning pull-right">1</span>
						<span class="label label-success pull-right">1</span>
						<span class="label label-info pull-right">1</span>
				-->
    <nav id="sideNav">
        <!-- MAIN MENU -->
        <ul class="nav nav-list">
            <!-- dashboard -->
            <li class="active">

                <a class="dashboard" href="<?= admin_url() ;?>">
                    <!-- warning - url used by default by ajax (if eneabled) -->
                    <i class="main-icon fa fa-dashboard"></i> <span>داشبورد</span>
                </a>
            </li>
            <!-- end  dashboard -->

            <!-- categories -->
            <li class="">

                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-th-list"></i> <span>تنظیمات</span>
                </a>
                <ul>
                    <!-- submenus -->
                    <li><a href="<?= admin_url('category/add'); ?>">افزودن</a></li>
                    <li><a href="<?= admin_url('category/list'); ?>">لیست تنظیمات</a></li>
                </ul>
            </li>
            <!-- end categories -->

            <!-- tags -->
            <li class="">

                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-th-list"></i> <span>تگ‌ها</span>
                </a>
                <ul>
                    <!-- submenus -->
                    <li><a href="<?= admin_url('tag/add'); ?>">افزودن</a></li>
                    <li><a href="<?= admin_url('tag/list'); ?>">لیست تگ‌ها</a></li>
                </ul>
            </li>
            <!-- end tags -->

            <!-- posts -->
            <li class="">

                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-th-list"></i> <span>پست‌ها</span>
                </a>
                <ul>
                    <!-- submenus -->
                    <li><a href="<?= admin_url('post/add'); ?>">افزودن پست</a></li>
                    <li><a href="<?= admin_url('post/list'); ?>">لیست پست‌‌ها</a></li>
                </ul>
            </li>
            <!-- end posts -->

            <!-- options -->
            <li class="">

                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-th-list"></i> <span>تنظیمات</span>
                </a>
                <ul>
                    <!-- submenus -->
                    <li><a href="<?= admin_url('option/add'); ?>">افزودن</a></li>
                    <li><a href="<?= admin_url('option/list'); ?>">لیست تنظیمات</a></li>
                </ul>
            </li>
            <!-- end options -->

        </ul>

        <!-- SECOND MAIN LIST -->
        <h3>دیگر قسمت ها</h3>
        <!-- <ul class="nav nav-list">
            <li>
                <a href="calendar.html">
                    <i class="main-icon fa fa-calendar"></i>
                    <span class="label label-warning pull-right">3 رویداد</span> <span>تقویم</span>
                </a>
            </li>
            <li>
                <a href="../../HTML/start.html">
                    <i class="main-icon fa fa-link"></i>
                    <span class="label label-danger pull-right">خانه</span> <span>مجموعه قالب ها</span>
                </a>
            </li>
        </ul> -->

    </nav>

    <span id="asidebg">
        <!-- aside fixed background --></span>
</aside>