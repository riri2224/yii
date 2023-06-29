<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

 ?>


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('/Logis/assets/img/page-header.jpg');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2><?php echo Yii::t('common', 'Contact') ?></h2>
          <p><?php echo Yii::t('common', 'Phrase') ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="site/index"><?php echo Yii::t('common', 'Home') ?></a></li>
        <li><?php echo Yii::t('common', 'Contact') ?></li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div>
      <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4 mt-4">

      <div class="col-lg-4">

        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Адрес:</h4>
            <p><?php echo Yii::t('common', 'Street') ?>, <?php echo Yii::t('common', 'NY') ?></p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>Телефон:</h4>
            <p>+1 5589 55488 55</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <?php
        $form = ActiveForm::begin([
          'fieldConfig' => [
            'template' => "{input}{hint}",
            'options' => [
              'tag' => false
            ],
          ], 
        'options' => [
          'class'=>'php-email-form'
        ]
        ]);
         ?>
<div class="row">
      <div class="col-md-6 form-group">
        <?= $form->field($contactus, 'urname')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Name')]) ?>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
        <?= $form->field($contactus, 'urmail')->textInput(['maxlength' => true,  'placeholder'=>Yii::t('common', 'Email')]) ?>
        </div>
      </div>
        <div class="form-group mt-3">

        <?= $form->field($contactus, 'subject')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Subject')]) ?>
        </div>
        <div class="form-group mt-3">

        <?= $form->field($contactus, 'message')->textarea(['rows' => 6, 'placeholder'=>Yii::t('common', 'Message')]) ?>
        </div>
        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form> -->
        <div class="form-group">
        <?= Html::submitButton(Yii::t('common', 'Send'), ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->