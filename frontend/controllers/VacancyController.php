<?php

namespace frontend\controllers;

use common\models\Blog;
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        /* Get Blog list */
        $blogList = Blog::getAll();

        return $this->render('index', [
            'blogList' => $blogList
        ]);
    }
}