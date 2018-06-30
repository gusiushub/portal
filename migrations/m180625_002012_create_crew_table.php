<?php

use yii\db\Migration;

/**
 * Handles the creation of table `crew`.
 */
class m180625_002012_create_crew_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('crew', [
            'id' => $this->primaryKey(),
            'position' => $this->string(),
            'lvl_eng' => $this->string(),
            'salary' => $this->string(),
            'curency' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('crew');
    }
}
