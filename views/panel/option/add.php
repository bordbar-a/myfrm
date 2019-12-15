<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>افزودن تنظیمات</h1>
        <ol class="breadcrumb">
            <li><a href="#">تنظیمات</a></li>
            <li class="active">افزودن</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>افزودن تنظیمات</strong>
                    </div>

                    <div class="panel-body">
                        <a href="<?= admin_url('option/list'); ?>">
                            <button type="button" class="btn btn-primary btn-lg margin-bottom-30">‌لیست تنظیمات</button>
                        </a>
                        <form action="<?= admin_url('option/save') ?>" method="post" enctype="multipart/form-data"
                              data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
                            <fieldset>
                                <!-- required [php action request] -->
                                <!-- <input type="hidden" name="action" value="contact_send"> -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>کلید</label>
                                            <input type="text" name="key" value="" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>مقدار</label>
                                            <input type="text" name="value" value="" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>موضوع</label>
                                            <select class="form-control select2" name="category">
                                                <option value="default">دسته بندی مورد نظر را انتخاب کنید</option>
                                                <?php foreach ($optionCats as $category): ?>
                                                    <option value="<?= $category ?>"><?= $category ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                            <!--
                                                .fancy-arrow
                                                .fancy-arrow-double
                                            -->
                                            <i class="fancy-arrow-"></i>


                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row">
                                <div class="col-md-3 ">
                                    <button type="submit" class="btn btn-primary margin-top-30 ">افزودن</button>
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