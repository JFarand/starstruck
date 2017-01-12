<style>
.social_bank {
  display: block;
  position: fixed;
  left: 0;
  width: 39px;
  background-color: #fff;
  border-right: 1px #aaa solid;
  border-top: 1px #aaa solid;
  border-bottom: 1px #aaa solid;
 padding-right: 3px;
 padding-top: 3px;
 border-top-right-radius: 1em;
 border-bottom-right-radius: 1em;

}

.social_bank > div {
  cursor: pointer;
}
</style>
<div class="social_bank">
  <div class="social_bank__twitter">
      <?php get_template_part( 'MRG_Twitter' ); ?>
  </div>
  <div class="social_bank__facebook">
      <?php get_template_part( 'MRG_Facebook' ); ?>
  </div>
  <div class="social_bank__instagram">
      <?php get_template_part( 'MRG_Instagram' ); ?>
  </div>
</div>

<script>
var twitter = document.querySelector(".social_bank__twitter"),
    facebook = document.querySelector(".social_bank__facebook"),
    instagram = document.querySelector(".social_bank__instagram");

twitter.onclick = function(){
     location.href = "http://twitter.com/mrgrahamco";
}

facebook.onclick = function(){
     location.href = "http://facebook.com/mrgrahamco";
}

instagram.onclick = function(){
     location.href = "http://instagram.com/mrgrahamco";
}

</script>
