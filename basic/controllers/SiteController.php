<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Action;
use app\models\Counts;
use app\models\Delivery;
use app\models\Faq;
use app\models\Feature;
use app\models\Review;
use app\models\Service;
use app\models\Aboutus;
use app\models\Planname;
use app\models\Plan;
use app\models\Contactus;
use app\models\Quote;
use app\models\Team;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $counts = Counts::find()->all();
        $delivery = Delivery::find()->all();
        $faq = Faq::find()->all();
        $feature = Feature::find()->all();
        $review = Review::find()->all();
        $service = Service::find()->all();
        $aboutus = Aboutus::find()->where(['id'=>1])->one();
        $action = Action::find()->where(['id'=>1])->one();
        $planname = Planname::find()->all();
        $plan = Plan::find()->all();
        return $this->render('index', [
            'counts'=>$counts,
            'delivery'=>$delivery,
            'faq'=>$faq,
            'feature'=>$feature,
            'review'=>$review,
            'service'=>$service,
            'aboutus'=>$aboutus,
            'action'=>$action,
            'planname'=>$planname,
            'plan'=>$plan
        ]);
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'original';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/counts/index');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $counts = Counts::find()->all();
        $faq = Faq::find()->all();
        $review = Review::find()->all();
        $aboutus = Aboutus::find()->where(['id'=>1])->one();
        $team = Team::find()->all();
        return $this->render('about', [
            'counts'=>$counts,
            'faq'=>$faq,
            'review'=>$review,
            'aboutus'=>$aboutus,
            'team'=>$team
        ]);
    }

    public function actionService()
    {
        $delivery = Delivery::find()->all();
        $faq = Faq::find()->all();
        $feature = Feature::find()->all();
        $review = Review::find()->all();
        $service = Service::find()->all();
        $plan = Plan::find()->all();
        return $this->render('service', [
            'delivery'=>$delivery,
            'faq'=>$faq,
            'feature'=>$feature,
            'review'=>$review,
            'service'=>$service,
            'plan'=>$plan
        ]);
    }

    public function actionPricing()
    {
        return $this->render('pricing');
    }

    public function actionContactus()
    {

        $contactus = new Contactus();

        if ($this->request->isPost) {
            if ($contactus->load($this->request->post()) && $contactus->save()) {
                return $this->redirect(['contactus']);
            }
        }

        return $this->render('contactus', 
        [
            'contactus' => $contactus
        ]);
    }

    public function actionGetaquote()
    {

        $quote = new Quote();

        if ($this->request->isPost) {
            if ($quote->load($this->request->post()) && $quote->save()) {
                return $this->redirect(['getaquote']);
            }
        } 

        return $this->render('getaquote', 
        [
            'quote' => $quote
        ]);
    }

    
}
