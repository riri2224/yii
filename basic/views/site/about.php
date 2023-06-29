<?php

use app\models\Socialmedia;
$lang = Yii::$app->language;

if($lang == 'kk') {
  $name = 'name_kk';
  $title = 'title_kk';
  $serviceDesc = 'desc_kk';
  $descrip = 'descrip_kk';
  $subDesc = 'subdescrip_kk';
  $job = 'job_kk';
  $reviews = 'review_kk';
  $answer = 'answer_kk';
  $question = 'question_kk';
  $one = 'one_kk';
  $two = 'two_kk';
  $three = 'three_kk';
  $four = 'four_kk';
  $five = 'five_kk';
  $phrase = 'phrase_kk';
} else {
  $name = 'name_ru';
  $serviceDesc = 'desc_ru';
  $title = 'title_ru';
  $descrip = 'descrip_ru';
  $subDesc = 'subdescrip_ru';
  $job = 'job_ru';
  $reviews = 'review_ru';
  $answer = 'answer_ru';
  $question = 'question_ru';
  $one = 'one_ru';
  $two = 'two_ru';
  $three = 'three_ru';
  $four = 'four_ru';
  $five = 'five_ru';
  $phrase = 'phrase_ru';
}

?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('/Logis/assets/img/page-header.jpg');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2><?php echo Yii::t('common', 'About') ?></h2>
          <p><?php echo Yii::t('common', 'Phrase') ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/site/index"><?php echo Yii::t('common', 'Home') ?></a></li>
        <li><?php echo Yii::t('common', 'About') ?></li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about pt-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="/uploads/aboutus/<?php echo $aboutus->img ?>" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3><?php echo $aboutus->$title ?></h3>
            <p>
            <?php echo $aboutus->$descrip ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

    <?php foreach($counts as $c) { ?>
              <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $c->numbers ?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $c->$name ?></p>
                </div>
              </div><!-- End Stats Item -->
              <?php } ?><!-- End Stats Item -->

    </div>

  </div>
</section><!-- End Stats Counter Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team pt-0">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <span><?php echo Yii::t('common', 'Team') ?></span>
      <h2><?php echo Yii::t('common', 'Team') ?></h2>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

    <?php foreach($team as $t) { ?>
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="member">
          <img src="/uploads/team/<?php echo $t->img ?>" class="img-fluid" alt="">
          <div class="member-content">
            <h4><?php echo $t->$name ?></h4>
            <span><?php echo $t->$job ?></span>
            <p>
            <?php echo $t->$phrase ?>
            </p>
            <div class="social">
              <?php
              $socialmedia = Socialmedia::find()->where(['team_id' => $t->id])->all();
              foreach($socialmedia as $s){
              ?>
              <a href=""><i class="<?=$s->icon?>"></i></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>



    </div>

  </div>
</section><!-- End Our Team Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

          <?php foreach($review as $r) { ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/uploads/review/<?php echo $r->img ?>" class="testimonial-img" alt="">
                <h3><?php echo $r->$name ?></h3>
                <h4><?php echo $r->$job ?></h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <?php echo $r->$reviews ?>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            <?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
</section><!-- End Testimonials Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span><?php echo Yii::t('common', 'FAQ') ?></span>
          <h2><?php echo Yii::t('common', 'FAQ') ?></h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

            <?php foreach($faq as $f) { ?>
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $f->id ?>">
                    <i class="bi bi-question-circle question-icon"></i>
                    <?php echo $f->$question ?>
                  </button>
                </h3>
                <div id="faq-content-<?php echo $f->id ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  <?php echo $f->$answer ?>
                  </div>
                </div>
              </div><!-- # Faq item-->
              <?php } ?>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->