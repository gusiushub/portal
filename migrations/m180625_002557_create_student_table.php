<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m180625_002557_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'f_name' => $this->string(),
            's_name' => $this->string(),
            'faculty' => $this->string(),
            'lvl_eng' => $this->string(),
            'port' => $this->string(),
            'country' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('student');
    }
}
