<?php

interface IModelManager {
  public function query($sql, $sqlParams);

  public function mutation($sql, $sqlParams);
}


class ModelManager implements IModelManager {
  protected $db;
  protected $connection;
  

  function __construct($database){
      $this->db = $database;    
      $this->connection = $this->db->connect();
  }

  function __destruct(){
    $this->db->deconnect();
    $this->db = null;
    $this->connection = null;
  }

  public function query($sql, $sqlParams = []){
    $statement = $this->connection->prepare($sql);
    $statement->execute($sqlParams);
    $data = $statement->fetchAll();
    
    return $data;
  }

  public function mutation($sql, $sqlParams = []){
    $statement = $this->connection->prepare($sql);
    $statement->execute($sqlParams);
    $isSuccess = $statement->rowCount() > 0;

    return $isSuccess;
  }
}