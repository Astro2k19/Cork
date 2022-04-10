
<?php
$bg_image = get_sub_field('background_image');
$bg_image = bg($bg_image, 'large', false);
?>
<?php if ($bg_image) : ?>
    <section class="background-image bg-cover" <?=$bg_image?>>
<?php else : ?>
    <section class="background-image empty bg-cover">
<?php endif; ?>
        <div class="grid-container">
            <div class="grid-x">
                <?php if ($bg_content = get_sub_field('background_image_content')) : ?>
                    <?php if ( get_sub_field('content_type_background_image') ) : ?>
                        <div class="medium-6 medium-offset-6 cell">
                            <div class="background-image__content-right">
                    <?php else : ?>
                        <div class="cell">
                            <div class="background-image__content text-center">
                    <?php endif; ?>
                             <?=$bg_content?>
                            </div>
                        </div>
                <?php endif ?>
            </div>
        </div>
    </section>
