<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413223929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, room_type VARCHAR(255) NOT NULL, price_per_night DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD room_id INT DEFAULT NULL, ADD start_date DATE NOT NULL, ADD end_date DATE NOT NULL, ADD num_child INT NOT NULL, DROP num_kids, DROP num_nights');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE54177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E00CEDDE54177093 ON booking (room_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE54177093');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP INDEX UNIQ_E00CEDDE54177093 ON booking');
        $this->addSql('ALTER TABLE booking ADD num_nights INT NOT NULL, DROP room_id, DROP start_date, DROP end_date, CHANGE num_child num_kids INT NOT NULL');
    }
}
