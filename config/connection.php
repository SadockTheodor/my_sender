<?php

class Database{

private $host = "localhost";
private $user = "root";
private $password = "";
// nom base de donnees
private $dbname = "Sender";
private $db;

public function __construct($host = null, $user = null, $password =
null, $dbname = null){
if($host != null)
{
$this -> $host = $host;
$this -> $user = $user;
$this -> $password = $password;
$this -> $dbname = $dbname;
}

try{
$pdo = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
$this->db = new
PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user,
$this->password, $pdo);
}
catch(PDOException $e){$e -> getMessage();}

}

/** insert,update,delete function */

function query($statement, $data)
{

$query = $this->db->prepare($statement); $query -> execute($data);
$query -> closeCursor();
}

/** select function */

function select($statement, $data)
{
$query = $this->db->prepare($statement); $query -> execute($data);
return $query;
}

}