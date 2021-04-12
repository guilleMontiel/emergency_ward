<?php

namespace app\modules\v1\controllers;
use Yii;
use app\modules\v1\models\Patient;
use yii\web\HttpException;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use yii\base\Exception;
class PatientController extends \yii\rest\ActiveController
{
    
    public $modelClass = 'app\modules\v1\models\Patient';
    
    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
            ],
        ];
    }

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actionList(){
        $patients = Patient::find()->asArray()->all();
        if(!$patients){
            Throw new HttpException(404,'PATIENTS NOT FOUND');
        }
        
        return $patients;
    }
    
    
    public function actionFind()
    {
        $id = Yii::$app->request->get('id');
        $patient = Patient::find()->where(['id'=>$id])->one();
        if(!$patient){
            Throw new HttpException(404,'PATIENT NOT FOUND');
        }
        
        return $patient;
    }
    
    public function actionNew(){
        
        $patient_data = Yii::$app->request->post();
        $transaction = Yii::$app->db->beginTransaction();
        try{
            $patient_exist = Patient::find()->where(['id_number'=>$patient_data['patient']['id_number']])->one();
            if($patient_exist){
                Throw new Exception('PATIENT ALREADY EXIST!');
            }
            
            $patient = new Patient();
            $patient->name = $patient_data['patient']['name'];
            $patient->last_name = $patient_data['patient']['last_name'];
            $patient->id_number = $patient_data['patient']['id_number'];
            $patient->gender = $patient_data['patient']['gender'];
            $patient->phone = $patient_data['patient']['phone'];
            $patient->address = $patient_data['patient']['address'];
            $patient->state = $patient_data['patient']['state'];
            $patient->age = $patient_data['patient']['age'];
            if(!$patient->save()){
                Throw new Exception(json_encode($patient->errors));
            }
            $transaction->commit();
        } catch (Exception $e){
            $transaction->rollBack();
            Throw new HttpException(500,$e->getMessage());
        }
        
        
        return 'NEW PATIENT CREATED';        
    }

}
