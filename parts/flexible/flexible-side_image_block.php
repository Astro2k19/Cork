<?php


/**
* @var int $index
*/

?>

<?php if ( have_rows('side_blocks') ) : ?>
    <?php while (have_rows('side_blocks')) : the_row();
        $image_side = get_sub_field('side_image');
        $side_type = get_sub_field('content_type_side_image');
        $side_content = get_sub_field('side_content');
        $index = get_row_index();
    ?>
        <section class="side-image">
            <div class="grid-container full">
                <div class="grid-x">
                    <div class="cell">
                        <?php if ( !empty($side_type) ) : ?>
                            <div class="side-image__wrapper overflow-image <?= $index % 2 != 0 ? 'reverse' : ''; ?>">
                        <?php else : ?>
                            <div class="side-image__wrapper <?= $index % 2 == 0 ? 'reverse' : ''; ?>">
                        <?php endif; ?>
                                <div class="side-image__img">
                                    <?= wp_get_attachment_image($image_side, 'large'); ?>
                                </div>
                                <div class="side-image__content">
                                    <?=$side_content;?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile ?>
<?php endif; ?>