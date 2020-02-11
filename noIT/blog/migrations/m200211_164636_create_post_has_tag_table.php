<?php

namespace noIT\blog\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_post_has_blog_tag}}`.
 */
class m200211_164636_create_post_has_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog_post_has_blog_tag}}', [
            'post_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx--blog_post_has_blog_tag--post_id-and-tag_id',
            'blog_post_has_blog_tag',
            ['post_id', 'tag_id'],
            true
        );

        $this->addForeignKey(
            'fk--blog_post_has_blog_tag--post_id',
            'blog_post_has_blog_tag',
            'post_id',
            'post',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk--blog_post_has_blog_tag--tag_id',
            'blog_post_has_blog_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_post_has_blog_tag}}');

        $this->dropForeignKey('fk--blog_post_has_blog_tag--tag_id', 'blog_post_has_blog_tag');
        $this->dropForeignKey('fk--blog_post_has_blog_tag--post_id', 'blog_post_has_blog_tag');

        $this->dropIndex('idx--blog_post_has_blog_tag--post_id-and-tag_id', 'blog_post_has_blog_tag');

        return true;
    }
}
