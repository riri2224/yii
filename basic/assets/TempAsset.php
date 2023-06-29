<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TempAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'Logis/assets/img/favicon.png',
        'Logis/assets/img/apple-touch-icon.png',
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap',
        'Logis/assets/vendor/bootstrap/css/bootstrap.min.css',
        'Logis/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'Logis/assets/vendor/fontawesome-free/css/all.min.css',
        'Logis/assets/vendor/glightbox/css/glightbox.min.css',
        'Logis/assets/vendor/swiper/swiper-bundle.min.css',
        'Logis/assets/vendor/aos/aos.css',
        'Logis/assets/css/main.css',
        // 'css/site.css',
    ];
    public $js = [
        'Logis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'Logis/assets/vendor/purecounter/purecounter_vanilla.js',
        'Logis/assets/vendor/glightbox/js/glightbox.min.js',
        'Logis/assets/vendor/swiper/swiper-bundle.min.js',
        'Logis/assets/vendor/aos/aos.js',
        'Logis/assets/vendor/php-email-form/validate.js',
        'Logis/assets/js/main.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
