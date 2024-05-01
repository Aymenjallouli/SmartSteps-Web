<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327225948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Supprimer la colonne id_cour de la table cour
        $this->addSql('ALTER TABLE cour DROP id_cour');
    }
    

    public function down(Schema $schema): void
    {
        // Rétablir la colonne id_cour de la table cour
        $this->addSql('ALTER TABLE cour ADD id_cour INT NOT NULL');
    
        // Vous devrez également recréer la contrainte de clé étrangère si nécessaire
        // $this->addSql('ALTER TABLE cour ADD CONSTRAINT FK_Cour_id_cour FOREIGN KEY (id_cour) REFERENCES autre_table (id)');
    }
    
}
