<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\TempAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

TempAsset::register($this);

$lang = Yii::$app->language;

if ($lang == 'ru') {
  $l = 'Русский';
} else {
  $l = 'Қазақша';
}


$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/site/index" class="active"><?php echo Yii::t('common', 'Home') ?></a></li>
          <li><a href="/site/about"><?php echo Yii::t('common', 'About') ?></a></li>
          <li><a href="/site/service"><?php echo Yii::t('common', 'Services') ?></a></li>
          <li class="dropdown"><a href="#"><span><?php echo $l ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <?php echo Html::a('KK', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'kk'])) ?>
              </li>
              <li>
              <?php echo Html::a('RU', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'ru'])) ?>
            </li>
            </ul>
          </li>
          <li><a href="/site/contactus"><?php echo Yii::t('common', 'Contact') ?></a></li>
          <li><a class="get-a-quote" href="/site/getaquote"><?php echo Yii::t('common', 'Quote') ?></a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


        <?= $content ?>

        <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="index.html" class="logo d-flex align-items-center">
        <span>Logis</span>
      </a>
      <p><?php echo Yii::t('common', 'Phrase') ?></p>
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4><?php echo Yii::t('common', 'Links') ?></h4>
      <ul>
        <li><a href="#"><?php echo Yii::t('common', 'Home') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'About') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'Services') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'Terms') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'Privacy') ?></a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4><?php echo Yii::t('common', 'OurServices') ?></h4>
      <ul>
        <li><a href="#"><?php echo Yii::t('common', 'WebDesign') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'WebDev') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'Product') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'Marketing') ?></a></li>
        <li><a href="#"><?php echo Yii::t('common', 'Graphic') ?></a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4><?php echo Yii::t('common', 'ContactUs') ?></h4>
      <p>
      <?php echo Yii::t('common', 'Street') ?> <br>
      <?php echo Yii::t('common', 'NY') ?><br>
      <?php echo Yii::t('common', 'US') ?> <br><br>
        <strong>Телефон:</strong> +1 5589 55488 55<br>
        <strong>Email:</strong> info@example.com<br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
