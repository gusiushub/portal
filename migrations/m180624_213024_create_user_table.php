<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180624_213024_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'f_name' => $this->string(100),
            's_name' => $this->string(100),
            'email' => $this->string(100),
            'city' => $this->string(100),
            'phone' => $this->string(100),
            'country' => $this->string(100),
            'website' => $this->string(100),
            'company' => $this->string(100),
            'username' => $this->string(50),
            'password' => $this->string(255),
            'option' => $this->string(),
            'photo' => $this->string()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
