<div class='flash-messages'>
    <?php
    use App\Utilities\FlashMessage;
    foreach($flash_messages as $fm) : ?>
    <div class="flash-message <?= FlashMessage::get_css_class($fm->type) ?>">
        <?= $fm->msg ?>
    </div>


    <?php endforeach;  ?>
</div>