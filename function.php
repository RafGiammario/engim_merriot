<?php

$user= "user";
$pass="pass";
$dbName="dbname";
$dbServer="localhost";

$tbUsers ="User";
$tbRooms ="Room";


  global $db;

/*****************************************/
/*             INSERIMENTO               */
/*****************************************/
function insert_users($name,$role,$id_room){
  try {
    $bres= false;
    $dbh = open_connect();

    global $tbUsers;

    $prepared = $dbh->prepare('INSERT INTO `'.$tbUsers.'` (Name,Role,id_Room) VALUES (:paramName, :paramRole, :paramRoom) ');

    if ($status =="1") $status =1;
    else $status=0;

    $prepared->bindParam(':paramName', $name);
    $prepared->bindParam(':paramRole', $role);
    $prepared->bindParam(':paramRoom', $id_room);
    $prepared->execute();

  } catch (PDOException $e)  {
    print "Error!:".$e->getMessage()."<br/>";
    die();
  }
  return $bres;
}


/*****************************************/
/*             LETTURA               */
/*****************************************/
function get_dati($tb){
  try {
    $dbh = open_connect();

    $prepared = $dbh->prepare('SELECT * FROM '.$tb);

    $prepared->execute();
    $dati =  $prepared->fetchAll();

  } catch (PDOException $e)  {
    print "Error!:".$e->getMessage()."<br/>";
    die();
  }
  return $dati;
}



/*****************************************/
/*            CONNESSIONI
/*****************************************/
function open_connect(){
  global $user;
  global $pass;
  global $dbName;
  global $dbServer;

  try {
    if (!isset($db))  {
      $db = new PDO('mysql:host='.$dbServer.';dbname='.$dbName.';charset=utf8mb4', $user, $pass);
    }

    } catch (PDOException $e)  {
      print "Error!:".$e->getMessage()."<br/>";
      die();
    }

    return $db;
  }



 ?>
