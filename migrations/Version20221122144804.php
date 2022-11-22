<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221122144804 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite DROP activite_id');
        $this->addSql('ALTER TABLE contact DROP contact_id');
        $this->addSql('ALTER TABLE etat DROP etat_id');
        $this->addSql('ALTER TABLE logement DROP logement_id');
        $this->addSql('ALTER TABLE miage DROP miage_id');
        $this->addSql('ALTER TABLE pole DROP pole_id');
        $this->addSql('ALTER TABLE reservation DROP reservation_id');
        $this->addSql('ALTER TABLE sponsor DROP sponsor_id');
        $this->addSql('ALTER TABLE status DROP status_id');
        $this->addSql('ALTER TABLE transport DROP transport_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite ADD activite_id INT NOT NULL');
        $this->addSql('ALTER TABLE contact ADD contact_id INT NOT NULL');
        $this->addSql('ALTER TABLE etat ADD etat_id INT NOT NULL');
        $this->addSql('ALTER TABLE logement ADD logement_id INT NOT NULL');
        $this->addSql('ALTER TABLE miage ADD miage_id INT NOT NULL');
        $this->addSql('ALTER TABLE pole ADD pole_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD reservation_id INT NOT NULL');
        $this->addSql('ALTER TABLE sponsor ADD sponsor_id INT NOT NULL');
        $this->addSql('ALTER TABLE status ADD status_id INT NOT NULL');
        $this->addSql('ALTER TABLE transport ADD transport_id INT NOT NULL');
    }
}
