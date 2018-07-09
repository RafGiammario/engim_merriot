<?php
$utente = [];
$messaggi = [];


function get_stagioni(){
// connessione al DB
$dbh= connect();

// estrazione dei dati
// $stmt= $dbh->query("INSERT INTO nome_tabella VALUES messaggio, utente_corrente, timestamp("Y-m-d H:i:s") where utente = utente_corrente  order by ordering ASC");
$result = $stmt->fetchAll();
return $result;
}

?>
