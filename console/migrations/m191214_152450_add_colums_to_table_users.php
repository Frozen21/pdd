<?php

use yii\db\Migration;

/**
 * Class m191214_152450_add_colums_to_table_users
 */
class m191214_152450_add_colums_to_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'middle_name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'middle_name');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191214_152450_add_colums_to_table_users cannot be reverted.\n";

        return false;
    }
    */
}
