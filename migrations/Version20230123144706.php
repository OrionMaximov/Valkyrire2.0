<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230123144706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, question LONGTEXT NOT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('ALTER TABLE order_item RENAME INDEX idx_86149926ebf07f38 TO IDX_52EA1F09EBF07F38');
       // $this->addSql('ALTER TABLE order_item RENAME INDEX idx_86149926e238517c TO IDX_52EA1F09E238517C');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       // $this->addSql('DROP TABLE contact');
       // $this->addSql('ALTER TABLE order_item RENAME INDEX idx_52ea1f09ebf07f38 TO IDX_86149926EBF07F38');
       // $this->addSql('ALTER TABLE order_item RENAME INDEX idx_52ea1f09e238517c TO IDX_86149926E238517C');
    }
}
