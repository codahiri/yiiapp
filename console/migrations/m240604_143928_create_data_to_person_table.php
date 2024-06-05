<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%data_to_person}}`.
 */
class m240604_143928_create_data_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            'person',
            [
                'firstname', 'lastname', 'email', 'age', 'gender'
            ],
            [
                ['Ali', 'Valiyev', 'vali@mail.uz', 21, 'erkak'],
                ['Vali', 'Aliyev', 'ali@mail.uz', 26, 'erkak'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
