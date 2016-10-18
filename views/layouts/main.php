<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    
    NavBar::begin([
        'brandLabel' => 'เวบของเรา',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
    
        $report = [
            ['label' => 'รายงานภายใน', 'url' => ['/site/report1']],
            ['label' => 'รายงานภายนอก', 'url' => ['/site/report2']],
        ];
       $seting = [
            ['label' => 'ผู้ใช้งาน', 'url' => ['/site/seting1']],
            ['label' => 'กลุ่มผู้ใช้งาน', 'url' => ['/site/seting2']],
      
        ];
        
 //   ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels'=>false,
        'items' => [
            ['label' => 'หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'เกี่ยวกับเรา', 'url' => ['/site/about']],
            ['label' => 'ติดต่อเรา', 'url' => ['/site/contact']],
            ['label' => 'test', 'url' => ['/site/test']],
            ['label' => 'รายงาน<span class="glyphicon glyphicon-search"></span>', 'items' => $report],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> ตั้งค่าระบบ', 'items' => $seting],
            Yii::$app->user->isGuest ? (
                ['label' => 'ลงชื่อเข้าใช้งาน', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company บริษัทจำกัด <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
