<?php

namespace app\modules\v1\models;

use Yii;
use \app\modules\v1\models\base\PatientAdmission as BasePatientAdmission;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "patient_admission".
 */
class PatientAdmission extends BasePatientAdmission
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
