<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240504175827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE examen_alumno (id INT AUTO_INCREMENT NOT NULL, examen_final_id_id INT NOT NULL, alumno_id_id INT NOT NULL, nota INT DEFAULT NULL, INDEX IDX_2852854F68C84212 (examen_final_id_id), INDEX IDX_2852854FD3819735 (alumno_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE examen_final (id INT AUTO_INCREMENT NOT NULL, asignatura_id_id INT NOT NULL, presidente_id_id INT DEFAULT NULL, vocal1_id_id INT DEFAULT NULL, vocal2_id_id INT DEFAULT NULL, fecha DATE DEFAULT NULL, INDEX IDX_8861EFE2AF1D1CBB (asignatura_id_id), INDEX IDX_8861EFE2D1F46B1E (presidente_id_id), INDEX IDX_8861EFE2CFA8626B (vocal1_id_id), INDEX IDX_8861EFE2FE4078F6 (vocal2_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854F68C84212 FOREIGN KEY (examen_final_id_id) REFERENCES examen_final (id)');
        $this->addSql('ALTER TABLE examen_alumno ADD CONSTRAINT FK_2852854FD3819735 FOREIGN KEY (alumno_id_id) REFERENCES alumno (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2AF1D1CBB FOREIGN KEY (asignatura_id_id) REFERENCES asignatura (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2D1F46B1E FOREIGN KEY (presidente_id_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2CFA8626B FOREIGN KEY (vocal1_id_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_8861EFE2FE4078F6 FOREIGN KEY (vocal2_id_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE alumno CHANGE titulo_sec titulo_sec VARCHAR(100) DEFAULT NULL, CHANGE escuela_sec escuela_sec VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE cursada_docente CHANGE sece sece DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE instituto CHANGE url_instituto url_instituto VARCHAR(100) DEFAULT NULL, CHANGE instituto instituto VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE localidad CHANGE codigo_postal codigo_postal VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE persona CHANGE telefono telefono VARCHAR(25) DEFAULT NULL, CHANGE numero numero VARCHAR(10) DEFAULT NULL, CHANGE departamento departamento VARCHAR(2) DEFAULT NULL, CHANGE pasillo pasillo VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854F68C84212');
        $this->addSql('ALTER TABLE examen_alumno DROP FOREIGN KEY FK_2852854FD3819735');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2AF1D1CBB');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2D1F46B1E');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2CFA8626B');
        $this->addSql('ALTER TABLE examen_final DROP FOREIGN KEY FK_8861EFE2FE4078F6');
        $this->addSql('DROP TABLE examen_alumno');
        $this->addSql('DROP TABLE examen_final');
        $this->addSql('ALTER TABLE alumno CHANGE titulo_sec titulo_sec VARCHAR(100) DEFAULT \'NULL\', CHANGE escuela_sec escuela_sec VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE cursada_docente CHANGE sece sece DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE instituto CHANGE url_instituto url_instituto VARCHAR(100) DEFAULT \'NULL\', CHANGE instituto instituto VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE localidad CHANGE codigo_postal codigo_postal VARCHAR(10) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE persona CHANGE telefono telefono VARCHAR(25) DEFAULT \'NULL\', CHANGE numero numero VARCHAR(10) DEFAULT \'NULL\', CHANGE departamento departamento VARCHAR(2) DEFAULT \'NULL\', CHANGE pasillo pasillo VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
