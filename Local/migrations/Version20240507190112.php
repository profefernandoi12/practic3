<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507190112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE examen_alumno (id INT AUTO_INCREMENT NOT NULL, examen_final_id INT NOT NULL, cursada_id INT NOT NULL, nota INT NOT NULL, tomo VARCHAR(20) DEFAULT NULL, folio VARCHAR(20) DEFAULT NULL, INDEX IDX_2852854F2F747F9B (examen_final_id), INDEX IDX_2852854FE51B8CF2 (cursada_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854F2F747F9B FOREIGN KEY (examen_final_id) REFERENCES examen_final (id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854FE51B8CF2 FOREIGN KEY (cursada_id) REFERENCES cursada (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854F2F747F9B');
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854FE51B8CF2');
        $this->addSql('DROP TABLE examen_alumno');
    }
}
