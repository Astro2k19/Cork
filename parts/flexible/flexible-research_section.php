
<?php if ( have_rows('researches') ) : ?>
<section class="research">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <?php while( have_rows('researches') ) : the_row();
                $research_group = get_sub_field('research_group_right');
                $research_content = get_sub_field('research_text');
            ?>
                <div class="large-6 small-12 cell">
                    <div class="research__item">
                        <?php if ($research_group) : ?>
                            <div class="research__item-percentage">
                                <p class="research__item-title"><?=$research_group['research_country']?></p>
                                <span><?=$research_group['research_percents'];?></span>
                            </div>
                        <?php endif ?>
                        <?php if ($research_content) : ?>
                            <div class="research__item-content">
                                <?=$research_content?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php endif ?>
