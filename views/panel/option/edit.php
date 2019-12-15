<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش تنظیمات</h1>
        <ol class="breadcrumb">
            <li><a href="#">تنظیمات</a></li>
            <li class="active">ویرایش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">
                <a href="<?= admin_url('option/list'); ?>">
                    <button type="button" class="btn btn-primary btn-lg margin-bottom-30 ">‌لیست تنظیمات</button>
                </a>
                <a href="<?= admin_url('option/delete?id='. $option->id); ?>">
                    <button type="button" class="btn btn-danger btn-lg margin-bottom-30 margin-right-30">حذف این تنظیم</button>
                </a>
                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>ویرایش تنظیمات</strong>
                    </div>

                    <div class="panel-body">
    <?= $option->key ?? '' ?>
                        <form action="<?= admin_url("option/update?id={$option->id}") ?>" method="post" enctype="multipart/form-data"
                            data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
                            <fieldset>
                                <!-- required [php action request] -->
                                <!-- <input type="hidden" name="action" value="contact_send"> -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>کلید</label>
                                            <input type="text" name="key" value="<?= $option->key ?? '' ?>" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>مقدار</label>
                                            <input type="text" name="value" value="<?= $option->value ?? '' ?>" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>دسته</label>
                                            <input type="text" name="category" value="<?= $option->category ?? '' ?>"
                                                   class="form-control required">
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