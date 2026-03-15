<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260313100955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE role CHANGE libelle name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE user ADD first_name VARCHAR(50) NOT NULL, ADD last_name VARCHAR(50) NOT NULL, ADD phone_number VARCHAR(50) NOT NULL, ADD address LONGTEXT NOT NULL, ADD zip_code VARCHAR(10) NOT NULL, ADD city VARCHAR(50) NOT NULL, ADD country VARCHAR(50) NOT NULL, DROP prenom, DROP nom, DROP telephone, DROP ville, DROP pays, DROP adresse_postale, CHANGE email email VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE role CHANGE name libelle VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE user ADD prenom VARCHAR(50) NOT NULL, ADD nom VARCHAR(50) NOT NULL, ADD telephone VARCHAR(50) NOT NULL, ADD ville VARCHAR(50) NOT NULL, ADD pays VARCHAR(50) NOT NULL, ADD adresse_postale VARCHAR(50) NOT NULL, DROP first_name, DROP last_name, DROP phone_number, DROP address, DROP zip_code, DROP city, DROP country, CHANGE email email VARCHAR(50) NOT NULL');
    }
}
