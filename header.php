<style>
    header#header {
        display: flex;
        width: 100%;
        height: 75px;
        border-bottom: 1px solid #efefef;
        margin-bottom: 12px;
    }

    nav#menu {
        flex-grow: 1;
        padding-top: 24px;
        padding-left: 12px;
    }

    nav#menu div ul li {
        display: inline-block;
    }

    nav#menu div ul li a {
        text-decoration: none;
        font-size: 12px;
        color: #1d1d1d;
        padding: 8px 7px 7px;
    }

    nav#menu div ul li.current_page_item a {
        color: #758b8d;
        font-style: italic;
        font-family: Georgia, serif;
    }
</style>
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php get_template_part('MRG_logo'); ?></div>

</section>
<nav id="menu" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
