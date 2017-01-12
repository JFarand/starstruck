<?php get_template_part('head'); ?>
    <div id="wrapper" class="hfeed">
    <style>


        header.header {
            position: relative;
            width: 100%;
            border-bottom: 1px solid rgb(239, 239, 239);
            margin-bottom: 24px;
            text-align: center;
        }
    </style>
<?php get_header(); ?>
    <div id="container">
      <?php get_template_part( 'social_bank' ); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
    </div><!--close container-->
    </div><!--close wrapper-->
<?php get_footer(); ?>
