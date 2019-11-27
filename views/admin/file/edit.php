<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش فایل</h1>
        <ol class="breadcrumb">
            <li><a href="#">فایل</a></li>
            <li class="active">ویرایش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">
            <a href="<?= admin_url('file/list'); ?>">
                <button type="button" class="btn btn-primary btn-lg margin-right-30 margin-bottom-30">‌لیست فایل‌ها
                </button>
            </a>
            <a href="<?= admin_url('file/delete?id=' . $file->id); ?>">
                <button type="button" class="btn btn-danger btn-lg margin-right-30 margin-bottom-30">‌حذف این فایل
                </button>
            </a>
            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>فایل</strong>
                    </div>

                    <div class="panel-body">


                        <div class="row pull-left">
                            <div class="col-md-8">
                                <form action="<?= admin_url('file/update?id=' . $file->id) ?>" method="post"
                                      enctype="multipart/form-data"
                                      data-success="Sent! Thank you!" data-toastr-position="top-right"
                                      novalidate="novalidate">
                                    <fieldset>
                                        <!-- required [php action request] -->
                                        <!-- <input type="hidden" name="action" value="contact_send"> -->

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>عنوان</label>
                                                    <input type="text" name="title" value="<?= $file->title; ?>"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>نوع فایل</label>
                                                    <input type="text" name="type" value="<?= $file->type; ?>"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>قیمت</label>
                                                    <input type="text" name="price" value="<?= $file->price; ?>"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>موضوع</label>
                                                    <select class="form-control select2" name="category_id">
                                                        <option value="0">دسته بندی مورد نظر را انتخاب کنید</option>
                                                        <?php foreach ($categories as $category): ?>
                                                            <option value="<?= $category->id ?>" <?= $category->id == $file->category_id ? "selected" : "" ?>><?= $category->title; ?></option>
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
                                                <div class="col-md-12 col-sm-12">
                                                    <label>توضیحات</label>
                                                    <textarea class="summernote form-control" name="description"
                                                              data-height="200"
                                                              data-lang="en-US"><?= $file->description; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>انتخاب فایل </label>
                                                    <i class="fa fa-upload"></i>
                                                    <input type="file" class="form-control" name="file"/>
                                                    <input type="hidden" class="form-control" name="hidden_image"
                                                           value="<?= $file->image ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>انتخاب تصویر بندانگشتی </label>
                                                    <i class="fa fa-upload"></i>
                                                    <input type="file" class="form-control" name="thumb"/>
                                                    <input type="hidden" class="form-control" name="hidden_thumb"
                                                           value="<?= $file->thumb ?>"/>
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
                            <div class="col-md-3 margin-right-20">
                                <div class="row admin-edit-post-image">
                                    <label>عکس: </label>
                                    <a class="btn btn-info margin-right-30r" href="<?= $file->link ?>">
                                        دانلود فایل
                                    </a>
                                </div>
                                <div class="row admin-edit-post-image">
                                    <label>بند انگشتی :</label>
                                    <img class="img-responsive" src="<?= $file->thumb ?>">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /----- -->

            </div>
        </div>
    </div>
</section>