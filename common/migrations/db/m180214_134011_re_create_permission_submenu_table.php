<?php

use yii\db\Migration;

/**
 * Class m180214_134011_re_create_permission_submenu_table
 */
class m180214_134011_re_create_permission_submenu_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropTable('{{%permission_submenu}}');
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%permission_submenu}}', [
            'id' => $this->bigPrimaryKey()->unsigned(),
            'name' => $this->string(255),
            'description' => $this->string(512),
            'parent_id' => $this->bigInteger()->unsigned(),
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ], $tableOptions);

        $this->addForeignKey('fk_permission_parent_id', '{{%permission_submenu}}', 'parent_id', '{{%permission_menu}}', 'id', 'cascade');
        $this->insert('permission_submenu', ['name' => 'View All', 'parent_id' => 1,]);
        $this->insert('permission_submenu', ['name' => 'Add New', 'parent_id' => 1,]);

        $this->insert('permission_submenu', ['name' => 'View All', 'parent_id' => 2,]);
        $this->insert('permission_submenu', ['name' => 'Add New', 'parent_id' => 2,]);
        $this->insert('permission_submenu', ['name' => 'Attributes', 'parent_id' => 2,]);
        $this->insert('permission_submenu', ['name' => 'Categories', 'parent_id' => 2,]);
        $this->insert('permission_submenu', ['name' => 'Variations', 'parent_id' => 2,]);

        $this->insert('permission_submenu', ['name' => 'View All', 'parent_id' => 3,]);
        $this->insert('permission_submenu', ['name' => 'View All', 'parent_id' => 4,]);
        $this->insert('permission_submenu', ['name' => 'Add New', 'parent_id' => 4,]);

    }

    public function down()
    {
        $this->dropTable('{{%permission_submenu}}');
    }
}
