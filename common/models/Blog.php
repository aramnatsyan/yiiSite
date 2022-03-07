<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $subject
 * @property int|null $status
 * @property int $created_at
 * @property int $updated_at
 */
class Blog extends \yii\db\ActiveRecord
{

    const STATUS = [
        'active' => 1,
        'inactive' => 2,
    ];
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
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'subject'], 'required'],
            [['subject'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subject' => 'Subject',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
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
            ->where(['status' => self::STATUS['active']])
            ->all();

    }
}
