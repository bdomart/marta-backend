<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191118142004 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('INSERT INTO region (`name`) VALUES ("Auvergne-Rhône-Alpes")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Bourgogne-Franche-Comté")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Bretagne")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Centre-Val de Loire")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Corse")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Grand Est")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Hauts-de-France")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Île-de-France")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Normandie")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Nouvelle-Aquitaine")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Occitanie")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Pays de la Loire")');
        $this->addSql('INSERT INTO region (`name`) VALUES ("Provence-Alpes-Côte d\'Azur")');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DELETE FROM region');
    }
}
