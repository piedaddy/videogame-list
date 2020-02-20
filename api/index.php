<?php
  require_once 'DB.php';
  require_once 'DB_functions.php';

  connect('localhost', 'games', 'root', 'rootroot');

  /*

  $games = select(" 
  SELECT * 
  FROM `games`
  ORDER BY `name`
  "); 

  */ 


  // OR 
  /*
      $query = "
      SELECT * 
      FROM `games`
      ORDER BY `names` ASC
      ";

    */ 


  $order_by_column = 'name';
  $order_by_way    = 'ASC';

  if (isset($_GET['orderby'])) {
    $order_by_column = $_GET['orderby'];
  }

  if (isset($_GET['way'])) {
    $order_by_way = $_GET['way'];
  }

  $query = "
  SELECT *
  FROM `games`
  ORDER BY `{$order_by_column}` {$order_by_way}
  ";


  $games = DB::select($query, []); // if i did it the first way i would not need this, i could just skip to where i encode json


  header('Content-type: application/json'); //now i have told the browser to read it as json
  header('Access-Control-Allow-Origin: *'); 
  echo (json_encode($games));

  /*
  SELECT * 
  FROM `games`
  ORDER BY `name` ASC


  SELECT * 
  FROM `games`
  ORDER BY `name` DESC


  SELECT * 
  FROM `games`
  ORDER BY `rating` ASC


  SELECT * 
  FROM `games`
  ORDER BY `rating` DESC

  */ 