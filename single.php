<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ribbon Lite
 */
$ribbon_lite_single_breadcrumb_section = get_theme_mod('ribbon_lite_single_breadcrumb_section', '1');
$ribbon_lite_single_tags_section = get_theme_mod('ribbon_lite_single_tags_section', '1');
$ribbon_lite_authorbox_section = get_theme_mod('ribbon_lite_authorbox_section', '1');
$ribbon_lite_relatedposts_section = get_theme_mod('ribbon_lite_relatedposts_section', '1');

get_header(); ?>

<div id="page" class="single">
	<div class="content">
		<!-- Start Article -->
		<article class="article">		
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
					<div class="single_post">
					    <div class="post-date-ribbon"><div class="corner"></div><div class="corner-title"><?php the_category(', '); ?></div>
						</div>
					    
						<header>
							<!-- Start Title -->
							<h1 class="title single-title"><?php the_title(); ?></h1>
							<!-- End Title -->
							<!-- Start Post Meta -->
							<!-- End Post Meta -->
						</header>
						<!-- Start Content -->
						<div id="content" class="post-single-content box mark-links">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>', 'link_before'  => '<span class="current"><span class="currenttext">', 'link_after' => '</span></span>', 'next_or_number' => 'next_and_number', 'nextpagelink' => __('Next', 'ribbon-lite' ), 'previouspagelink' => __('Previous', 'ribbon-lite' ), 'pagelink' => '%','echo' => 1 )); ?>
							<?php if($ribbon_lite_single_tags_section == '1') { ?>
								<!-- Start Tags -->
								<div class="tags"><?php the_tags('<span class="tagtext"><i class="ribbon-icon icon-bookmark"></i>'.__('','ribbon-lite').'</span>',', ') ?></div>
								<!-- End Tags -->
							<?php } ?>
						</div><!-- End Content -->
						
						
						
					</div>
				</div>
			<?php endwhile; ?>
		</article>
		<!-- End Article -->
		<!-- Start Sidebar -->
		<?php get_sidebar(); ?>
		<!-- End Sidebar -->
	</div>
</div>
<?php get_footer(); ?>
