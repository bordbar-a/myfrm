<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش دسته بندی</h1>
        <ol class="breadcrumb">
            <li><a href="#">دسته بندی</a></li>
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
                        <strong>ویرایش دسته بندی</strong>
                    </div>

                    <div class="panel-body">
    <?= $category->title ?? '' ?>
                        <form action="<?= admin_url("category/update?id={$category->id}") ?>" method="post" enctype="multipart/form-data"
                            data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
                            <fieldset>
                                <!-- required [php action request] -->
                                <!-- <input type="hidden" name="action" value="contact_send"> -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>عنوان</label>
                                            <input type="text" name="title" value="<?= $category->title ?? '' ?>" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>slug</label>
                                            <input type="text" name="slug" value="<?= $category->slug ?? '' ?>" class="form-control required">
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