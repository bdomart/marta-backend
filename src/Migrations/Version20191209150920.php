<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191209150920 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Ain", "01", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Aisne", "02", 7)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Allier", "03", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Alpes-de-Haute-Provence", "04", 13)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Hautes-Alpes", "05", 13)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Alpes-Maritimes", "06", 13)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Ardèche", "07", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Ardennes", "08", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Ariège", "09", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Aube", "10", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Aude", "11", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Aveyron", "12", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Bouches-du-Rhône", "13", 13)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Calvados", "14", 9)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Cantal", "15", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Charente", "16", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Charente-Maritime", "17", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Cher", "18", 4)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Corrèze", "19", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Corse-du-Sud", "2A", 5)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Corse", "2B", 5)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Côte-d\'Or", "21", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Côtes-d\'Armor", "22", 3)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Creuse", "23", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Dordogne", "24", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Doubs", "25", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Drôme", "26", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Eure", "27", 9)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Eure-et-Loir", "28", 4)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Finistère", "29", 3)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Gard", "30", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Garonne", "31", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Gers", "32", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Gironde", "33", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Hérault", "34", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Ille-et-Vilaine", "35", 3)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Indre", "36", 4)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Indre-et-Loire", "37", 4)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Isère", "38", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Jura", "39", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Landes", "40", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Loir-et-Cher", "41", 4)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Loire", "42", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Loire", "43", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Loire-Atlantique", "44", 12)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Loiret", "45", 4)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Lot", "46", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Lot-et-Garonne", "47", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Lozère", "48", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Maine-et-Loire", "49", 12)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Manche", "50", 9)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Marne", "51", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Marne", "52", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Mayenne", "53", 12)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Meurthe-et-Moselle", "54", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Meuse", "55", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Morbihan", "56", 3)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Moselle", "57", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Nièvre", "58", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Nord", "59", 7)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Oise", "60", 7)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Orne", "61", 9)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Pas-de-Calais", "62", 7)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Puy-de-Dôme", "63", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Pyrénées-Atlantiques", "64", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Hautes-Pyrénées", "65", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Pyrénées-Orientales", "66", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Bas-Rhin", "67", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haut-Rhin", "68", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Rhône", "69", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Saône", "70", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Saône-et-Loire", "71", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Sarthe", "72", 12)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Savoie", "73", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Savoie", "74", 1)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Paris", "75", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Seine-Maritime", "76", 9)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Seine-et-Marne", "77", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Yvelines", "78", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Deux-Sèvres", "79", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Somme", "80", 7)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Tarn", "81", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Tarn-et-Garonne", "82", 11)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Var", "83", 13)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Vaucluse", "84", 13)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Vendée", "85", 12)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Vienne", "86", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Haute-Vienne", "87", 10)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Vosges", "88", 6)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Yonne", "89", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Territoire de Belfort", "90", 2)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Essonne", "91", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Hauts-de-Seine", "92", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Seine-Saint-Denis", "93", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Val-de-Marne", "94", 8)');
        $this->addSql('INSERT INTO department (`name`, `code`, `region_id`) VALUES ("Val-d\'Oise", "95", 8)');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DELETE FROM department');
    }
}
