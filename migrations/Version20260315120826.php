<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260315120826 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menu_dish (menu_id INT NOT NULL, dish_id INT NOT NULL, INDEX IDX_5D327CF6CCD7E912 (menu_id), INDEX IDX_5D327CF6148EB0CB (dish_id), PRIMARY KEY (menu_id, dish_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE menu_dish ADD CONSTRAINT FK_5D327CF6CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu_dish ADD CONSTRAINT FK_5D327CF6148EB0CB FOREIGN KEY (dish_id) REFERENCES dish (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu ADD diet_id INT NOT NULL, ADD theme_id INT NOT NULL');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93E1E13ACE FOREIGN KEY (diet_id) REFERENCES diet (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A9359027487 FOREIGN KEY (theme_id) REFERENCES theme (id)');
        $this->addSql('CREATE INDEX IDX_7D053A93E1E13ACE ON menu (diet_id)');
        $this->addSql('CREATE INDEX IDX_7D053A9359027487 ON menu (theme_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE menu_dish DROP FOREIGN KEY FK_5D327CF6CCD7E912');
        $this->addSql('ALTER TABLE menu_dish DROP FOREIGN KEY FK_5D327CF6148EB0CB');
        $this->addSql('DROP TABLE menu_dish');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93E1E13ACE');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A9359027487');
        $this->addSql('DROP INDEX IDX_7D053A93E1E13ACE ON menu');
        $this->addSql('DROP INDEX IDX_7D053A9359027487 ON menu');
        $this->addSql('ALTER TABLE menu DROP diet_id, DROP theme_id');
    }
}
