<?php

namespace app\modules\v1\models;

use Yii;
use \app\modules\v1\models\base\SocialSegurity as BaseSocialSegurity;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "social_segurity".
 */
class SocialSegurity extends BaseSocialSegurity
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
