<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>لیست فایل‌ها</h1>
        <ol class="breadcrumb">
            <li><a href="#">فایل</a></li>
            <li class="active">لیست</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="table-responsive">
       <a href="<?= admin_url('file/add'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">افزودن فایل</button></a>
            <table class="table table-bordered nomargin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نوع</th>
                        <th>عنوان</th>
                        <th>موضوع</th>
                        <th>قیمت</th>
                        <th>توضیحات</th>
                        <th>تعداد لایک‌ها</th>
                        <th>آخرین آپدیت</th>
                        <th>زمان ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($files as $file): ?>
                    <tr>
                        <td><?= $file->id; ?></td>
                        <td><?= $file->type; ?></td>
                        <td><?= $file->title; ?></td>
                        <td><?= $file->category_id; ?></td>
                        <td><?= $file->price; ?></td>
                        <td><?= $file->description; ?></td>
                        <td><?= $file->likes; ?></td>
                        <td><?= $file->updated_at; ?></td>
                        <td><?= $file->created_at; ?></td>
                        <td>
                            <a href="<?= admin_url("file/edit?id=$file->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
                            <a href="<?= admin_url("file/delete?id=$file->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
                        </td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>