<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190709073444 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE astronaut (id INT AUTO_INCREMENT NOT NULL, sex_id INT NOT NULL, nationality_id INT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, birthdate DATE NOT NULL, INDEX IDX_5DADB6E55A2DB2A0 (sex_id), INDEX IDX_5DADB6E51C9DA55 (nationality_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE astronaut_mission (astronaut_id INT NOT NULL, mission_id INT NOT NULL, INDEX IDX_9BB4B94D390014D (astronaut_id), INDEX IDX_9BB4B94BE6CAE90 (mission_id), PRIMARY KEY(astronaut_id, mission_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE launcher (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, constructor VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, launcher_id INT NOT NULL, spacial_center_id INT NOT NULL, operator_id INT NOT NULL, usefull_charge VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, launch_time DATETIME NOT NULL, INDEX IDX_9067F23C2724B909 (launcher_id), INDEX IDX_9067F23CBDA52D98 (spacial_center_id), INDEX IDX_9067F23C584598A3 (operator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nationality (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE operator (id INT AUTO_INCREMENT NOT NULL, nationality_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_D7A6A7811C9DA55 (nationality_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sex (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spacial_center (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, locallization VARCHAR(255) NOT NULL, latitude NUMERIC(9, 6) NOT NULL, longitude NUMERIC(9, 6) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE astronaut ADD CONSTRAINT FK_5DADB6E55A2DB2A0 FOREIGN KEY (sex_id) REFERENCES sex (id)');
        $this->addSql('ALTER TABLE astronaut ADD CONSTRAINT FK_5DADB6E51C9DA55 FOREIGN KEY (nationality_id) REFERENCES nationality (id)');
        $this->addSql('ALTER TABLE astronaut_mission ADD CONSTRAINT FK_9BB4B94D390014D FOREIGN KEY (astronaut_id) REFERENCES astronaut (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE astronaut_mission ADD CONSTRAINT FK_9BB4B94BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C2724B909 FOREIGN KEY (launcher_id) REFERENCES launcher (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CBDA52D98 FOREIGN KEY (spacial_center_id) REFERENCES spacial_center (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C584598A3 FOREIGN KEY (operator_id) REFERENCES operator (id)');
        $this->addSql('ALTER TABLE operator ADD CONSTRAINT FK_D7A6A7811C9DA55 FOREIGN KEY (nationality_id) REFERENCES nationality (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE astronaut_mission DROP FOREIGN KEY FK_9BB4B94D390014D');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C2724B909');
        $this->addSql('ALTER TABLE astronaut_mission DROP FOREIGN KEY FK_9BB4B94BE6CAE90');
        $this->addSql('ALTER TABLE astronaut DROP FOREIGN KEY FK_5DADB6E51C9DA55');
        $this->addSql('ALTER TABLE operator DROP FOREIGN KEY FK_D7A6A7811C9DA55');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C584598A3');
        $this->addSql('ALTER TABLE astronaut DROP FOREIGN KEY FK_5DADB6E55A2DB2A0');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CBDA52D98');
        $this->addSql('DROP TABLE astronaut');
        $this->addSql('DROP TABLE astronaut_mission');
        $this->addSql('DROP TABLE launcher');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE nationality');
        $this->addSql('DROP TABLE operator');
        $this->addSql('DROP TABLE sex');
        $this->addSql('DROP TABLE spacial_center');
    }
}
