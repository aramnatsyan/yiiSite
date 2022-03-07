<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\models\Department;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property int $department_id
 * @property int $rate_id
 * @property string $title
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Department $department
 * @property Rate $rate
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'rate_id', 'title', 'description'], 'required'],
            [['department_id', 'rate_id', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['rate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rate::className(), 'targetAttribute' => ['rate_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'Department ID',
            'rate_id' => 'Rate ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * Gets query for [[Rate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRate()
    {
        return $this->hasOne(Rate::className(), ['id' => 'rate_id']);
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAll()
    {

        return self::find()->select('vacancy.*, department.name')

            ->leftJoin('department', 'vacancy.department_id = department.id')

            ->all();

    }
}
