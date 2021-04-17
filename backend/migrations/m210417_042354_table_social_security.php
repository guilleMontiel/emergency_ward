<?php

use yii\db\Migration;

/**
 * Class m210417_042354_table_social_security
 */
class m210417_042354_table_social_security extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('social_security',array(
            'id'=>'integer not null',
            'number'=>'bigint',
            'id_patient'=>'integer',
            'active'=>'boolean'
        ));
        $this->addPrimaryKey('socialpk','social_security', 'id');
        $this->alterColumn('social_security', 'id', 'integer not null auto_increment');
        $this->addForeignKey('patientfk', 'social_security', 'id_patient','patient', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('socialpk');
        $this->dropForeignKey('patientfk');
        $this->dropTable('social_security');
        echo "m210417_042354_table_social_security cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210417_042354_table_social_security cannot be reverted.\n";

        return false;
    }
    */
}
