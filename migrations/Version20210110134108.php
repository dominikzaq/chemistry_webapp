<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210110134108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE atom (id INT AUTO_INCREMENT NOT NULL, symbol VARCHAR(25) NOT NULL, name VARCHAR(100) NOT NULL, atomic_number INT NOT NULL, atomic_weight DOUBLE PRECISION NOT NULL, atomic_radius INT NOT NULL, ion_radius INT NOT NULL, melting_temperature DOUBLE PRECISION NOT NULL, density DOUBLE PRECISION NOT NULL, boiling_temperature DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_2040E57BECC836F9 (symbol), UNIQUE INDEX UNIQ_2040E57B5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, atom_id INT NOT NULL, img VARCHAR(255) NOT NULL, INDEX IDX_C53D045F6B300498 (atom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F6B300498 FOREIGN KEY (atom_id) REFERENCES atom (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F6B300498');
        $this->addSql('DROP TABLE atom');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE user');
    }
}
