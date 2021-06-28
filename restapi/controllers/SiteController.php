<?php
namespace restapi\controllers;
use restapi\models\LoginForm;

class SiteController extends MyController
{
    public function actionIndex()
    {
        $model = new LoginForm();
        return $model->test();
    }

}
