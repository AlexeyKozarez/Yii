<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dob}}`.
 */
class m191130_143952_create_dob_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dob}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dob}}');
    }
}
