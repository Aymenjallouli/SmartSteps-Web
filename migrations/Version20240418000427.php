<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240418000427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_forum_commentaire');
        $this->addSql('ALTER TABLE commentaire CHANGE id_forum id_forum INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6BAEFFFD FOREIGN KEY (id_forum) REFERENCES forum (id)');
        $this->addSql('ALTER TABLE message CHANGE id_forum id_forum INT DEFAULT NULL');
        $this->addSql('ALTER TABLE unite CHANGE id_cour id_cour INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC6BAEFFFD');
        $this->addSql('ALTER TABLE commentaire CHANGE id_forum id_forum INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_forum_commentaire FOREIGN KEY (id_forum) REFERENCES forum (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message CHANGE id_forum id_forum INT NOT NULL');
        $this->addSql('ALTER TABLE unite CHANGE id_cour id_cour INT NOT NULL');
    }
}
