<?php

use yii\db\Migration;

/**
 * Handles the creation of table `advertising`.
 */
class m180624_212932_create_advertising_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('advertising', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('advertising');
    }
}
