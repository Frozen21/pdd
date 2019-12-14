<?php

use yii\db\Migration;

/**
 * Class m191214_150358_add_colums_to_table_users
 */
class m191214_150358_add_colums_to_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'first_name', $this->string());
        $this->addColumn('{{%user}}', 'last_name', $this->string());
        $this->addColumn('{{%user}}', 'phone', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'first_name');
        $this->dropColumn('{{%user}}', 'last_name');
        $this->dropColumn('{{%user}}', 'phone');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191214_150358_add_colums_to_table_users cannot be reverted.\n";

        return false;
    }
    */
}
