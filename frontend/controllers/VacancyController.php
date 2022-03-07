<?php

namespace frontend\controllers;

use common\models\Blog;
use common\models\Vacancy;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class VacancyController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Get Vacancies
     * @return string
     */
    public function actionIndex()
    {
        $vacancies = Vacancy::getAll();
echo '<pre>'; var_dump($vacancies); die;
        return $this->render('index', [
            'vacancies' => $vacancies
        ]);
    }
}