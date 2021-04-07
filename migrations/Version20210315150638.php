<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210315150638 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE url (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, url_hash VARCHAR(6) NOT NULL, created_at DATETIME NOT NULL, update_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, is_active TINYINT(1) NOT NULL, user_id INT NOT NULL, click_count INT NOT NULL, is_public TINYINT(1) NOT NULL, expired_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE url_stats (id INT AUTO_INCREMENT NOT NULL, url_id INT NOT NULL, browser VARCHAR(120) NOT NULL, ip_address VARCHAR(255) NOT NULL, device VARCHAR(45) NOT NULL, resolution VARCHAR(12) NOT NULL, locale VARCHAR(2) NOT NULL, city VARCHAR(30) DEFAULT NULL, country VARCHAR(30) DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE url');
        $this->addSql('DROP TABLE url_stats');
        $this->addSql('DROP TABLE user');
    }
}
