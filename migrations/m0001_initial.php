<?php
/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

  class m0001_initial
  {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $sql = "
            CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email varchar(255) NOT NULL,
            firstname varchar(255) NOT NULL,
            lastname varchar(255) NOT NULL,
            status TINYINT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;
        ";
        $db->pdo->exec($sql);
    }

    public function down()
    {
      $db = \app\core\Application::$app->db;
      $sql = "
          DROP TABLE users;
      ";
      $db->pdo->exec($sql);
    }
  }