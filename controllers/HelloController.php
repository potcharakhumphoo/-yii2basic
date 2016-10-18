<?php
namespace app\controllers;
class HelloController extends \yii\web\Controller{
    public function actionFrist(){
        $title= 'Hello Controller action first';
        
        return $this ->render('first',['title'=>$title]) ;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

