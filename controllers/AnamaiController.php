<?php
namespace app\controllers;
class AnamaiController extends \yii\web\Controller{
    public function actiontest(){
        $title= 'Hello Controller action first';
        
        return $this ->render('first',['title'=>$title]) ;
    }
}
