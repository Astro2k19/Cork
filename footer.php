<?php
/**
 * Footer
 */
?>

<!-- BEGIN of footer -->
<footer class="footer">
	<div class="grid-container">
            <?php if ( have_rows('footer_columns', 'options') ) : ?>
                <div class="grid-x grid-margin-x flex-dir-column-reverse medium-flex-dir-row">
                    <div class="medium-11 cell">
                        <div class="grid-x grid-margin-x footer__columns">
                            <?php while ( have_rows('footer_columns', 'options') ) : the_row(); ?>
                                <div class="large-auto medium-5 small-6 cell" >
                                    <div class="footer__column-item text-center medium-text-left">
                                        <?php if ($column_title = get_sub_field('footer_column_title')) : ?>
                                            <p class="footer__column-title"><?=$column_title;?></p>
                                        <?php endif; ?>
                                        <?php if ( have_rows('footer_links', 'options') ) : ?>
                                            <ul class="footer__list">
                                                <?php while ( have_rows('footer_links', 'options') ) : the_row(); ?>
                                                    <?php if ( $footer_link = get_sub_field('footer_link') ) : ?>
                                                        <li class="footer__list-item">
                                                            <?php acf_link($footer_link);?>
                                                        </li>
                                                    <?php endif ?>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="medium-1 cell">
                        <div class="footer__socials">
                            <div class="page-up">
                                <img src="<?= get_template_directory_uri() . '/assets/images/pageup.png' ?>"  alt="">
                            </div>
                            <?php if ($email = get_field('email', 'options')) : ?>
                                <a href="@mailto:<?=$email?>" class="footer__email">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            <?php endif; ?>
                            <?php get_template_part('parts/socials'); // Social profiles ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
	</div>

	<?php if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
		<div class="footer__copy">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
                    <div class="cell">
                        <div class="footer__copy-wrapper">
                            <?php echo $copyright; ?>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>
