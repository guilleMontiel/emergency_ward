<?php

namespace app\modules\v1\models;

use Yii;
use \app\modules\v1\models\base\SocialSecurity as BaseSocialSecurity;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "social_security".
 */
class SocialSecurity extends BaseSocialSecurity
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
