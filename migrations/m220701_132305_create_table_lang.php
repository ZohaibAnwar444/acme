<?php

use yii\db\Migration;

/**
 * Class m220701_132305_create_table_lang
 */
class m220701_132305_create_table_lang extends Migration
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
    //     echo "m220701_132305_create_table_lang cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('place_lang',[
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->integer(11)->unsigned()->notNull(),
            'locality' => $this->string(45)->notNull(),
            'country' => $this->string(45)->notNull(),
            'lang' => $this->string(2)->notNull(),
        ]);
        $this->createIndex('idx_place_lang_place_id_place', 'place_lang','place_id');
        $this->addForeignKey('fk_place_lang_place_id_place','place_lang','place_id','place','id','restrict', 'cascade');
    }

    public function down()
    {
        $this->dropForeignKey('fk_place_lang_place_id_place','place_lang');

        $this->dropIndex('idx_place_lang_place_id_place','place_lang');


        $this->dropTable('place_lang');
        echo "m220701_132305_create_table_lang cannot be reverted.\n";

        return false;
    }
    
}
