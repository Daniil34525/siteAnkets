<?php

/** @var $this yii\web\View */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\AnketaForm $model */
use app\models\Anketa;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\helpers\URL;

$this->title = 'Анкеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anketa-index">
    <h1><?= Html::encode($this->title) ?></h1>
        <p><?= Html::a('Создание анкеты',['create'],['class'=>'btn btn-success'])?></p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' =>[
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'surname',
                'password',
                'phone',
                'email',
                'created_at',
                'updated_at',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' =>function ($action, Anketa $model, $key, $index, $column){
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ]
            ]

        ])
        ?>
</div>