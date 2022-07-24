<?php

interface IDataBaseConnector {
  public function connect();
  public function deconnect();
}

class DataBaseConnector implements IDataBaseConnector {
  protected $host;
  protected $username;
  protected $password;
  protected $databaseName;
  public $connection;

  function __construct($db_host, $db_username, $db_password, $db_databaseName){
    $this->host = $db_host;
    $this->username = $db_username;
    $this->password = $db_password;
    $this->databaseName = $db_databaseName;
    $this->connection = null;
    $this->connected = false;
  }

  function __destruct(){
    $this->connected = false;
    $this->connection = null;
  }

  public function connect() {
    try {
      if ($this->connected) return $this->connection;
      $this->connected = true;
      $this->connection = new PDO("mysql:host=$this->host;dbname=$this->databaseName", $this->username, $this->password);
      return $this->connection;
    } catch(PDOException $exception){
      echo($exception->getMessage());
            $this->connected = false;
      return false;
    }
  }

  public function deconnect() {
    if (!$this->connected) return;
    $this->connected = false;
    $this->connection = null;
  }
}
