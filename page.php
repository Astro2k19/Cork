<?php
/**
 * Template Name:  Page
 */

 ?>

<?php if ( is_front_page() ) { ?>

        <?php get_header();?>
        <!--HOME PAGE SLIDER-->
        <?php home_slider_template(); ?>
        <!--END of HOME PAGE SLIDER-->

<?php } else { ?>

    <?php get_header('pages'); ?>

    <?php if ( has_post_thumbnail()) : ?>
        <section class="hero bg-cover" <?php bg( get_the_post_thumbnail_url(), 'full_hd' ) ?> >
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell">
                        <?php if ( get_the_content() ) : ?>
                            <div class="hero__content">
                                <?php the_content()?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php } ?>

    <!-- BEGIN of main content -->
    <main class="page-content" id="page-content">
        <?php
        if (have_rows('page_content')) {
            $rows = [];
            $index = null;
            while ( have_rows('page_content') ) {
                the_row();

                show_template('flexible/flexible-' . get_row_layout());

            }
        }
        ?>
    </main>
    <!-- END of main content -->

<?php get_footer(); ?>