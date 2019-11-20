<?php foreach ($posts as $post): ?>
<!-- POST ITEM -->
<div class="blog-post-item col-md-4 col-sm-4">

    <!-- IMAGE -->
    <figure class="margin-bottom-20">
        <img class="img-responsive" src="<?= $post->image ?>" alt="">
    </figure>

    <h2><a href="<?= site_url('single/post?id=' . $post->id) ?>"><?= $post->title ?></a></h2>

    <ul class="blog-post-info list-inline">
        <li>
            <a href="#">
                <i class="fa fa-clock-o"></i>
                <span class="font-lato"><?= $post->created_at ?></span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-comment-o"></i>
                <span class="font-lato">28</span>
            </a>
        </li>
    </ul>

    <?= $post->content ?>

    <a href="<?= site_url('single/post?id=' . $post->id) ?>" class="btn btn-reveal btn-default">
        <i class="fa fa-plus"></i>
        <span>خواندن بیشتر</span>
    </a>

</div>
<!-- /POST ITEM -->
<?php endforeach; ?>
