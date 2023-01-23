<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221220123245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('CREATE TABLE livres (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, auteur VARCHAR(255) NOT NULL, tome VARCHAR(255) NOT NULL, serie INT NOT NULL, isbn BIGINT NOT NULL, quantite INT NOT NULL, tarif DOUBLE PRECISION NOT NULL, etat TINYINT(1) NOT NULL, pervers TINYINT(1) NOT NULL, image VARCHAR(255) NOT NULL, genres VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(255) NOT NULL, cree_at DATETIME NOT NULL, modifie_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE order_book (id INT AUTO_INCREMENT NOT NULL, livres_id INT NOT NULL, order_ref_id INT NOT NULL, quantite INT NOT NULL, INDEX IDX_86149926EBF07F38 (livres_id), INDEX IDX_86149926E238517C (order_ref_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postale VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, birthat DATETIME DEFAULT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('ALTER TABLE order_book ADD CONSTRAINT FK_86149926EBF07F38 FOREIGN KEY (livres_id) REFERENCES livres (id)');
        //$this->addSql('ALTER TABLE order_book ADD CONSTRAINT FK_86149926E238517C FOREIGN KEY (order_ref_id) REFERENCES `order` (id)');
        //$this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE order_book DROP FOREIGN KEY FK_86149926EBF07F38');
        //$this->addSql('ALTER TABLE order_book DROP FOREIGN KEY FK_86149926E238517C');
        //$this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
       // $this->addSql('DROP TABLE livres');
       // $this->addSql('DROP TABLE `order`');
       // $this->addSql('DROP TABLE order_book');
       // $this->addSql('DROP TABLE reset_password_request');
       // $this->addSql('DROP TABLE user');
       // $this->addSql('DROP TABLE messenger_messages');
    }
}
