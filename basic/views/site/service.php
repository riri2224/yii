<?php

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
}

?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('/Logis/assets/img/page-header.jpg');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2><?php echo Yii::t('common', 'Services') ?></h2>
          <p><?php echo Yii::t('common', 'Phrase') ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/site/index"><?php echo Yii::t('common', 'Home') ?></a></li>
        <li><?php echo Yii::t('common', 'Services') ?></li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

        <?php foreach($delivery as $d) { ?>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="<?php echo $d->icon ?>"></i></div>
            <div>
              <h4 class="title"><?php echo $d->$title ?></h4>
              <p class="description"><?php echo $d->$descrip ?></p>
              <a href="#" class="readmore stretched-link"><span><?php echo Yii::t('common', 'Learn More') ?></span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <?php } ?>
          <!-- End Service Item -->

        </div>

      </div>
</section><!-- End Featured Services Section -->

<!-- ======= Services Section ======= -->
<section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span><?php echo Yii::t('common', 'Services') ?></span>
          <h2><?php echo Yii::t('common', 'Services') ?></h2>
        </div>

        <div class="row gy-4">

          <?php foreach($service as $s) { ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-img">
                  <img src="/uploads/service/<?php echo $s->img ?>" alt="" class="img-fluid">
                </div>
                <h3><a href="#" class="stretched-link"><?php echo $s->$title ?></a></h3>
                <p><?php echo $s->$serviceDesc ?></p>
              </div>
            </div>
          <?php } ?>


        </div>

      </div>
</section><!-- End Services Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
      <div class="container">

      <?php       foreach($feature as $f) { ?>
        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          
          <div class="col-md-5 order-md-2">
            <img src="/uploads/feature/<?php echo $f->img ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7  
          <?php
          if($f->id == 2){
            echo 'order-md-2';
          } else {
            echo 'order-md-1';
          }
          ?>">
            <h3><?php echo $f->$title ?></h3>
            <p class="fst-italic">
              <?php echo $f->$subDesc ?>
            </p>
            <p>
              <?php echo $f->$descrip ?>
            </p>
          </div>
          
        </div><!-- Features Item -->
        <?php } ?>

        
      </div>
    </section><!-- End Features Section -->

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