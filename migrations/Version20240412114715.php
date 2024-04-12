<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240412114715 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE kanban_file (id INT AUTO_INCREMENT NOT NULL, kanban_file_name VARCHAR(58) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kanban_file_history (id INT AUTO_INCREMENT NOT NULL, entity_id INT NOT NULL, created_at DATETIME NOT NULL, event VARCHAR(66) NOT NULL, INDEX IDX_ABA184B81257D5D (entity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kanban_label_history (id INT AUTO_INCREMENT NOT NULL, entity_id INT NOT NULL, event VARCHAR(66) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_2A46569781257D5D (entity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label (id INT AUTO_INCREMENT NOT NULL, label_name VARCHAR(32) DEFAULT NULL, created_at DATETIME NOT NULL, label_color VARCHAR(32) NOT NULL, update_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kanban_file_history ADD CONSTRAINT FK_ABA184B81257D5D FOREIGN KEY (entity_id) REFERENCES kanban_file (id)');
        $this->addSql('ALTER TABLE kanban_label_history ADD CONSTRAINT FK_2A46569781257D5D FOREIGN KEY (entity_id) REFERENCES label (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kanban_file_history DROP FOREIGN KEY FK_ABA184B81257D5D');
        $this->addSql('ALTER TABLE kanban_label_history DROP FOREIGN KEY FK_2A46569781257D5D');
        $this->addSql('DROP TABLE kanban_file');
        $this->addSql('DROP TABLE kanban_file_history');
        $this->addSql('DROP TABLE kanban_label_history');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
