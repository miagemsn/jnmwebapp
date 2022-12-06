<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205080918 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logement DROP img');
        $this->addSql('ALTER TABLE reservation ADD logement_id INT DEFAULT NULL, ADD transport_id INT DEFAULT NULL, ADD activite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495558ABF955 FOREIGN KEY (logement_id) REFERENCES logement (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559909C13F FOREIGN KEY (transport_id) REFERENCES transport (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('CREATE INDEX IDX_42C8495558ABF955 ON reservation (logement_id)');
        $this->addSql('CREATE INDEX IDX_42C849559909C13F ON reservation (transport_id)');
        $this->addSql('CREATE INDEX IDX_42C849559B0F88B1 ON reservation (activite_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logement ADD img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495558ABF955');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559909C13F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559B0F88B1');
        $this->addSql('DROP INDEX IDX_42C8495558ABF955 ON reservation');
        $this->addSql('DROP INDEX IDX_42C849559909C13F ON reservation');
        $this->addSql('DROP INDEX IDX_42C849559B0F88B1 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP logement_id, DROP transport_id, DROP activite_id');
    }
}
