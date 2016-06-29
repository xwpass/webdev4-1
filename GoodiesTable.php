<?php

namespace Application\Database;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

class GoodiesTable{

  private $adapter;
  private $sql;

  public function __construct($username, $password, $database)
  {
    $this->adapter = new Adapter(array(

      "driver"    => "Pdo_MySql",
      "hostname"  => "127.0.0.1",
      "username"  => $username,
      "password"  => $password,
      "database"  => $database;

    ));

    $this->sql = new Sql($this->adapter);

  }

  public function getAllGoodies()
  {
    //select * from goodies;
    $select = $this->sql->select()->from("goodies");

    $query = $this->sql->buildSqlString($select);

    $this->adapter->query($query)->execute();
  }

}//GoodiesTable

 ?>
