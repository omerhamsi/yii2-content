<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210114_095136_yorumlar
 */
class m210114_095136_yorumlar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('yorumlar',[
            'id'=>Schema::TYPE_PK,
            'yorumid'=>Schema::TYPE_INTEGER,
            'yorumlar'=>Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('yorumlar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210114_095136_yorumlar cannot be reverted.\n";

        return false;
    }
    */
}
