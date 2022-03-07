<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rate}}`.
 */
class m220305_133036_create_rate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rate}}', [
            'id' => $this->primaryKey(),
            'min' => $this->integer(10)->notNull(),
            'max' => $this->integer(10)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rate}}');
    }
}
