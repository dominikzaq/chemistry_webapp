<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127101431 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aki_ref ADD oscillator_strength_id INT NOT NULL');
        $this->addSql('ALTER TABLE aki_ref ADD CONSTRAINT FK_3EFC8ACF639F9902 FOREIGN KEY (oscillator_strength_id) REFERENCES oscillator_strength (id)');
        $this->addSql('CREATE INDEX IDX_3EFC8ACF639F9902 ON aki_ref (oscillator_strength_id)');
        $this->addSql('ALTER TABLE fik_ref ADD oscillator_strength_id INT NOT NULL');
        $this->addSql('ALTER TABLE fik_ref ADD CONSTRAINT FK_CC53462A639F9902 FOREIGN KEY (oscillator_strength_id) REFERENCES oscillator_strength (id)');
        $this->addSql('CREATE INDEX IDX_CC53462A639F9902 ON fik_ref (oscillator_strength_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aki_ref DROP FOREIGN KEY FK_3EFC8ACF639F9902');
        $this->addSql('DROP INDEX IDX_3EFC8ACF639F9902 ON aki_ref');
        $this->addSql('ALTER TABLE aki_ref DROP oscillator_strength_id');
        $this->addSql('ALTER TABLE fik_ref DROP FOREIGN KEY FK_CC53462A639F9902');
        $this->addSql('DROP INDEX IDX_CC53462A639F9902 ON fik_ref');
        $this->addSql('ALTER TABLE fik_ref DROP oscillator_strength_id');
    }
}
