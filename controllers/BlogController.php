<?php
namespace app\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Blog;
use Yii;

class BlogController extends Controller
{
   public $defaultAction = 'create';

   public function behaviors(){
     return [
       'access' => [
           'class' => AccessControl::className(),
           'rules' => [
               [
                   'actions' => ['create','update'],
                   'allow' => true,
                   'roles' => ['@']
               ],[
                   'actions' => ['index'],
                   'allow' => true,
                   'roles' => ['?','@']
               ]
           ],
       ],
     ];
   }

   public function actionIndex(){
     return $this->render('index');
   }

   public function actionCreate(){

     $model = new Blog();

     if($model->load(Yii::$app->request->post()) && $model->validate()){
        echo $model->title.'<br>';
        echo $model->detail;
        return $this->redirect(['blog/index']);
     }

     return $this->render('create',[
      'model' => $model
     ]);
   }
   // index.php?r=site/update&id=1
   public function actionUpdate($id,$a=null,$c=null){
     return $this->render('update');
   }
}
