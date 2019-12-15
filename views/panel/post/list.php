<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>لیست پست‌ها</h1>
        <ol class="breadcrumb">
            <li><a href="#">پست</a></li>
            <li class="active">لیست</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="table-responsive">
       <a href="<?= admin_url('post/add'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">افزودن پست‌ها</button></a>
            <table class="table table-bordered nomargin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>متن</th>
                        <th>موضوع</th>
                        <th>آخرین آپدیت</th>
                        <th>زمان ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $post->id; ?></td>
                        <td><?= $post->title; ?></td>
                        <td><?= $post->content; ?></td>
                        <td><?= $post->category_id; ?></td>
                        <td><?= $post->updated_at; ?></td>
                        <td><?= $post->created_at; ?></td>
                        <td>
                            <a href="<?= admin_url("post/edit?id=$post->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
                            <a href="<?= admin_url("post/delete?id=$post->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
                        </td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>