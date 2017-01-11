<style>
    footer#footer {
       background-image: url('http://objektplugg.com/staging/wp-content/themes/trejmom/img/footer-bg.png');
        width: 100%;
        box-sizing: border-box;
        -webkit-box-shadow: 0px 3px 12px 3px rgba(0,0,0,.3);
        -moz-box-shadow: 0px 3px 12px 3px rgba(0,0,0,.3);
        box-shadow: 0px 3px 12px 3px rgba(0,0,0,.3);
    }

    footer#footer div#footer_info {
        display: flex;
        position: relative;
        width: 72%;
        margin: 0 auto;
        border-bottom: 1px solid #efefef;
        margin-bottom: 21px;
        line-height: 2;
    }

    footer#footer div#footer_info > div:nth-child(2) {
        margin-left: 12px;
        padding-left: 18px;
    }

    footer#footer div#footer_info > div {
        flex: 1;
        color: #a6a6a6;
        margin-right: 12px;
    }

    div.footer_about_header {
        width: 250px;
    }

    div.footer_about_img {
        display: inline-block;
        position: relative;
        width: 50px;
        height: 50px;
        float: left;
        margin-right: 3px;
    }

    span.footer_about_content {
        display: inline-block;
        width: 72%;
    }

    div#copyright {
        display: flex;
        width: 100%;
        height: 66px;
        padding-top: 12px;
    }

    nav#footer_menu {
        flex-grow:1;
    }

    span.credits {
        flex-shrink: 1;
    }

    div#copyright  nav#footer_menu ul li {
        display: inline-block;
    }

    div#copyright  nav#footer_menu ul li a {
        text-decoration: none;
        font-size: 12px;
        color: #7a7a7a;
        text-shadow: 1px 1px 1px #fff;
        padding: 8px 7px 7px;
    }

    div#copyright span.credits {
        text-align: right;
        font-size: 10px;
        color: rgba(0,0,0, .3);
    }

    div#footer_recent h3, div#footer_categories h3 {
        font-family: 'josefin_sansbold';
        font-size: 15px;
        color: #808080;
        letter-spacing: -1px;
        line-height: 1em;
        padding-top: 12px;
        margin-bottom: 9px;
    }

    div#footer_recent ul.recent_post li a {
        color: #a6a6a6;
    }

    div#footer_categories ul.categories li a {
        color: #a6a6a6;
    }
</style>
<footer id="footer" role="contentinfo">
    <div id="footer_info">
        <div id="footer_about">
            <div class="footer_about_header"><?php get_template_part('MRG_logo_light'); ?></div>
            <div class="footer_about_author">
                <div class="footer_about_img">
                    <img class="" src="http://melindargraham.com/wp-content/uploads/2016/03/mrg2-196x300.jpg" alt="mrg2" width="100%" height="100%" srcset="http://melindargraham.com/wp-content/uploads/2016/03/mrg2-196x300.jpg 196w, http://melindargraham.com/wp-content/uploads/2016/03/mrg2-768x1174.jpg 768w, http://melindargraham.com/wp-content/uploads/2016/03/mrg2-670x1024.jpg 670w, http://melindargraham.com/wp-content/uploads/2016/03/mrg2-1200x1835.jpg 1200w, http://melindargraham.com/wp-content/uploads/2016/03/mrg2.jpg 1300w" sizes="(max-width: 196px) 85vw, 196px">
                </div>
                <span class="footer_about_content"><p>I am a Master Intuitive and Reiki Level II Practitioner that merged those skills to become a Spiritual Navigator</p></span>
            </div>
        </div>



        <div id="footer_recent">
            <h3>Recent Posts</h3>
            <ul class="recent_post">
                <?php
                $args = array( 'numberposts' => '3' );
                $recent_posts = wp_get_recent_posts($args);
                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                }
                wp_reset_query();
                ?>
            </ul>
        </div>



        <div id="footer_categories">
            <h3>Categories</h3>
            <ul class="categories">
                <?php wp_list_categories( array(
                    'orderby' => 'name',
                    'title_li' => '',
                    'number' => 3
                ) ); ?>
            </ul>
        </div>



    </div>
<div id="copyright">
    <nav id="footer_menu" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
    <span class="credits">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://jayfarand.com/">J. Farand</a>' ); ?>
</span>
</div>
</footer>
<!--<script type="text/javascript" src="<?php /*echo get_stylesheet_directory_uri(); */?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php /*echo get_stylesheet_directory_uri(); */?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php /*echo get_stylesheet_directory_uri(); */?>/js/custom.js"></script>
-->
<?php wp_footer(); ?>
</body>
</html>