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
            <li class="active">
                <!-- dashboard -->
                <a class="dashboard" href="<?= admin_url() ;?>">
                    <!-- warning - url used by default by ajax (if eneabled) -->
                    <i class="main-icon fa fa-dashboard"></i> <span>داشبورد</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-book"></i> <span>صفحات</span>
                </a>
                <ul>
                    <!-- submenus -->
                    <li><a href="page-invoice.html">صورت حساب</a></li>
                </ul>
            </li>
        </ul>

        <!-- SECOND MAIN LIST -->
        <h3>دیگر قسمت ها</h3>
        <ul class="nav nav-list">
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
        </ul>

    </nav>

    <span id="asidebg">
        <!-- aside fixed background --></span>
</aside>