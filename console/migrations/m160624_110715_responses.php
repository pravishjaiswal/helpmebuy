<?php

use yii\db\Migration;

class m160624_110715_responses extends Migration
{
    public function up()
    {
		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%responses}}', [
            'id' => $this->primaryKey(),
            'product_title' => $this->string()->notNull(),
            'price' => $this->decimal()->notNull(),
            'link' => $this->string()->notNull(),
            'discount' => $this->string()->notNull(),
            'effective_price' => $this->decimal()->notNull(),
            'remarks' => $this->string()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%responses}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
