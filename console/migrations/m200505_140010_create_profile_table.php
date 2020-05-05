<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m200505_140010_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'info' => $this->text()
        ]);
        $this->addForeignKey('fk-profile-user_id-user-id', 'profile', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profile}}');
    }
}
