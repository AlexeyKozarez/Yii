<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%streets}}`.
 */
class m191130_185937_create_streets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%streets}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32),
            'id_city' => $this->smallInteger(8)
        ]);

        $this->alterColumn('streets', 'id', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');

        $this->addForeignKey(
            'street_to_city',
            'streets',
            'id_city',
            'cities',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%streets}}');
    }
}
