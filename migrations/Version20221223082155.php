<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221223082155 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE order_item RENAME INDEX idx_86149926ebf07f38 TO IDX_52EA1F09EBF07F38');
        //$this->addSql('ALTER TABLE order_item RENAME INDEX idx_86149926e238517c TO IDX_52EA1F09E238517C');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE order_item RENAME INDEX idx_52ea1f09ebf07f38 TO IDX_86149926EBF07F38');
        //$this->addSql('ALTER TABLE order_item RENAME INDEX idx_52ea1f09e238517c TO IDX_86149926E238517C');
    }
}
