<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش تگ</h1>
        <ol class="breadcrumb">
            <li><a href="#">تگ</a></li>
            <li class="active">ویرایش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">
                <a href="<?= admin_url('tag/list'); ?>">
                    <button type="button" class="btn btn-primary btn-lg margin-bottom-30 ">‌لیست تگ‌ها</button>
                </a>
                <a href="<?= admin_url('tag/delete?id='. $tag->id); ?>">
                    <button type="button" class="btn btn-danger btn-lg margin-bottom-30 margin-right-30">حذف این تگ</button>
                </a>
                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>ویرایش تگ</strong>
                    </div>

                    <div class="panel-body">
    <?= $tag->title ?? '' ?>
                        <form action="<?= admin_url("tag/update?id={$tag->id}") ?>" method="post" enctype="multipart/form-data"
                            data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
                            <fieldset>
                                <!-- required [php action request] -->
                                <!-- <input type="hidden" name="action" value="contact_send"> -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>عنوان</label>
                                            <input type="text" name="title" value="<?= $tag->title ?? '' ?>" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>slug</label>
                                            <input type="text" name="slug" value="<?= $tag->slug ?? '' ?>" class="form-control required">
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