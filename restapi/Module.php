<?php


namespace restapi;

use common\models\User;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\UrlRule;

/**
 * v1 module definition class
 */
class Module extends \yii\base\Module
{
    public static $urlRules = [
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'restapi/site',
            'extraPatterns' => [
                'GET index' => 'index',
                'POST create' => 'create',
                'PUT update' => 'update',
                'DELETE delete' => 'delete',
            ],
            'pluralize' => false,
        ],
    ];
}
