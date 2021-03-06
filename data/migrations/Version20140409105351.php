<?php

namespace Application;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 * migrations test
 */
class Version20140409105351 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

        $this->addSql("ALTER TABLE users ADD test VARCHAR(255) DEFAULT NULL");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_1483A5E9D87F7E0C ON users (test)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

        $this->addSql("DROP INDEX UNIQ_1483A5E9D87F7E0C ON users");
        $this->addSql("ALTER TABLE users DROP test");
    }
}
