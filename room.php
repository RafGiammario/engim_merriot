<?php
require "room-function.php";
$room = get_room(2);
// echo "<pre>";
// var_dump($room);
$linked_rooms = get_room_linked(1);
// echo "<pre>";
// var_dump($linked_rooms);

?>

<!DOCTYPE HTML>
<html lang="it">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?= $room[0]["Name"] ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <img src="images/rooms/<?= $room[0]["IdRoom"] ?>.jpg" />
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 offset-md-1">
        <p>
        <?= $room[0]["Description"] ?>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">

        <h6>lista stanze collegate</h6>
        <?php
        foreach($linked_rooms as $linked){
          $getName= get_room_name($linked[0]);
          echo $getName[0][0]."<br />";
        }
        ?>
      </div>

      <div class="col-md-4">
        lista 2
      </div>

      <div class="col-md-4">
        lista 3
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 offset-md-1">
        messaggi
      </div>
    </div>

  </div>
    <script  src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
