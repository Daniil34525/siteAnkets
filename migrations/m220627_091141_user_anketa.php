<?php

use yii\db\Migration;

/**
 * Class m220627_091141_user_anketa
 */
class m220627_091141_user_anketa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('anketa',[
            'id' =>$this->primaryKey(),
            'name' =>$this->string(),
            'surname' =>$this->string(),
            'password' =>$this->string(),
            'phone' =>$this->string(),
            'email' =>$this->string(),
            'created_at' =>$this->date(),
            'updated_at' =>$this->date(),
        ])
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220627_091141_user_anketa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220627_091141_user_anketa cannot be reverted.\n";

        return false;
    }
    */
}
