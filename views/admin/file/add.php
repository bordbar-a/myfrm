<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>افزودن فایل</h1>
        <ol class="breadcrumb">
            <li><a href="#">فایل</a></li>
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
                        <strong>فایل</strong>
                    </div>

                    <div class="panel-body">
                        <a href="<?= admin_url('file/list'); ?>">
                            <button type="button" class="btn btn-primary btn-lg margin-bottom-30">‌لیست فایل‌ها</button>
                        </a>
                        <form action="<?= admin_url('file/save') ?>" method="post" enctype="multipart/form-data"
                              data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
                            <fieldset>
                                <!-- required [php action request] -->
                                <!-- <input type="hidden" name="action" value="contact_send"> -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>عنوان</label>
                                            <input type="text" name="title" value="" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>نوع فایل</label>
                                            <input type="text" name="type" value="" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>موضوع</label>
                                            <select class="form-control select2" name="category_id">
                                                <option value="0">دسته بندی مورد نظر را انتخاب کنید</option>
                                                <?php foreach ($categories as $category): ?>
                                                    <option value="<?= $category->id ?>"><?= $category->title; ?></option>
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
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>قیمت</label>
                                            <input type="text" name="price" value="" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>توضیحات</label>
                                            <textarea class="summernote form-control" name="description"
                                                      data-height="200"
                                                      data-lang="en-US"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>انتخاب فایل </label>
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="form-control" name="link"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>انتخاب تصویر بندانگشتی </label>
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="form-control" name="thumb"/>
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