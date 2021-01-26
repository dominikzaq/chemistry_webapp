<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210126203720 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oscillator_strength ADD j_j VARCHAR(50) NOT NULL, ADD fik1 DOUBLE PRECISION NOT NULL, ADD aki1 DOUBLE PRECISION NOT NULL, ADD fik2 DOUBLE PRECISION NOT NULL, ADD aki2 DOUBLE PRECISION NOT NULL, ADD fik3 DOUBLE PRECISION NOT NULL, ADD aki3 DOUBLE PRECISION NOT NULL, ADD fik4 DOUBLE PRECISION NOT NULL, ADD aki4 DOUBLE PRECISION NOT NULL, ADD fik5 DOUBLE PRECISION NOT NULL, ADD aki5 DOUBLE PRECISION NOT NULL, DROP intensity, DROP wave_length, DROP aki, DROP j, CHANGE configuration transition VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oscillator_strength ADD intensity INT NOT NULL, ADD wave_length DOUBLE PRECISION NOT NULL, ADD aki DOUBLE PRECISION NOT NULL, ADD j INT NOT NULL, DROP j_j, DROP fik1, DROP aki1, DROP fik2, DROP aki2, DROP fik3, DROP aki3, DROP fik4, DROP aki4, DROP fik5, DROP aki5, CHANGE transition configuration VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
