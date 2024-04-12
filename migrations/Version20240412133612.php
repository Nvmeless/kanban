<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240412133612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE history_task_asset (id INT AUTO_INCREMENT NOT NULL, event VARCHAR(500) NOT NULL, entity_id INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kanban_file (id INT AUTO_INCREMENT NOT NULL, kanban_file_name VARCHAR(58) NOT NULL, created_at DATETIME NOT NULL, status VARCHAR(24) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kanban_file_history (id INT AUTO_INCREMENT NOT NULL, entity_id INT NOT NULL, created_at DATETIME NOT NULL, event VARCHAR(66) NOT NULL, status VARCHAR(24) NOT NULL, INDEX IDX_ABA184B81257D5D (entity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label (id INT AUTO_INCREMENT NOT NULL, label_name VARCHAR(32) DEFAULT NULL, created_at DATETIME NOT NULL, label_color VARCHAR(32) NOT NULL, update_at DATETIME DEFAULT NULL, status VARCHAR(24) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_history (id INT AUTO_INCREMENT NOT NULL, entity_id INT NOT NULL, event VARCHAR(66) NOT NULL, created_at DATETIME NOT NULL, status VARCHAR(24) NOT NULL, INDEX IDX_9B3BD96281257D5D (entity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE task_asset (id INT AUTO_INCREMENT NOT NULL, task_asset_type_id INT DEFAULT NULL, content VARCHAR(1500) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, status VARCHAR(255) DEFAULT NULL, INDEX IDX_C50B417CE3B50094 (task_asset_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE task_asset_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, status VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kanban_file_history ADD CONSTRAINT FK_ABA184B81257D5D FOREIGN KEY (entity_id) REFERENCES kanban_file (id)');
        $this->addSql('ALTER TABLE label_history ADD CONSTRAINT FK_9B3BD96281257D5D FOREIGN KEY (entity_id) REFERENCES label (id)');
        $this->addSql('ALTER TABLE task_asset ADD CONSTRAINT FK_C50B417CE3B50094 FOREIGN KEY (task_asset_type_id) REFERENCES task_asset_type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kanban_file_history DROP FOREIGN KEY FK_ABA184B81257D5D');
        $this->addSql('ALTER TABLE label_history DROP FOREIGN KEY FK_9B3BD96281257D5D');
        $this->addSql('ALTER TABLE task_asset DROP FOREIGN KEY FK_C50B417CE3B50094');
        $this->addSql('DROP TABLE history_task_asset');
        $this->addSql('DROP TABLE kanban_file');
        $this->addSql('DROP TABLE kanban_file_history');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE label_history');
        $this->addSql('DROP TABLE task_asset');
        $this->addSql('DROP TABLE task_asset_type');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
