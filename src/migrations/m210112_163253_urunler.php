<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210112_163253_urunler
 */
class m210112_163253_urunler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable("urunler",[
            "id"=>Schema::TYPE_PK,
            "isim"=>Schema::TYPE_STRING,
            "fiyat"=>Schema::TYPE_DOUBLE

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('urunler');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210112_163253_urunler cannot be reverted.\n";

        return false;
    }
    */
}
