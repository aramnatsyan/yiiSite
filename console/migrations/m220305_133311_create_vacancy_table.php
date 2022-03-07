<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacancy}}`.
 */
class m220305_133311_create_vacancy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vacancy}}', [
            'id' => $this->primaryKey(),
            'department_id' => $this->integer(11)->notNull(),
            'rate_id' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);


        $this->addForeignKey(
            'fk_vacancy_department',
            'vacancy',
            'department_id',
            'department',
            '`id`'
        );

        $this->addForeignKey(
            'fk_vacancy_rate',
            'vacancy',
            'rate_id',
            'rate',
            '`id`'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vacancy}}');
        $this->dropForeignKey('fk_vacancy_department','vacancy');
        $this->dropForeignKey('fk_vacancy_rate','vacancy');
    }
}
