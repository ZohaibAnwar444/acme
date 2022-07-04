<?php

use yii\db\Migration;

/**
 * Class m220704_071444_create_table_auth_key_user
 */
class m220704_071444_create_table_auth_key_user extends Migration
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
    //     echo "m220704_071444_create_table_auth_key_user cannot be reverted.\n";

    //     return false;
    // }

    public function up() {
        $this->addColumn('user', 'auth_key', $this->string(60)->notNull()->unique()->after('contact_phone'));
    }

    public function down() {
        $this->dropColumn('user', 'auth_key');
    }
}
