<?php
/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

  class m0002_add_password_column
  {
    public function up()
    {
        $db = \eork\phpmvc\Application::$app->db;
        $db->pdo->exec("
          ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL
        ");
    }

    public function down()
    {
      $db = \eork\phpmvc\Application::$app->db;
      $db->pdo->exec("
        ALTER TABLE users DROP COLUMN password 
      ");
    }
  }