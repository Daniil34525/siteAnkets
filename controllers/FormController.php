<?php
namespace app\controllers;
use Yii;

use app\models\Anketa;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class FormController extends Controller
{
	public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }
	public static function tableName()
	{
		return 'anketa';
	}

	public function actionIndex()
	{
		$dataProvider = new ActiveDataProvider([
			'query'=>Anketa::find(),]);
		return $this->render('index',['dataProvider'=>$dataProvider,]);
	}
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		if($this->request->isPost && $model->load($this->request->post()) )
		{
			$model->password=sha1($model->password);
			//$model->password=Yii::$app->getSecurity()->encryptByPassword($model->password,'rl');
			//$model->password=Yii::$app->getSecurity()->decryptByPassword($model->password,'rl');
			$model->updated_at=Yii::$app->formatter->asTime('now', 'yyyy-MM-dd HH:mm:ss');
			if($model->save())
				//$model->password=Yii::$app->getSecurity()->encryptByPassword($model->password,'rl');
			return $this->redirect(['view', 'id' => $model->id]);
		}
		//$model->password=Yii::$app->getSecurity()->enecryptByPassword($model->password,'rl');
		return $this->render('update',['model'=>$model]);
	}
	public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCreate()
    {
    	$model = new Anketa();
    	if($this->request->isPost){
    		if($model->load($this->request->post())){
    			//$model->password=sha1($model->password,'rl');
    			//$model->password=stripslashes(Yii::$app->getSecurity()->encryptByPassword($model->password,'l'));
    			$model->created_at = Yii::$app->formatter->asTime('now', 'yyyy-MM-dd HH:mm:ss');
    			if($model->save()){
    				//$model->password=Yii::$app->getSecurity()->encryptByPassword($model->password,'rl');
    				return $this->redirect(['view','id' => $model->id]);
    			}
    		}
    	}
    	else $model->loadDefaultValues();
    	//$model->password=Yii::$app->getSecurity()->encryptByPassword($model->password,'rl');
    	return $this->render('create',['model' => $model]);
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
	protected function findModel($id)
    {
        if (($model = Anketa::findOne(['id' => $id])) !== null) {
        	//$model->password=Yii::$app->getSecurity()->encryptByPassword($model->password,'rl');
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}