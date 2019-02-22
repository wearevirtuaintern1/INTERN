<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190221112059 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE book ADD authors_id INT NOT NULL, CHANGE title title VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE date_of_publishment date_of_publishment INT NOT NULL, CHANGE availability availability TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3316DE2013A FOREIGN KEY (authors_id) REFERENCES author (id)');
        $this->addSql('CREATE INDEX IDX_CBE5A3316DE2013A ON book (authors_id)');
        $this->addSql('ALTER TABLE author ADD book VARCHAR(255) NOT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE surname surname VARCHAR(255) NOT NULL, CHANGE country country VARCHAR(255) NOT NULL, CHANGE birth_year birth_year INT NOT NULL, CHANGE death_year death_year INT DEFAULT NULL');
        $this->addSql('ALTER TABLE genre CHANGE name name VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE author DROP book, CHANGE name name LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE surname surname LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE country country LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE birth_year birth_year DATE NOT NULL, CHANGE death_year death_year DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3316DE2013A');
        $this->addSql('DROP INDEX IDX_CBE5A3316DE2013A ON book');
        $this->addSql('ALTER TABLE book DROP authors_id, CHANGE title title LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE description description LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE date_of_publishment date_of_publishment DATE NOT NULL, CHANGE availability availability VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE genre CHANGE name name LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE description description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
