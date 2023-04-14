<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413201820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE TABLE borrow (id INT AUTO_INCREMENT NOT NULL, borrow_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', borrow_return_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('DROP TABLE borrow_book');
        // // $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A331EDF08A00');
        // $this->addSql('DROP INDEX IDX_CBE5A331EDF08A00 ON book');
        // // $this->addSql('ALTER TABLE book DROP boxbook_id_id, DROP resume, DROP id_borrow_book_id, CHANGE cover cover VARCHAR(255) DEFAULT NULL');
        // $this->addSql('ALTER TABLE box_book DROP capacity, CHANGE geoloc geoloc LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        // $this->addSql('ALTER TABLE user DROP name, DROP is_verified, DROP phone, CHANGE uuid uuid VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL');
        // $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE borrow_book (id INT AUTO_INCREMENT NOT NULL, start DATE DEFAULT NULL, end DATE DEFAULT NULL, id_book_id INT NOT NULL, id_user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE borrow');
        $this->addSql('ALTER TABLE book ADD boxbook_id_id INT DEFAULT NULL, ADD resume LONGTEXT NOT NULL, ADD id_borrow_book_id INT DEFAULT NULL, CHANGE cover cover VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A331EDF08A00 FOREIGN KEY (boxbook_id_id) REFERENCES box_book (id)');
        $this->addSql('CREATE INDEX IDX_CBE5A331EDF08A00 ON book (boxbook_id_id)');
        $this->addSql('ALTER TABLE box_book ADD capacity INT NOT NULL, CHANGE geoloc geoloc LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD name VARCHAR(255) NOT NULL, ADD is_verified TINYINT(1) NOT NULL, ADD phone VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE uuid uuid CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\'');
    }
}
