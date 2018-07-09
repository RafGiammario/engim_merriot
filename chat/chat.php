<?php
include "connessione/connessionedb.php";
include "salvataggio_chat.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Twitter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


  <div class="container-fluid">
    <div class="row" style="margin-top: 50px;">

    <div id="errore"></div>

    <div class="col-md-4 mx-auto pl-4 pr-3" >

      <div class="card bg-light mb-3">
        <div class="card-header azzurro">Invia Messaggio</div>
        <div class="card-body">
          <form>
          <div class="form-group">
              <textarea class="form-control" maxlength="140" id="textarea" placeholder="Scrivi qualcosa, hai 140 caratteri..." rows="3"></textarea>
              </div>
              <button id="button" type="button" class="btn btn-sm btn-primary float-right">Invia Messaggio</button>
              </form>
              <span id="chars" class="">140</span>
        </div>
      </div>

        </div>

        <div class="col-md-6 mx-auto pl-4 pr-5 mr-3 mt-3">
        <h6 class="azzurro mb-2">Messaggi Bacheca Stanza</h6>
          <div class="mt-3" id="tweet" style="height: 80vh;">
        </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="js/chat.js"></script>
  </body>
</html>
