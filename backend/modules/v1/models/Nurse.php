<?php

namespace app\modules\v1\models;

use Yii;
use \app\modules\v1\models\base\Nurse as BaseNurse;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nurse".
 */
class Nurse extends BaseNurse
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
