<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m240604_140432_add_person_table
 */
class m240604_140432_add_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(30),
            'lastname' => $this->string(30),
            'email' => $this->string(50),
            'age' => $this->integer(2),
            'gender' => Schema::TYPE_STRING
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('person');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240604_140432_add_person_table cannot be reverted.\n";

        return false;
    }
    */
}
