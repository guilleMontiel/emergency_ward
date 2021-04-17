<?php

use yii\db\Migration;

/**
 * Class m210417_033024_table_nurse
 */
class m210417_033024_table_nurse extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable('nurse',array(
                'id'=>'integer not null',
                'id_person'=>'integer',
                'file_number'=>'integer',
                'registration_number'=>'integer',
                'date_of_admission'=>'date',
                'position'=>'varchar(40)'
            ));
            $this->addPrimaryKey('nursepk','nurse','id');
            $this->alterColumn('nurse','id','integer AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('nursepk');
        $this->dropTable('nurse');
        echo "m210417_033024_table_nurse cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210417_033024_table_nurse cannot be reverted.\n";

        return false;
    }
    */
}
