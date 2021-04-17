<?php

use yii\db\Migration;

/**
 * Class m210417_034616_table_person
 */
class m210417_034616_table_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person',array(
            'id'=>'integer not null',
            'name'=>'varchar(60)',
            'last_name'=>'varchar(60)',
            'id_number'=>'bigint',
            'age'=>'integer',
            'birth_date'=>'date',
            'phone_number'=>'bigint',
            'email'=>'varchar(30)',
            'gender'=>'varchar(3)'
        ));
        $this->addPrimaryKey('personpk','person','id');
        $this->alterColumn('person','id','INTEGER AUTO_INCREMENT');
        $this->addForeignKey('personfk','nurse','id_person','person','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('personpk');
        $this->dropForeignKey('personfk');
        $this->dropTable('person');
        echo "m210417_034616_table_person cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210417_034616_table_person cannot be reverted.\n";

        return false;
    }
    */
}
