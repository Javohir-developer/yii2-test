<?php


namespace restapi\models;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\UrlRule;

class Module
{

    public static $urlRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/menu',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
            ],
        ],
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'site',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET,HEAD index' => 'index',
                'POST confirm' => 'confirm',
                'POST signup' => 'signup',
                'POST,HEAD logout' => 'logout',
                'GET,HEAD favorite-posts' => 'favorite-posts',
                'GET,HEAD favorite-questions' => 'favorite-questions',
            ],
            'pluralize' => false,
        ],
    ];

    public static function allowedDomains()
    {
        return [
            '*',
        ];
    }
}