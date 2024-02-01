<?php
/**
 * The template for displaying all single posts
 */
get_header();
$service_banner_sliders = get_field('banner_sliders');
$counter_repeater = get_field('banner_counter_list', 'option', true);

$clinical_expertise_video_link = get_field('clinical_expertise_video_link');
$clinical_expertise_video_thumbnail = get_field('clinical_expertise_video_thumbnail');

$different_treatments_heading = get_field('different_treatments_heading');
$different_treatments_tab = get_field('different_treatments_tab');

$faq_heading = get_field('faq_heading');
$faq_sub_heading = get_field('faq_sub_heading');
$faq_list = get_field('faq_list');

$testimonial_heading = get_field('testimonial_heading');
$testimonialsList = get_field('testimonials_list');

$video_heading = get_field('video_heading');
$video_sub_heading = get_field('video_sub_heading');
$video_gallery = get_field('video_gallery');

$appointment_heading = get_field('appointment_heading');
$appointment_form_heading = get_field('appointment_form_heading');
$appointment_description = get_field('appointment_description');
$appointment_form_heading_Calculator = get_field('appointment_form_heading_Calculator');

// $appointment_form_heading = get_field('appointment_form_heading');
// $appointment_description = get_field('book_an_appointment_description');
?>
<?php foreach ($service_banner_sliders as $service_banner_item): ?>

  <!-- Banner Section End-->
  <div class="home_banner_section inner-banner"
    style="background-image: url('<?php echo $service_banner_item['banner_image']['url']; ?>">
    <div class="wrapper">
      <div class="banner_content">
        <h1>
          <?php echo $service_banner_item['banner_image_title']; ?>
        </h1>
        <div class="specialist">
          <?php echo $service_banner_item['banner_image_description']; ?>
        </div>
        <a href="<?php echo $service_banner_item['banner_button_link']; ?>" class="theme-btn-primary-outline">
          <?php echo $service_banner_item['banner_button_text']; ?>
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<section class="counter_data_section">
  <div class="counter_data">
    <ul>
      <?php foreach ($counter_repeater as $counter): ?>

        <li>
          <span>
            <?php echo $counter['banner_counter_number'] ?>
          </span>
          <span>
            <?php echo $counter['banner_counter_title'] ?>
          </span>
        </li>

      <?php endforeach; ?>

    </ul>
  </div>
</section>


<section class="about-service-urology">
  <div class="about-service-urology-inner">

    <div class="about-service-urology-left common-conetnt">
      <h2 class="common-heading">
        <?php echo get_the_title(); ?>
      </h2>

      <?php echo get_the_content(); ?>
    </div>

    <div class="about-service-urology-right">

      <div class="cover">
        <iframe controls="" class="video" width="420" height="100%" src="<?php echo $clinical_expertise_video_link; ?>">
        </iframe>
        <div class="video-btn play_bnt">
          <a href="javascript:void(0)" tabindex="0">
            <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462" viewBox="0 0 94.462 94.462">
              <path id="Icon_material-play-circle-outline" data-name="Icon material-play-circle-outline"
                d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                transform="translate(-1.5 -1.5)" fill="none" stroke="--theme-white-color:" stroke-width="3"></path>
            </svg>
          </a>
        </div>
        <img class="thumb" src="<?php echo $clinical_expertise_video_thumbnail['url']; ?>" alt="" loading="lazy"
          style="max-width: 100%; height: auto;">

      </div>

    </div>
  </div>
</section>


<?php
if (isset($different_treatments_tab) && !empty($different_treatments_tab)) {
  ?>
  <section class="different-treatments">

    <div class="different-treatments-title">
      <h2 class="common-heading">
        <?php echo $different_treatments_heading; ?>
      </h2>
    </div>



    <div class="different-treatments-inner">

      <div class="different-treatments-left">
        <ul>
          <?php $different_treatments_count = 1;
          foreach ($different_treatments_tab as $different_treatments) {

            ?>
            <li class="treatmentclick"><a href="javascript:void();"
                data-tag="treatment_<?php echo $different_treatments_count; ?>"
                class="<?php echo ($different_treatments_count == 1) ? 'activelink' : ''; ?>">
                <?php echo $different_treatments['different_treatments_heading']; ?>
              </a></li>
            <?php $different_treatments_count++;
          }
          ?>
        </ul>
      </div>


      <div class="different-treatments-right">
        <?php $different_treatments_count = 1;
        foreach ($different_treatments_tab as $different_treatments) {

          ?>
          <div class="treatmentlist <?php echo ($different_treatments_count > 1) ? 'hide' : ''; ?>"
            id="treatment_<?php echo $different_treatments_count; ?>">
            <div class="different-treatments-right-title">
              <h4>
                <?php echo $different_treatments['different_treatments_heading']; ?>
              </h4>
              <h5>
                <?php echo $different_treatments['different_treatments_sub_heading']; ?>
              </h5>
            </div>

            <div class="different-treatments-cnt common-conetnt">
              <?php echo $different_treatments['different_treatments_description']; ?>
            </div>
          </div>
          <?php $different_treatments_count++;
        }
        ?>
      </div>

    </div>


  </section>
<?php } ?>


<?php if (isset($faq_list) && !empty($faq_list)) { ?>
  <section class="service-faq">
    <div class="wrapper">

      <div class="service-faq-title">
        <h2 class="common-heading">
          <?php echo $faq_heading; ?>
        </h2>
        <h4>
          <?php echo $faq_sub_heading; ?>
        </h4>
      </div>

      <div class="faq-acordian">
        <ul class="accordion-list">

          <?php foreach ($faq_list as $faq_id): ?>
            <li>
              <h3>
                <?php echo get_the_title($faq_id); ?>
              </h3>
              <div class="answer common-conetnt">
                <p>
                  <?php $content = get_post_field('post_content', $faq_id);
                  $trimmed_content = wp_trim_words($content, 200, '...');
                  echo $trimmed_content; ?>
                </p>
              </div>
            </li>
          <?php endforeach; ?>


        </ul>
      </div>

    </div>
  </section>

<?php } ?>


<?php
if (isset($testimonialsList) && !empty($testimonialsList)) {
  ?>
  <section class="client-say-sec">
    <div class="client-say-title">
      <h2 class="common-heading">
        <?php echo $testimonial_heading; ?>
      </h2>

    </div>


    <div class="client-say-slider">
      <?php foreach ($testimonialsList as $testimonial_id): ?>
        <div class="item">
          <div class="client-say-inner">
            <div class="client-say-left"> <img
                src="<?php echo get_the_post_thumbnail_url($testimonial_id, 'large-small'); ?>" alt=""></div>
            <div class="client-say-right common-conetnt">
              <h3>
                <?php echo get_the_title($testimonial_id); ?>
              </h3>
              <h5>
                <?php echo get_field('suffering_from', $testimonial_id); ?>

              </h5>
              <p>
                <?php $content = get_post_field('post_content', $testimonial_id);
                $trimmed_content = wp_trim_words($content, 60, '...');
                echo $trimmed_content; ?>
              </p>
              <div class="rating-client">
                <ul>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


    </div>

  </section>
<?php } ?>

<?php if (isset($video_gallery) && !empty($video_gallery)) {
  ?>
  <section class="video-home service_page_video">
    <div class="wrapper">
      <div class="video-top-row">
        <div class=" video-left">
          <h4 class="common-heading">
            <?php echo $video_heading; ?>
          </h4>
          <strong>
            <?php echo $video_sub_heading; ?>
          </strong>
        </div>

      </div>
    </div>

    <div class="slider-box">
      <?php foreach ($video_gallery as $video_id):
        $video_link = get_field('video_link', $video_id); ?>
        <div class="cover">
          <iframe controls="" class="video" width="420" height="100%" src="<?php echo $video_link; ?>">
          </iframe>
          <div class="video-btn play_bnt">
            <a href="javascript:void(0)" tabindex="0">
              <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462" viewBox="0 0 94.462 94.462">
                <path id="Icon_material-play-circle-outline" data-name="Icon material-play-circle-outline"
                  d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                  transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-width="3" />
              </svg>
            </a>
          </div>
          <img class="thumb" src="<?php echo get_the_post_thumbnail_url($video_id, 'large-small'); ?>" alt="11111"
            loading="lazy" style="max-width: 100%; height: auto;">
          <div class="thumb" id="thumb-content">
            <p class="common-conetnt">
              <?php $content = get_post_field('post_content', $video_id);
              $trimmed_content = wp_trim_words($content, 60, '...');
              echo $trimmed_content; ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>




  </section>

<?php } ?>




<section class="appointment-section service_detail_apoitment">
  <div class="wrapper">
    <div class="service_detail_apoitment-title common-conetnt">
      <h2 class="common-heading">
        <?php echo $appointment_heading; ?>
      </h2>
      <p class="common-conetnt">
        <?php echo $appointment_description; ?>
      </p>
    </div>
  </div>

  <div class="wrapper">

    <div class="appointment-row">

      <div class="appointment-right">
        <div class="appointment-right-box">
          <form class="contact-form">
            <div class="form-top">
              <h3>
                <?php echo $appointment_form_heading_Calculator; ?>
              </h3>
            </div>
            <div class="form-bottom">

              <div class="contact-row">

                <div class="form-group selecting">
                  <select>
                    <option> Treatment Type </option>
                    <option> Demo </option>
                    <option> Demo2 </option>
                    <option> Demo3 </option>
                  </select>
                </div>

                <div class="form-group selecting">
                  <select>
                    <option> Procedure </option>
                    <option> Demo </option>
                    <option> Demo2 </option>
                    <option> Demo3 </option>
                  </select>
                </div>

                <div class="form-group selecting">
                  <select>
                    <option> Number of Sittings </option>
                    <option> Demo </option>
                    <option> Demo2 </option>
                    <option> Demo3 </option>
                  </select>
                </div>
              </div>
              <div class="common-btn">
                <button class="theme-btn-primary" type="submit">CALCULATE</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="appointment-right">
        <div class="appointment-right-box">
          <div class="contact-form">
            <div class="form-top">
              <h3>
                <?php echo $appointment_form_heading; ?>
              </h3>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="d09da70" title="Home page form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>







<?php get_footer();