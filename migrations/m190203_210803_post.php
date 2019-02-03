<?php

use yii\db\Migration;

/**
 * Class m190203_210803_post
 */
class m190203_210803_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%post}}", [
            'id' => $this->primaryKey(),
            'title' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            'image' => $this->text()->defaultValue(NULL)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190203_210803_post reverted.\n";
        $this->dropTable("{{%post}}");
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190203_210803_post cannot be reverted.\n";

        return false;
    }
    */
}
