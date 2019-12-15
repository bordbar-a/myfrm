<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>لیست تنظیمات</h1>
        <ol class="breadcrumb">
            <li><a href="#">تنظیمات</a></li>
            <li class="active">لیست</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="table-responsive">
       <a href="<?= admin_url('option/add'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">افزودن تنظیمات</button></a>
            <table class="table table-bordered nomargin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>کلید</th>
                        <th>مقدار</th>
                        <th>دسته</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($options as $option): ?>
                    <tr>
                        <td><?= $option->id; ?></td>
                        <td><?= $option->key; ?></td>
                        <td><?= $option->value; ?></td>
                        <td><?= $option->category; ?></td>
                        <td>
                            <a href="<?= admin_url("option/edit?id=$option->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
                            <a href="<?= admin_url("option/delete?id=$option->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
                        </td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>