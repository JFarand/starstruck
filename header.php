<style>

@media screen and (max-device-width: 480px) {
  html {
    -moz-text-size-adjust: none;
    width: 100%;
  }


    body {
      min-width: 480px;
      /*max-width: 480px;*/
      width: 100%;
      overflow-x: hidden;

    }

    div#wrapper {
      min-width: 96% !important;
    }

    header#header {
      flex-direction: column;
      height: 300px !important;
      padding-top: 33px;
    }

    section#branding {
      width: 100% !important;
    }

    div.social_bank {
      display: none;
    }

    nav#menu {
      height: 102px;
      width: 100% !important;
      display: flex;
      flex-wrap: wrap;
      flex-basis: 100% !important;
      flex-grow: 0 !important;
      padding-left: 0 !important;
    }

    div.menu-home-container ul#menu-home {
      display: flex;
      width: 69% !important;
      flex-wrap: wrap;
      height: 171px;
      justify-content: center;
    }

    nav#menu div ul li a {
      padding: 6px !important;
      font-size: 30px !important;
      /*border: 3px solid #000;*/
      border-radius: 34%;
      margin-left: 6px;
      background-color: #eee;
    }



    div#featured {
      left: -150px;
    }

    span.home_quote {
      width: 69% !important;
    }

    span.home_quote h2 {
      font-size: 42px;
    }

    div#descriptions_wrapper {
      flex-direction: column;
      justify-content: center;
      width: 63%;
    }

    span.blocks_heading h3 {
      font-size: 27px !important;
    }

    span.blurb_content, div#offerings, div#upcoming {
      font-size: 24px;
      /*padding: 12px;*/
      line-height: 1.5;
    }

    footer#footer div#footer_info {
      flex-direction: column;
      justify-content: center;
      font-size: 24px;
    }

    footer#footer div#footer_info h3 {
      font-size: 27px;
    }

    div.footer_about_img {
      display: block;
      width: 100% !important;
      height: 100% !important;
    }

    footer#footer div#footer_info > div:nth-child(2) {
      margin-left: 0 !important;
      padding-left: 0 !important;
    }
}


    header#header {
        display: flex;
        width: 100% !important;
        height: 75px;
        border-bottom: 1px solid #efefef;
        margin-bottom: 12px;
    }

    div#site-title {
      display: block;
      width: 300px;
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
