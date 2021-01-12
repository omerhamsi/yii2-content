<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210112_172745_yorumlar
 */
class m210112_172745_yorumlar extends Migration
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
        echo "m210112_172745_yorumlar cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210112_172745_yorumlar cannot be reverted.\n";

        return false;
    }
    */
}
