<?php /* Template Name: Services*/ ?>
<?php get_header(); ?>

<div class="row" id="servicesTop">
  <div class="col-md-8 offset-md-2">
    <h1>ALL OUR SERVICES <br> NONE OF THE BUZZWORDS</h1>
  </div>
  <div class="row icon-wrapper">
    <div class="col-12">
      <div class="row top-icon-row">
        <div class="col-sm-2 offset-sm-1 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Website-Development.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Web-Development.png" alt="">
          <h5>WEB<br>DEVELOPMENT</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Search-Engine-Optimization.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Search-Engine-Optimization.png" alt="">
          <h5>SEARCH ENGINE<br>OPTIMIZATION</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Reputation-Management.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Reputation-Managment.png" alt="">
          <h5>REPUTATION<br>MANAGEMENT</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Creative-Design.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Creative-Design.png" alt="">
          <h5>CREATIVE AND<br>DESIGN</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Reporting-Analytics.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Reporting-Analytics.png" alt="">
          <h5>REPORTING &<br>ANALYTICS</h5>
        </div>
      </div>
      <div class="row bottom-icon-row">
        <div class="col-sm-2 offset-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Digital-Media-Buying.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Digital-Media-Buying.png" alt="">
          <h5>DIGITAL MEDIA<br>BUYING</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Premier-Partnerships.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Premier-Partnership.png" alt="">
          <h5>PREMIER<br>PARTNERSHIPS</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Online-Scheduling.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Online-Scheduling.png" alt="">
          <h5>UNIVERSAL<br>SCHEDULER</h5>
        </div>
        <div class="col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Directory-Listing.png" alt="">
          <img class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Directory-Listing.png" alt="">
          <h5>DIRECTORY<br>LISTINGS</h5>
        </div>
      </div>
    </div>
  </div>
  <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
</div>
<div class="row" id="serviceContent">
  <?php get_template_part( 'services/webdev'); ?>
</div>

<?php get_footer(); ?>
