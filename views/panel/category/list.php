<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>لیست دسته‌بندی‌ها</h1>
        <ol class="breadcrumb">
            <li><a href="#">دسته بندی</a></li>
            <li class="active">لیست</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="table-responsive">
       <a href="<?= admin_url('category/add'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">افزودن دسته‌بندی</button></a>
            <table class="table table-bordered nomargin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>slug</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category->id; ?></td>
                        <td><?= $category->title; ?></td>
                        <td><?= $category->slug; ?></td>
                        <td>
                            <a href="<?= admin_url("category/edit?id=$category->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
                            <a href="<?= admin_url("category/delete?id=$category->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
                        </td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>