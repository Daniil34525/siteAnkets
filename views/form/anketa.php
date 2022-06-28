<?php

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\AnketaForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Anketa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-anketa">
    <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <div class="col-lg-5">
            	<table class="table">
            		<?php
            		foreach($ankets as $ank){
            			//echo "<tr><td>($ank('id'))</td><td>($ank('name')</td></tr>";
            		}?>
            	</table>
            	<? foreach ($ankets as $note):?>
            		<div>
            			<div><h1><?= Html::encode($note->id) ?></h1></div>
            			<div><h1><?= Html::encode($note->name) ?></h1></div>
            			<div><h1><?= Html::encode($note->surname) ?></h1></div>
            			<div><h1><?= Html::encode($note->password) ?></h1></div>
            			<div><h1><?= Html::encode($note->email) ?></h1></div>
            			<div><h1><?= Html::encode($note->created_at) ?></h1></div>
            			<div><h1><?= Html::encode($note->updated_at) ?></h1></div>
            		</div>
            	<? endforeach?>
            </div>
        </div>
    
</div>