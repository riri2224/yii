<?php

/** @var yii\web\View $this */


$this->title = 'My Yii Application';
use app\models\Planel;

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
}

// var_dump($service)
?>
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up"><?php echo Yii::t('common', 'Intro') ?></h2>
          <p data-aos="fade-up" data-aos-delay="100"><?php echo Yii::t('common', 'IntroDesc') ?></p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="<?php echo Yii::t('common', 'Index') ?>">
            <button type="submit" class="btn btn-primary"><?php echo Yii::t('common', 'Search') ?></button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <?php foreach($counts as $c) { ?>
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $c->numbers ?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $c->$name ?></p>
                </div>
              </div><!-- End Stats Item -->
              <?php } ?>

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="/Logis/assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
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

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3><?php echo $action->$title ?></h3>
            <p> <?php echo $action->$descrip ?></p>
            <a class="cta-btn" href="#"><?php echo Yii::t('common', 'Action') ?></a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

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

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span><?php echo Yii::t('common', 'Pricing') ?></span>
          <h2><?php echo Yii::t('common', 'Pricing') ?></h2>

        </div>

        <div class="row gy-4">

        <?php 
        $t = 1;
        foreach($planname as $p) {  ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3><? echo $p->$name ?></h3>
              <h4><sup>$</sup><? echo $p->price ?><span> / <?php echo Yii::t('common', 'Month') ?></span></h4>
              <ul>

              <?php  $planel = Planel::find()->where(['planname_id' => $p->id])->all();
              foreach ($planel as $p) {
              ?>
                <li class="
                <?php if($p->status==1) {
                  echo 'na';
                } ?>
                "><i class="
                <?php if($p->status==1) {
                  echo 'bi bi-x';
                } else { echo 'bi bi-check ';
                
                }?>"></i> <?=$p->$name?></li>
<!-- <li class="na"><i class="bi bi-x"></i> </li> -->
                <?php } ?>
                
               </ul>
              <a href="#" class="buy-btn"><?php echo Yii::t('common', 'Buy') ?></a>
            </div>
          </div><!-- End Pricing Item -->
          <?php 
          $t++;
          } ?>


        </div>

      </div>
    </section><!-- End Pricing Section -->

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
