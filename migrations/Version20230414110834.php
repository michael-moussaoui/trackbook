<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230414110834 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE borrow DROP book_id, DROP user_id, CHANGE borrow_at borrow_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE borrow_return_at borrow_return_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        //$this->addSql('ALTER TABLE box_book CHANGE sreet street VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE borrow ADD book_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL, CHANGE borrow_at borrow_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE borrow_return_at borrow_return_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE box_book CHANGE street sreet VARCHAR(255) NOT NULL');
    }
}
