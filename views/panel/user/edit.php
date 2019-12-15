<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش کاربر</h1>
        <ol class="breadcrumb">
            <li><a href="#">کاربر</a></li>
            <li class="active">ویرایش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">
                <a href="<?= admin_url('user/list'); ?>">
                    <button type="button" class="btn btn-primary btn-lg margin-bottom-30 ">‌لیست کاربر‌ها</button>
                </a>
                <a href="<?= admin_url('user/delete?id=' . $user->id); ?>">
                    <button type="button" class="btn btn-danger btn-lg margin-bottom-30 margin-right-30">حذف این کاربر
                    </button>
                </a>
                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>ویرایش کاربر</strong>
                        <span><?= $user->email ?? '' ?></span>
                    </div>

                    <div class="panel-body">

                        <form action="<?= admin_url("user/update?id={$user->id}") ?>" method="post"
                              enctype="multipart/form-data"
                              data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
                            <fieldset>
                                <!-- required [php action request] -->
                                <!-- <input type="hidden" name="action" value="contact_send"> -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام</label>
                                            <input type="text" name="name" value="<?= $user->name ?? '' ?>"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام خانوادگی</label>
                                            <input type="text" name="lastname" value="<?= $user->lastname ?? '' ?>"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ایمیل</label>
                                            <input type="text" name="email" value="<?= $user->email ?? '' ?>"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>شماره تلفن</label>
                                            <input type="text" name="phonenumber" value="<?= $user->phonenumber ?? '' ?>"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>شارژ کیف پول</label>
                                            <input type="text" name="wallet" value="<?= $user->wallet ?? '' ?>"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="switch switch-info switch-round">
                                                <input type="checkbox" name="news" value="1" <?= $user->news ? "checked" : '' ?>>
                                                عضو خبرنامه می‌باشد ؟
                                                <span class="switch-label" data-on="بله" data-off="خیر"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row">
                                <div class="col-md-3 ">
                                    <button type="submit" class="btn btn-primary margin-top-30 ">ویرایش</button>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
                <!-- /----- -->

            </div>
        </div>
    </div>
</section>