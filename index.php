<?php
  
  $dataJSONString = file_get_contents( 'http://api.cfl.ca/v1/games/2015?key=T8Mv9BRDdcB7bMQUsQvHqtCGPewH5y8p' );
  
  $dataObject = json_decode( $dataJSONString );
 
  $data = $dataObject->data[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP Test</title>
</head>
<body>
  <h1>External API PHP Test</h1>
  
  <h2>CFL API Documentation</h2>
  <dl>
    <dt>Weather</dt>
    <dd>
      <?php echo $data->weather->temperature; ?>
      <?php echo $data->weather->sky; ?>
      <?php echo $data->weather->field_conditions; ?>
    </dd>
    
    <dt>Game id</dt>
    <dd><?php echo $data->game_id; ?></dd>
    <dt>Coin_toss</dt>
    <dd><?php echo $data->coin_toss->coin_toss_winner_election; ?></dd>
    <dt>Tickets_url</dt>
    <dd><?php echo $data->tickets_url; ?></dd>
    <dt>Venue</dt>
    <dd><?php echo $data->venue->name; ?></dd>
   
  </dl>
</body>
</html>