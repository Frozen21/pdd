<?php

use yii\db\Migration;

/**
 * Class m200505_152647_change_type_of_type_column_in_user_table
 */
class m200505_152647_change_type_of_type_column_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'type');
        $this->addColumn('{{%user}}', 'type', $this->integer()->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'type');
        $this->addColumn('{{%user}}', 'type', $this->boolean()->defaultValue(null));
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
