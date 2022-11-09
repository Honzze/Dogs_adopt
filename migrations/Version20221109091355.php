<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221109091355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adopted_dog (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, dog_id INT NOT NULL, INDEX IDX_CCF4C73CA76ED395 (user_id), UNIQUE INDEX UNIQ_CCF4C73C634DFEB (dog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adopted_dog ADD CONSTRAINT FK_CCF4C73CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE adopted_dog ADD CONSTRAINT FK_CCF4C73C634DFEB FOREIGN KEY (dog_id) REFERENCES dog (id)');
        $this->addSql('ALTER TABLE user DROP dog_adopted');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE adopted_dog');
        $this->addSql('ALTER TABLE `user` ADD dog_adopted VARCHAR(255) DEFAULT NULL');
    }
}
