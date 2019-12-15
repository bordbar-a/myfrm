<section id="middle">
    <!-- page title -->
    <header id="page-header">
        <h1>لیست کاربران</h1>
        <ol class="breadcrumb">
            <li><a href="#">کاربر</a></li>
            <li class="active">لیست</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="table-responsive">
       <a href="<?= admin_url('user/add'); ?>"> <button type="button" class="btn btn-primary btn-lg margin-bottom-30">افزودن کاربر</button></a>
            <table class="table table-bordered nomargin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>نقش</th>
                        <th>شارژ کیف پول</th>
                        <th>آخرین بروز رسانی</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user->id; ?></td>
                        <td><?= $user->name; ?></td>
                        <td><?= $user->lastname; ?></td>
                        <td><?= $user->email; ?></td>
                        <td><?= $user->role; ?></td>
                        <td><?= $user->wallet; ?></td>
                        <td><?= $user->updated_at; ?></td>
                        <td>
                            <a href="<?= admin_url("user/edit?id=$user->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
                            <a href="<?= admin_url("user/delete?id=$user->id"); ?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
                        </td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>