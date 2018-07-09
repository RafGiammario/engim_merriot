<?php

//  -----------> connessione al DB
function connect(){
	static $db;
	if (! isset($db))  {
		try{
			$db = new PDO('mysql:host=localhost;dbname=Merriot;charset=utf8mb4', 'root', 'engim');
		} catch(PDOException $e){
	            print "Error!: " . $e->getMessage() . "<br/>";
	            die();
		}
	}
	return $db;
}



//  -----------> ottengo la stanza
function get_room($id){
  // connessione al DB
  $dbh= connect();

  // estrazione dei dati
  $stmt=  $dbh->prepare("SELECT * FROM Room where IdRoom = :id");
  $stmt->bindParam(':id',$id);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}

//  -----------> ottengo il nome della stanza
function get_room_name($id){
  // connessione al DB
  $dbh= connect();

  // estrazione dei dati
  $stmt=  $dbh->prepare("SELECT Name FROM Room where IdRoom = :id");
  $stmt->bindParam(':id',$id);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}

//  -----------> ottengo la stanza collegata
function get_room_linked($id){
  // connessione al DB
  $dbh= connect();

  // estrazione dei dati
  $stmt=  $dbh->prepare("SELECT Id_linked_room FROM Linked_rooms where Id_room = :id");
  $stmt->bindParam(':id',$id);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}
