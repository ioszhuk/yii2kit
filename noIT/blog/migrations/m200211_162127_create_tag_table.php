<?php

namespace noIT\blog\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_tag}}`.
 */
class m200211_162127_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog_tag}}', [
            'id' => $this->primaryKey(),

            'name' => $this->string()->notNull(),
            'slug' => $this->string()->null(),

            'status' => $this->tinyInteger(2)->unsigned()->notNull()->defaultValue(10),

            'seo_title' => $this->string(255)->null(),
            'seo_description' => $this->string(255)->null(),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_tag}}');

        return true;
    }
}
