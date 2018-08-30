<?php /* Template Name: Portfolio */ ?>

<?php get_header(); ?>
<div class="row" id="portfolioTop">
  <div class="col-12">
    <h1>OUR WORK</h1>
  </div>
  <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
</div>
<div class="row" id="portfolioContent">
  <div class="col-12">
    <?php echo photo_gallery(1); ?>
  </div>
</div>
<?php get_footer(); ?>
