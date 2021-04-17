<?php

namespace app\modules\v1\controllers;
use Yii;
use app\modules\v1\models\Patient;
use app\modules\v1\models\PatientAdmission;
use yii\web\HttpException;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use yii\base\Exception;
class AdmissionController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\modules\v1\models\PatientAdmission';
    
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
    
    public function actionNewadminision(){
        
        $data = Yii::$app->request->post();
        $transaction = Yii::$app->db->beginTransaction();
        
        try{
            $admission = new PatientAdmission();
            $admission->id_patient = $data['id_patient'];
            $admission->admission_date = $data['admission_date'];
            $admission->admission_hour = $data['admission_hour'];
            $admission->anamnesis = $data['anamnesis'];
            $admission->diagnostic = $data['diagnostic'];
            $admission->reason_for_admission = $data['reason_for_admission'];
            $admission->internment = $data['internment'];
            $admission->internment_unit = $data['internment_unit'];
            if($admission->save()){
                Throw new \Exception(json_encode($admission->errors));
            }            
            $transaction->commit();
        }catch(\Exception $e){
            $transaction->rollBack();
            Throw new HttpException(500,$e->getMessage());
        }
        
        return 'NEW ADMINISSION CREATED SUCCESSFULY';
    }


}
