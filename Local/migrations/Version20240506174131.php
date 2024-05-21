<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240506174131 extends AbstractMigration
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
        $this->addSql('ALTER TABLE examen_alumno ADD tomo VARCHAR(20) DEFAULT NULL, ADD folio VARCHAR(20) DEFAULT NULL');
        $this->addSql('DROP INDEX idx_2852854f68c84212 ON examen_alumno');
        $this->addSql('CREATE INDEX IDX_2852854F2F747F9B ON examen_alumno (examen_final_id)');
        $this->addSql('DROP INDEX idx_2852854fd3819735 ON examen_alumno');
        $this->addSql('CREATE INDEX IDX_2852854FFC28E5EE ON examen_alumno (alumno_id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854F68C84212 FOREIGN KEY (examen_final_id) REFERENCES examen_final (id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854FD3819735 FOREIGN KEY (alumno_id) REFERENCES alumno (id)');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2CFA8626B');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2D1F46B1E');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2AF1D1CBB');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2FE4078F6');
        $this->addSql('ALTER TABLE examen_final ADD libre TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX idx_8861efe2af1d1cbb ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE2C5C70C5B ON examen_final (asignatura_id)');
        $this->addSql('DROP INDEX idx_8861efe2d1f46b1e ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE297B7E846 ON examen_final (presidente_id)');
        $this->addSql('DROP INDEX idx_8861efe2cfa8626b ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE298D88FCB ON examen_final (vocal1_id)');
        $this->addSql('DROP INDEX idx_8861efe2fe4078f6 ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE28A6D2025 ON examen_final (vocal2_id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2CFA8626B FOREIGN KEY (vocal1_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2D1F46B1E FOREIGN KEY (presidente_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2AF1D1CBB FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2FE4078F6 FOREIGN KEY (vocal2_id) REFERENCES docente (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854F2F747F9B');
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854FFC28E5EE');
        $this->addSql('ALTER TABLE examen_alumno DROP tomo, DROP folio');
        $this->addSql('DROP INDEX idx_2852854f2f747f9b ON examen_alumno');
        $this->addSql('CREATE INDEX IDX_2852854F68C84212 ON examen_alumno (examen_final_id)');
        $this->addSql('DROP INDEX idx_2852854ffc28e5ee ON examen_alumno');
        $this->addSql('CREATE INDEX IDX_2852854FD3819735 ON examen_alumno (alumno_id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854F2F747F9B FOREIGN KEY (examen_final_id) REFERENCES examen_final (id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854FFC28E5EE FOREIGN KEY (alumno_id) REFERENCES alumno (id)');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2C5C70C5B');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE297B7E846');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE298D88FCB');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE28A6D2025');
        $this->addSql('ALTER TABLE examen_final DROP libre');
        $this->addSql('DROP INDEX idx_8861efe28a6d2025 ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE2FE4078F6 ON examen_final (vocal2_id)');
        $this->addSql('DROP INDEX idx_8861efe2c5c70c5b ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE2AF1D1CBB ON examen_final (asignatura_id)');
        $this->addSql('DROP INDEX idx_8861efe297b7e846 ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE2D1F46B1E ON examen_final (presidente_id)');
        $this->addSql('DROP INDEX idx_8861efe298d88fcb ON examen_final');
        $this->addSql('CREATE INDEX IDX_8861EFE2CFA8626B ON examen_final (vocal1_id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2C5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE297B7E846 FOREIGN KEY (presidente_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE298D88FCB FOREIGN KEY (vocal1_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE28A6D2025 FOREIGN KEY (vocal2_id) REFERENCES docente (id)');
    }
}
