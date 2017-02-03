<style>
  div.description_block {
      display: block;
      position: relative;
      width: 60%;
  }

    span.home_quote {
        display: block;
        position: relative;
        text-align: center;
    }

    span.home_quote h2 {
        font-size: 36px;
    }
</style>
<article id="home_entry">
    <span class="home_quote"><h2>I believe everyone deserves to live an empowered life.</h2></span>
    <!--<div class="featured_block">-->
        <?php get_template_part('entry','home_featured'); ?>
    <!--</div>-->
    <div class="description_block">
        <?php get_template_part('entry','home_description'); ?>
    </div>
</article>
