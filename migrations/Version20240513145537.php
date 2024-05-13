<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240513145537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_forum_commentaire');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY fk_forum');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE message');
        $this->addSql('ALTER TABLE unite CHANGE dateDepot dateDepot DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE unite ADD CONSTRAINT FK_1D64C1182C3F8A4D FOREIGN KEY (id_cour) REFERENCES cour (id_cour)');
        $this->addSql('DROP INDEX id_cour ON unite');
        $this->addSql('CREATE INDEX IDX_1D64C1182C3F8A4D ON unite (id_cour)');
        $this->addSql('ALTER TABLE user DROP qr_code, DROP numTel, DROP dateNai, DROP image, CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE username username VARCHAR(255) NOT NULL, CHANGE role role VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_forum INT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_forum_commentaire (id_forum), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message (id_message INT AUTO_INCREMENT NOT NULL, id_forum INT NOT NULL, contenu_message VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_message DATETIME NOT NULL, INDEX fk_forum (id_forum), PRIMARY KEY(id_message)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_forum_commentaire FOREIGN KEY (id_forum) REFERENCES forum (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT fk_forum FOREIGN KEY (id_forum) REFERENCES forum (id)');
        $this->addSql('ALTER TABLE unite DROP FOREIGN KEY FK_1D64C1182C3F8A4D');
        $this->addSql('ALTER TABLE unite DROP FOREIGN KEY FK_1D64C1182C3F8A4D');
        $this->addSql('ALTER TABLE unite CHANGE dateDepot dateDepot DATE DEFAULT \'CURRENT_TIMESTAMP\'');
        $this->addSql('DROP INDEX idx_1d64c1182c3f8a4d ON unite');
        $this->addSql('CREATE INDEX id_cour ON unite (id_cour)');
        $this->addSql('ALTER TABLE unite ADD CONSTRAINT FK_1D64C1182C3F8A4D FOREIGN KEY (id_cour) REFERENCES cour (id_cour)');
        $this->addSql('ALTER TABLE user ADD qr_code VARCHAR(255) DEFAULT NULL, ADD numTel INT DEFAULT NULL, ADD dateNai DATE DEFAULT NULL, ADD image VARCHAR(255) DEFAULT \'user227466.jpg\', CHANGE roles roles JSON DEFAULT \'["ROLE_USER"]\' COMMENT \'(DC2Type:json)\', CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE role role VARCHAR(255) DEFAULT NULL');
    }
}
