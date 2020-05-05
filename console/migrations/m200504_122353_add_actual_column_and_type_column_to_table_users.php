<?php

use yii\db\Migration;

/**
 * Class m200504_122353_add_actual_column_and_type_column_to_table_users
 */
class m200504_122353_add_actual_column_and_type_column_to_table_users extends Migration
{
  /**
   * {@inheritdoc}
   */
  public function safeUp()
  {
      $this->addColumn('{{%user}}', 'actual', $this->boolean()->defaultValue(false));
      $this->addColumn('{{%user}}', 'type', $this->boolean()->defaultValue(null));
  }

  /**
   * {@inheritdoc}
   */
  public function safeDown()
  {
      $this->dropColumn('{{%user}}', 'actual');
      $this->dropColumn('{{%user}}', 'type');
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
