<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309173212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, tableid_id INT NOT NULL, nom VARCHAR(255) NOT NULL, datereservation DATETIME NOT NULL, mobile INT NOT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_42C8495568B7AE87 (tableid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `table` (id INT AUTO_INCREMENT NOT NULL, numerotable INT NOT NULL, imagetable VARCHAR(255) NOT NULL, nbplacetable INT NOT NULL, etat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495568B7AE87 FOREIGN KEY (tableid_id) REFERENCES `table` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495568B7AE87');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE `table`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE username username VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_general_ci` COMMENT \'(DC2Type:json)\', CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE file file VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE activation_token activation_token VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE address address VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE reset_token reset_token VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_general_ci`');
    }
}
