<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\AnketaForm $model */

use app\models\Anketa;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$model = new Anketa;
$this->title = 'Anketa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-anketa">
    <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'acketa-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'surname') ?>

                    <?= $form->field($model, 'password')->passwordInput()?>

                    <?= $form->field($model, 'phone') ?>

                    <?= $form->field($model, 'email') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'anketa-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
</div>