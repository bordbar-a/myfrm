<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>افزودن پست</h1>
        <ol class="breadcrumb">
            <li><a href="#">پست</a></li>
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
                        <strong>پست</strong>
                    </div>

                    <div class="panel-body">
                    <a href="<?= admin_url('post/list'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">‌لیست پست‌ها</button></a>
                        <form action="<?= admin_url('post/save') ?>" method="post" enctype="multipart/form-data"
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
                                            <label>محتوا</label>
                                            <textarea class="summernote form-control" name="content" data-height="200" data-lang="en-US"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10 col-sm-10">
                                            <label>موضوع</label>
                                            <input type="text" name="category_id" value="" class="form-control required">
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