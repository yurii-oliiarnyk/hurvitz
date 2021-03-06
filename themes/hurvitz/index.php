<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hurvitz
 */

get_header();

get_template_part('template-parts/content', 'breadcrumbs');

?>

<div class="hr-blog">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="hr-blog__list">
				<div class="row">
					<div class="col-12 col-md-9">
						<?php
							get_template_part('template-parts/content', 'description');
						?>
						<div class="hr-blog__posts">
							<?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'blog' );
							endwhile; ?>
						</div>
						<?php if (paginate_links()) { ?>
							<div class="hr-blog__pagination">
								<?php echo paginate_links(); ?>
							</div>
						<?php } ?>
					</div>
					<div class="col-12 col-md-3 sidebar">
						<?php if ( !dynamic_sidebar('sidebar') ) {

						} ?>
					</div>
				</div>
			</div>
		<?php endif;
		?>
	</div>
</div>


<?php get_footer(); ?>
