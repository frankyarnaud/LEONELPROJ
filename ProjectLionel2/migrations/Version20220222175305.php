<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222175305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD COLUMN isread BOOLEAN DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__contact AS SELECT id, nom, prenom, email, phone, statut, comentaire FROM contact');
        $this->addSql('DROP TABLE contact');
        $this->addSql('CREATE TABLE contact (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone INTEGER NOT NULL, statut VARCHAR(255) NOT NULL, comentaire CLOB NOT NULL)');
        $this->addSql('INSERT INTO contact (id, nom, prenom, email, phone, statut, comentaire) SELECT id, nom, prenom, email, phone, statut, comentaire FROM __temp__contact');
        $this->addSql('DROP TABLE __temp__contact');
    }
}
