<?php

use yii\db\Migration;

/**
 * Class m220701_130832_create_table_place
 */
class m220701_130832_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m220701_130832_create_table_place cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('place',[
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->string(45)->notNull(),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'is_country' => $this->boolean()
        ]);
    }

    public function down()
    {
        $this->dropTable('place');
        echo "m220701_130832_create_table_place cannot be reverted.\n";

        return false;
    }
    
}
