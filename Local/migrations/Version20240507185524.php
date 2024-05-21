<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507185524 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854F68C84212');
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854FD3819735');
        $this->addSql('DROP TABLE examen_alumno');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE examen_alumno (id INT AUTO_INCREMENT NOT NULL, examen_final_id INT NOT NULL, alumno_id INT NOT NULL, nota INT DEFAULT NULL, tomo VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, folio VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_2852854F2F747F9B (examen_final_id), INDEX IDX_2852854FFC28E5EE (alumno_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854F68C84212 FOREIGN KEY (examen_final_id) REFERENCES examen_final (id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854FD3819735 FOREIGN KEY (alumno_id) REFERENCES alumno (id)');
    }
}
