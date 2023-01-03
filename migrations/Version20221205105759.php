<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205105759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite CHANGE tarif tarif DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE logement CHANGE tarif tarif DOUBLE PRECISION NOT NULL, CHANGE tarif_groupe tarif_groupe DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE transport CHANGE tarif tarif DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite CHANGE tarif tarif INT NOT NULL');
        $this->addSql('ALTER TABLE logement CHANGE tarif tarif INT NOT NULL, CHANGE tarif_groupe tarif_groupe INT NOT NULL');
        $this->addSql('ALTER TABLE transport CHANGE tarif tarif INT NOT NULL');
    }
}
