<?php
namespace app\controllers;
use Yii;
use yii\helpers\VarDumper;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Anketa;
use yii\web\Controller;
use yii\models\Form;
use yii\helpers\ActiveQuery;
use yii\data\ActiveDataProvider;

class FormController extends Controller
{
	public function actionIndex()
	{
		$newanketa = new Anketa();
		if($newanketa->load(YII::$app->request->post()) && $newanketa->validate()){
			$newanketa->id = 10;
			//$hash = Yii::$app->getSecurity()->generatePasw
			//$newanketa->save();
			return $this->render('index');
			}
		return $this->render('index');
	}
	public function actionAnketa()
	{
		$ankets = Anketa::find()->all();
		//print_r($ankets);
		//VarDumper::dump($ankets);
		return $this->render('anketa',['ankets' => $ankets]);
	}
	public function actionAnketa2()
	{
		$dataProvider = new ActiveDataProvider([
			'query' => Anketa::findOne(1),

		]);
		return $this->render('anketa2',['dataProvider' => $dataProvider]);
	}
}