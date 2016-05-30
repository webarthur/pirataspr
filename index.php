<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" layout="clear v-padding-20">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

      <div layout="left right-15">
        <?php // Check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('thumb');
        }  ?>
      </div>

			<div text=".8em">
        <?php posted_on(); ?>
      </div>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata" text=".8em">
				<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
				<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> |
				<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
			</footer>

		</article>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
