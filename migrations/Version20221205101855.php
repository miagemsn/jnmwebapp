<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205101855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, miage_id INT NOT NULL, pole_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, INDEX IDX_4C62E6384DA00F84 (miage_id), INDEX IDX_4C62E638419C3385 (pole_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6384DA00F84 FOREIGN KEY (miage_id) REFERENCES miage (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638419C3385 FOREIGN KEY (pole_id) REFERENCES pole (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6384DA00F84');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638419C3385');
        $this->addSql('DROP TABLE contact');
    }
}
