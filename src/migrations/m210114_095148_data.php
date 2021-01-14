<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210114_095148_data
 */
class m210114_095148_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('urunler',[
            'isim'=>'apple 11PRO',
            'fiyat'=>4.851
        ]);
        $this->insert('urunler',[
            'isim'=>'apple 5s',
            'fiyat'=>4.956
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210114_095148_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210114_095148_data cannot be reverted.\n";

        return false;
    }
    */
}
