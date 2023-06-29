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
          <h2><?php echo Yii::t('common', 'Quote') ?></h2>
          <p><?php echo Yii::t('common', 'Phrase') ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="site/index"><?php echo Yii::t('common', 'Home') ?></a></li>
        <li><?php echo Yii::t('common', 'Quote') ?></li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Get a Quote Section ======= -->
<section id="get-a-quote" class="get-a-quote">
  <div class="container" data-aos="fade-up">

    <div class="row g-0">

      <div class="col-lg-5 quote-bg" style="background-image: url(/Logis/assets/img/quote-bg.jpg);"></div>

      <div class="col-lg-7">
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
          <h3><?php echo Yii::t('common', 'Quote') ?></h3>
          <div class="row gy-4">

            <div class="col-md-6">
              <?= $form->field($quote, 'departure')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Departure')]) ?>
              <!-- <input type="text" name="departure" class="form-control" placeholder="City of Departure" required> -->
            </div>

            <div class="col-md-6">
              <?= $form->field($quote, 'delivery')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Delivery')]) ?>
              <!-- <input type="text" name="delivery" class="form-control" placeholder="Delivery City" required> -->
            </div>

            <div class="col-md-6">
              <?= $form->field($quote, 'weight')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Weight')]) ?>
              <!-- <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" required> -->
            </div>

            <div class="col-md-6">
              <?= $form->field($quote, 'dimension')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Dimension')]) ?>
              <!-- <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required> -->
            </div>

            <div class="col-lg-12">
              <h4><?php echo Yii::t('common', 'Personal') ?></h4>
            </div>

            <div class="col-md-12">
              <?= $form->field($quote, 'name')->textInput(['maxlength' => true, 'placeholder'=> Yii::t('common', 'Name')]) ?>
              <!-- <input type="text" name="name" class="form-control" placeholder="Name" required> -->
            </div>

            <div class="col-md-12 ">
              <?= $form->field($quote, 'email')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('common', 'Email')]) ?>
              <!-- <input type="email" class="form-control" name="email" placeholder="Email" required> -->
            </div>

            <div class="col-md-12">
              <?= $form->field($quote, 'phone')->textInput([ 'placeholder'=>Yii::t('common', 'Phone')]) ?>
              <!-- <input type="text" class="form-control" name="phone" placeholder="Phone" required> -->
            </div>

            <div class="col-md-12">
            <?= $form->field($quote, 'message')->textarea(['rows' => 6, 'placeholder'=>Yii::t('common', 'Message')]) ?>
              <!-- <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea> -->
            </div>

            <div class="col-md-12 text-center">
            <div class="form-group">
                <?= Html::submitButton(Yii::t('common', 'Send'), ['class' => 'btn btn-success']) ?>
            </div>
            </div>

          </div>
        <?php ActiveForm::end(); ?>
      </div><!-- End Quote Form -->

    </div>

  </div>
</section><!-- End Get a Quote Section -->

</main><!-- End #main -->