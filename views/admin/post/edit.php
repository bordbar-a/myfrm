<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش پست</h1>
        <ol class="breadcrumb">
            <li><a href="#">پست</a></li>
            <li class="active">ویرایش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>پست</strong>
                    </div>

                    <div class="panel-body">


                        <a href="<?= admin_url('post/list'); ?>">
                            <button type="button" class="btn btn-primary btn-lg margin-bottom-30">‌لیست پست‌ها</button>
                        </a>
                        <div class="row pull-right">
                            <div class="col-md-8">
                                <form action="<?= admin_url('post/update?id=' . $post->id) ?>" method="post"
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
                                                    <input type="text" name="title" value="<?= $post->title; ?>"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>محتوا</label>
                                                    <textarea class="summernote form-control" name="content"
                                                              data-height="200"
                                                              data-lang="en-US"><?= $post->content; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>انتخاب تصویر </label>
                                                    <i class="fa fa-upload"></i>
                                                    <input type="file" class="form-control" name="image"/>
                                                    <input type="hidden" class="form-control" name="hidden_image" value="<?= $post->image ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>انتخاب تصویر بندانگشتی </label>
                                                    <i class="fa fa-upload"></i>
                                                    <input type="file" class="form-control" name="thumb_image"/>
                                                    <input type="hidden" class="form-control" name="hidden_thumb" value="<?= $post->thumb_image ?>"/>
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
                                                            <option value="<?= $category->id ?>" <?= $category->id == $post->category_id ? "selected" : "" ?>><?= $category->title; ?></option>
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
                                            <button type="submit" class="btn btn-primary margin-top-30 ">ویرایش</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div class="col-md-3">
                                <div class="row admin-edit-post-image">
                                    <label>عکس: </label>
                                    <img class="img-responsive" src="<?= $post->image ?>">
                                </div>
                                <div class="row admin-edit-post-image" >
                                    <label>بند انگشتی :</label>
                                    <img class="img-responsive" src="<?= $post->thumb_image ?>">
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