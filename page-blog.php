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
              <header class="header">
              <h1 class="entry-title">Blog</h1>
              </header>
              <?php $args = array(
                    'post_type' => 'post',
                    'showposts' => '9'
                  ); ?>
              <?php // The Query
              $the_blog = new WP_Query( $args );
              ?>
              <?php if ( $the_blog->have_posts() ) : while ( $the_blog->have_posts() ) : $the_blog->the_post(); ?>
              <?php get_template_part( 'entry' ); ?>
              <?php endwhile; endif; ?>
              <?php wp_reset_postdata(); ?>

              <?php get_template_part( 'nav', 'below' ); ?>

            </section>
        </div><!--close container-->
    </div><!--close wrapper-->
<?php get_footer(); ?>
