<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210605233124 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, cours_id_id INT DEFAULT NULL, type VARCHAR(25) NOT NULL, libelle VARCHAR(25) NOT NULL, tarif DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_351268BB4F221781 (cours_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE abonnement_user (abonnement_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_F4A0F513F1D74413 (abonnement_id), INDEX IDX_F4A0F513A76ED395 (user_id), PRIMARY KEY(abonnement_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coach (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(25) NOT NULL, email_c VARCHAR(50) NOT NULL, bio VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, id_coach_id INT DEFAULT NULL, titre VARCHAR(25) NOT NULL, heure TIME NOT NULL, periode INT NOT NULL, INDEX IDX_FDCA8C9C6CCBBA04 (id_coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB4F221781 FOREIGN KEY (cours_id_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE abonnement_user ADD CONSTRAINT FK_F4A0F513F1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE abonnement_user ADD CONSTRAINT FK_F4A0F513A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C6CCBBA04 FOREIGN KEY (id_coach_id) REFERENCES coach (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement_user DROP FOREIGN KEY FK_F4A0F513F1D74413');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C6CCBBA04');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB4F221781');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE abonnement_user');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE cours');
    }
}
