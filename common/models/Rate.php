<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rate".
 *
 * @property int $id
 * @property int $min
 * @property int $max
 *
 * @property Vacancy[] $vacancies
 */
class Rate extends \yii\db\ActiveRecord
{
    public $range;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['min', 'max'], 'required'],
            [['min', 'max'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'min' => 'Min',
            'max' => 'Max',
        ];
    }

    /**
     * Gets query for [[Vacancies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasMany(Vacancy::className(), ['rate_id' => 'id']);
    }

    /******************************************************************************************************************/
    /******************************************************************************************************************/
    /******************************************************************************************************************/

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAll()
    {
        return self::find()
            ->select([
                'id',
                'range' => 'CONCAT(`min`, \' \', `max`)'
            ])
            ->all();

    }

    public function range()
    {
        return "{$this->min} - {$this->max}";
    }
}
