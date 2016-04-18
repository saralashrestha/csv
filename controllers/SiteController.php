<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
     * Adds data to csv file
     * @return type
     */
    public function actionIndex()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post())) {
            $record = Yii::$app->request->post();
            $data = $record['ContactForm'];

            if (!file_exists('../upload/client.csv')) {
                $result = array('Name, Gender, Phone, Email, Address, Nationality, Education Background');

                $fp1 = fopen('../upload/client.csv', 'w');
            } else {
                $fp1 = fopen('../upload/client.csv', 'a');
            }
            foreach ($data as $key => $value) {
                $result[1] = implode(",", $data);
            }
            foreach ($result as $line) {
                $val = explode(",", $line);
                fputcsv($fp1, $val);
            }
            fclose($fp1);

            Yii::$app->session->setFlash('formSubmitted');

            return $this->refresh();
        } else {
            return $this->render('index', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * reads data from csv file and displays data
     * @return type
     */
    public function actionClient()
    {
        if (!file_exists('../upload/client.csv')) {
            return $this->render('error', array('name' => 'File not found.', 'message' => 'File not found.'));
        } else {
            $fp1 = fopen('../upload/client.csv', 'r');
            while (!feof($fp1)) {
                $line_of_text = fgetcsv($fp1, 1024);
                if (!empty($line_of_text)) {
                    $data[] = $line_of_text;
                }
            }
            fclose($fp1);
            unset($data[0]);
            return $this->render('client', array('model' => $data));
        }
    }

}
