<?php
namespace app\controllers;

class AnamaiController extends \yii\web\Controller{
  public function actionTest() {

        $a = 3;
        $b = 5;
        $c = $a * $b;
      
        return $this->render('test', ['cat' => $c] );
       
          
      //    return $this->render('test',['cat'=>$c
      //            ,'ar'=>$arr]);
         //วิธีการส่งผล จาก controller ไป view
            
    }
}