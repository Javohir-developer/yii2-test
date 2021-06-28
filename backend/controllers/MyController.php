<?php

namespace backend\controllers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class MyController extends \yii\web\Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'controllers' => ['site', 'category', 'hotel', 'bron'],
                        'actions' => ['index', 'create', 'update', 'delete', 'view'],
                        'allow' => true,
                        'roles' => ['User'],
                    ],
                    [
                        'controllers' => ['site'],
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['Drektor'],
                    ],
                    [
                        'controllers' => ['users','site'],
                        'actions' => ['index', 'create', 'update', 'delete', 'ajax'],
                        'allow' => true,
                        'roles' => ['Admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST']
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
        ];
    }

}
