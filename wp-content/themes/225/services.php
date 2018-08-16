<?php /* Template Name: Services*/ ?>
<?php get_header(); ?>

<div class="row" id="servicesTop">
  <div class="col-md-8 offset-md-2">
    <h1>ALL OUR SERVICES <br> NONE OF THE BUZZWORDS</h1>
  </div>
  <div class="row icon-wrapper">
    <!-- desktop -->
    <div class="col-12 d-none d-sm-block">
      <div class="row top-icon-row">
        <div class="col-12 col-sm-2 offset-sm-1 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Website-Development.png" alt="">
          <img id="web-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Web-Development.png" alt="">
          <h5>WEB<br>DEVELOPMENT</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Search-Engine-Optimization.png" alt="">
          <img id="seo-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Search-Engine-Optimization.png" alt="">
          <h5>SEARCH ENGINE<br>OPTIMIZATION</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Reputation-Management.png" alt="">
          <img id="repman-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Reputation-Managment.png" alt="">
          <h5>REPUTATION<br>MANAGEMENT</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Creative-Design.png" alt="">
          <img id="cad-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Creative-Design.png" alt="">
          <h5>CREATIVE AND<br>DESIGN</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Reporting-Analytics.png" alt="">
          <img id="analytics-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Reporting-Analytics.png" alt="">
          <h5>REPORTING &<br>ANALYTICS</h5>
        </div>
      </div>
      <div class="row bottom-icon-row">
        <div class="col-12 col-sm-2 offset-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Digital-Media-Buying.png" alt="">
          <img id="media-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Digital-Media-Buying.png" alt="">
          <h5>DIGITAL MEDIA<br>BUYING</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Premier-Partnerships.png" alt="">
          <img id="partner-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Premier-Partnership.png" alt="">
          <h5>PREMIER<br>PARTNERSHIPS</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Online-Scheduling.png" alt="">
          <img id="scheduler-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Online-Scheduling.png" alt="">
          <h5>UNIVERSAL<br>SCHEDULER</h5>
        </div>
        <div class="col-12 col-sm-2 icon-div">
          <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Directory-Listing.png" alt="">
          <img id="directory-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Directory-Listing.png" alt="">
          <h5>DIRECTORY<br>LISTINGS</h5>
        </div>
      </div>
    </div>
    <!-- end of desktop -->
    <!-- mobile -->
    <div class="col-12 accordion-service d-block d-sm-none">
      <ul class="accordion">
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Website-Development.png" alt="">
            <img id="web-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Web-Development.png" alt="">
            <h5>WEB<br>DEVELOPMENT</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>WEB DEVELOPMENT</h1>
            <p>Your website says everything about you before the visitor has even read a word. Your website must be optimized for mobile, pictures must load fast, and pages must be designed to convert visitors into patients. Look below to see some before and after photos that demonstrate the difference between an effective website and a tragic waste of time.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="before-tab" data-toggle="tab" href="#before" role="tab" aria-controls="before" aria-selected="true">BEFORE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="after-tab" data-toggle="tab" href="#after" role="tab" aria-controls="after" aria-selected="false">AFTER</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="before" role="tabpanel" aria-labelledby="before-tab">
                <img class="before-img" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/bad-website.png" alt="">
              </div>
              <div class="tab-pane fade" id="after" role="tabpanel" aria-labelledby="after-tab">
                <img class="after-img" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/good-website.png" alt="">
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Search-Engine-Optimization.png" alt="">
            <img id="seo-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Search-Engine-Optimization.png" alt="">
            <h5>SEARCH ENGINE<br>OPTIMIZATION</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>SEARCH ENGINE OPTIMIZATION</h1>
            <p>More than 90% of aesthetic treatment research starts online. At least 52% of people start researching from their phone. By 2020, voice search will account for 50% of all questions potential patients are asking the Internet. We not only deliver current best search engine optimization practices, we help your practice stay on top of emerging technology. See the before and after images below to see what we are talking about.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="before2-tab" data-toggle="tab" href="#before2" role="tab" aria-controls="before2" aria-selected="true">BEFORE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="after2-tab" data-toggle="tab" href="#after2" role="tab" aria-controls="after2" aria-selected="false">AFTER</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="before2" role="tabpanel" aria-labelledby="before2-tab">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/seo-before.png" alt="">
              </div>
              <div class="tab-pane fade" id="after2" role="tabpanel" aria-labelledby="after2-tab">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/seo-after.png" alt="">
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Reputation-Management.png" alt="">
            <img id="repman-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Reputation-Managment.png" alt="">
            <h5>REPUTATION<br>MANAGEMENT</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>REPUTATION MANAGEMENT</h1>
            <p>Collect and curate patient reviews, then automatically publish them on top healthcare review sites. Practices that use ReviewHub™ get 8X more views.</p>
            <ul class="accordion">
              <li>
                <a class="toggle" href="javascript:void(0);">Increase reviews with a free in-practice laptop used exclusively for reviews
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>ReviewHub™ is designed and optimized to be the easiest interface for patients of all ages.</p>
                    </div>
                  </div>
                  <div class="before-wrapper">
                    <h3>Before</h3>
                    <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/review-hub-before.png" alt="">
                  </div>
                  <div class="after-wrapper">
                    <h3>After</h3>
                    <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/review-hub-after.png" alt="">
                  </div>
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Recent and 100% verified reviews
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>Most positive reviews happen when patients are still in the office. The ReviewHub™ increases the recency of the reviews. Plus, all evaluations that come through the ReviewHub™ are 100% verified through our filters and approved by a moderation team.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/recent-reviews.png" alt="">
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Web-wide distribution
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>Automatically publish all reviews on the most popular consumer health sites like: Healthgrades, Vitals, and Wellness - a network of more than 70 million patients.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/web-wide-distribution.png" alt="">
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Push reviews to social media
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>Automatically, publish verified and approved reviews directly on your website and social media channels.  This keeps your content fresh, relevant, and search optimized.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Benefits
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner">
                  <div class="row benefit-icons">
                    <div class="col-sm-3">
                      <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/stay-fresh.png" alt="">
                      <p>80% of consumers don’t trust reviews older than 3 months.</p>
                    </div>
                    <div class="col-sm-3">
                      <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/boost-seo.png" alt="">
                      <p>A steady stream of authentic, verified reviews are vital for good SEO.</p>
                    </div>
                    <div class="col-sm-3">
                      <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/easy-monitoring.png" alt="">
                      <p>Read and respond to all reviews across the web from a single interface.</p>
                    </div>
                    <div class="col-sm-3">
                      <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/multilingual.png" alt="">
                      <p>Review forms are available in English, Spanish, Portuguese and French.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Creative-Design.png" alt="">
            <img id="cad-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Creative-Design.png" alt="">
            <h5>CREATIVE AND<br>DESIGN</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>WEB DEVELOPMENT</h1>
            <p>Your website says everything about you before the visitor has even read a word. Your website must be optimized for mobile, pictures must load fast, and pages must be designed to convert visitors into patients. Look below to see some before and after photos that demonstrate the difference between an effective website and a tragic waste of time.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            </div>
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Reporting-Analytics.png" alt="">
            <img id="analytics-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Reporting-Analytics.png" alt="">
            <h5>REPORTING &<br>ANALYTICS</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>REPORTING & ANALYTICS</h1>
            <p>We talk like people. You don’t need a master’s degree in analytics to understand us. Not only do we provide you with an easy to understand dashboard, we have friendly conversations to review the results every month.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="before3-tab" data-toggle="tab" href="#before3" role="tab" aria-controls="before3" aria-selected="true">BEFORE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="after3-tab" data-toggle="tab" href="#after3" role="tab" aria-controls="after3" aria-selected="false">AFTER</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="before3" role="tabpanel" aria-labelledby="before3-tab">
                <img class="before-img" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/GA-before.png" alt="">
              </div>
              <div class="tab-pane fade" id="after3" role="tabpanel" aria-labelledby="after3-tab">
                <img class="before-img" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/GA-after.png" alt="">
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Digital-Media-Buying.png" alt="">
            <img id="media-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Digital-Media-Buying.png" alt="">
            <h5>DIGITAL MEDIA<br>BUYING</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>DIGITAL MEDIA BUYING</h1>
            <p>Our relationship with Venus Concept equips our media buying department with the most accurate demographic data. Our wealth of aesthetic experience informs how procedure volume changes by region and by season. And since you need a Venus Concept device to work with us, our mutually aligned interests give you confidence that your success is our success. See the before and after images below to see the difference between our media buying and average media buying.</p>
            <img class="single-image" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/DigitalMediaBuying.png" alt="">
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Premier-Partnerships.png" alt="">
            <img id="partner-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Premier-Partnership.png" alt="">
            <h5>PREMIER<br>PARTNERSHIPS</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>PREMIER PARTNERSHIPS</h1>
            <p>As a small business medical practice, we understand it is tough for you to get live customer service with big vendors like Google, Yelp, Facebook, and many other large corporations. That’s why we lend our premium access to your immediate needs. Meaning, if you need something done, ask us. We got a guy or a gal.</p>
            <img class="premier-image" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/premier.png" alt="">
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Online-Scheduling.png" alt="">
            <img id="scheduler-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Online-Scheduling.png" alt="">
            <h5>UNIVERSAL<br>SCHEDULER</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>WEB DEVELOPMENT</h1>
            <p>Your website says everything about you before the visitor has even read a word. Your website must be optimized for mobile, pictures must load fast, and pages must be designed to convert visitors into patients. Look below to see some before and after photos that demonstrate the difference between an effective website and a tragic waste of time.</p>
            <ul class="accordion">
              <li>
                <a class="toggle" href="javascript:void(0);">Gather appointments from wherever your patients are
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>Patients can request appointments with you directly from more than 40 websites and social media platforms, including Healthgrades, Google, Yelp, Facebook, Vitals, and many more.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/gather-appointments.png" alt="">
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">24/7 appointment availability
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>At least one in three appointment requests come in after business hours, meaning you are losing new patients. With our help, they can request an appointment any time of day.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/24-7-appointment.png" alt="">
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Real-Time Calendar availability
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>Cancellations happen. Sync your calendar availability to the Universal Scheduler to fill last minute openings with eager new patients.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/real-time-calendar.png" alt="">
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Automated patient reminders
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>Your office staff will thank you when automatic patient reminders send emails, SMS, or voice messages to any patient on the schedule.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/Automated-Patient-Reminders.png" alt="">
                </div>
              </li>
              <li>
                <a class="toggle" href="javascript:void(0);">Patients book on your website
                  <div class="circle-plus closed">
                   <div class="circle">
                     <div class="horizontal"></div>
                     <div class="vertical"></div>
                   </div>
                  </div>
                </a>
                <div class="inner single-image">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                      <p>We’ll embed the booking tool, so your patients can schedule appointments from your website on desktop and mobile.</p>
                    </div>
                  </div>
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/Request-Appointment.png" alt="">
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a class="toggle icon-div" href="javascript:void(0);">
            <img class="white" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/default/Directory-Listing.png" alt="">
            <img id="directory-click" class="gold" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/roll-over/Directory-Listing.png" alt="">
            <h5>DIRECTORY<br>LISTINGS</h5>
          </a>
          <div class="inner">
            <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
            <h1>DIRECTORY LISTINGS</h1>
            <p>By working with us, your profile automatically replaces any inaccuracies or inconsistencies found across the web with your most recent information (i.e., address, contact details, insurance). No longer will you see different address on Google, Bing, Yahoo, Mapquest, or Facebook. See the before and after images below to see the difference between accurate and inaccurate listing information.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="before4-tab" data-toggle="tab" href="#before4" role="tab" aria-controls="before4" aria-selected="true">BEFORE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="after4-tab" data-toggle="tab" href="#after4" role="tab" aria-controls="after4" aria-selected="false">AFTER</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="before4" role="tabpanel" aria-labelledby="before4-tab">
                <img class="before-img" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/directory-before.png" alt="">
              </div>
              <div class="tab-pane fade" id="after4" role="tabpanel" aria-labelledby="after4-tab">
                <img class="after-img" src="<?php echo get_bloginfo( 'template_directory' );?>/images/services/directory-after.png" alt="">
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- end of mobile -->
  </div>
  <img class="gold-bar" src="<?php echo get_bloginfo( 'template_directory' );?>/images/homepage-header_2_gold_bar.jpg" alt="">
</div>
<div class="row d-none d-sm-block" id="serviceContent">
  <?php get_template_part( 'services/webdev'); ?>
  <?php get_template_part( 'services/seo'); ?>
  <?php get_template_part( 'services/repman'); ?>
  <?php get_template_part( 'services/cad'); ?>
  <?php get_template_part( 'services/analytics'); ?>
  <?php get_template_part( 'services/media'); ?>
  <?php get_template_part( 'services/partner'); ?>
  <?php get_template_part( 'services/scheduler'); ?>
  <?php get_template_part( 'services/directory'); ?>
</div>

<?php get_footer(); ?>
