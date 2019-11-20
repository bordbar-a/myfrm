<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>لیست تگ‌ها</h1>
        <ol class="breadcrumb">
            <li><a href="#">تگ</a></li>
            <li class="active">لیست</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="table-responsive">
       <a href="<?= admin_url('tag/add'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">افزودن تگ</button></a>
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
                    foreach ($tags as $tag): ?>
                    <tr>
                        <td><?= $tag->id; ?></td>
                        <td><?= $tag->title; ?></td>
                        <td><?= $tag->slug; ?></td>
                        <td>
                            <a href="<?= admin_url("tag/edit?id=$tag->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
                            <a href="<?= admin_url("tag/delete?id=$tag->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
                        </td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>