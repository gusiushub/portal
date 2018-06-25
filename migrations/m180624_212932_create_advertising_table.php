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
            'title' => $this->string(),
            'vessel_type' => $this->string(),
            'option_vessel' => $this->string(),
            'length_from' => $this->integer(),
            'length_to' => $this->integer(),
            'draft_from' => $this->integer(),
            'draft_to' => $this->integer(),
            'deadweight_from' => $this->integer(),
            'deadweight_to' => $this->integer(),
            'year_from' => $this->date(),
            'year_to' => $this->date(),
            'price_from' => $this->integer(),
            'price_to' => $this->integer(),
            'currency' => $this->string(),
            'flag' => $this->string(),
            'position' => $this->string(),
            'salary' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->integer(),
            'category_id' => $this->integer(),
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
