<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213170538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette ADD planningid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recette ADD CONSTRAINT FK_49BB6390EAB7E602 FOREIGN KEY (planningid_id) REFERENCES planning (id)');
        $this->addSql('CREATE INDEX IDX_49BB6390EAB7E602 ON recette (planningid_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE recette DROP FOREIGN KEY FK_49BB6390EAB7E602');
        $this->addSql('DROP INDEX IDX_49BB6390EAB7E602 ON recette');
        $this->addSql('ALTER TABLE recette DROP planningid_id, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ingredients ingredients VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
