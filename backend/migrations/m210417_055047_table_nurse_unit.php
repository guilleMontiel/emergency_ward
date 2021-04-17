<?php

use yii\db\Migration;

/**
 * Class m210417_055047_table_nurse_unit
 */
class m210417_055047_table_nurse_unit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nurse_unit',array(
            'id'=>'integer not null',
            'id_nurse'=>'integer',
            'id_unit'=>'integer',
            'entry_date'=>'date',
            'exit_date'=>'date',
            'exit_cause'=>'text'
        ));
        $this->addPrimaryKey('nurseunitpk','nurse_unit','id');
        $this->addForeignKey('nursefk','nurse_unit','id_nurse','nurse','id');
        $this->addForeignKey('unitfk','nurse_unit','id_unit','unit','id');
        $this->alterColumn('nurse_unit','id','INTEGER AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropPrimaryKey('nurseunitpk');
        $this->dropForeignKey('nursefk');
        $this->dropForeignKey('unitfk');
        $this->dropTable('nurse_unit');
        echo "m210417_055047_table_nurse_unit cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210417_055047_table_nurse_unit cannot be reverted.\n";

        return false;
    }
    */
}
