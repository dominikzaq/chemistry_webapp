<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125174444 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE energy_level (id INT AUTO_INCREMENT NOT NULL, jonization_level_id INT NOT NULL, configuration VARCHAR(100) NOT NULL, term VARCHAR(20) NOT NULL, j INT NOT NULL, level DOUBLE PRECISION NOT NULL, INDEX IDX_22D3F9582F93CDE4 (jonization_level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jonization_level (id INT AUTO_INCREMENT NOT NULL, atom_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_DAC8C66C6B300498 (atom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oscillator_strength (id INT AUTO_INCREMENT NOT NULL, jonization_level_id INT NOT NULL, intensity INT NOT NULL, wave_length DOUBLE PRECISION NOT NULL, aki DOUBLE PRECISION NOT NULL, configuration VARCHAR(100) NOT NULL, term VARCHAR(20) NOT NULL, j INT NOT NULL, INDEX IDX_6F9ACF7A2F93CDE4 (jonization_level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE energy_level ADD CONSTRAINT FK_22D3F9582F93CDE4 FOREIGN KEY (jonization_level_id) REFERENCES jonization_level (id)');
        $this->addSql('ALTER TABLE jonization_level ADD CONSTRAINT FK_DAC8C66C6B300498 FOREIGN KEY (atom_id) REFERENCES atom (id)');
        $this->addSql('ALTER TABLE oscillator_strength ADD CONSTRAINT FK_6F9ACF7A2F93CDE4 FOREIGN KEY (jonization_level_id) REFERENCES jonization_level (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE energy_level DROP FOREIGN KEY FK_22D3F9582F93CDE4');
        $this->addSql('ALTER TABLE oscillator_strength DROP FOREIGN KEY FK_6F9ACF7A2F93CDE4');
        $this->addSql('DROP TABLE energy_level');
        $this->addSql('DROP TABLE jonization_level');
        $this->addSql('DROP TABLE oscillator_strength');
    }
}
