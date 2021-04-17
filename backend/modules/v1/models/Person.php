<?php

namespace app\modules\v1\models;

use Yii;
use \app\modules\v1\models\base\Person as BasePerson;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "person".
 */
class Person extends BasePerson
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
