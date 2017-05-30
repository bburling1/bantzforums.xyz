<?php
  //start session management
  session_start();
  //connect to the database
  require('../model/database.php');
  require('../model/functions_users.php');

  //manually retrieve unique api key
  $api = "RGAPI-12409ba4-3bb9-44d8-abd3-46263eecc0f1";
  //retrieve post data
  $lolusername = $_POST['lolusername'];
  $region = $_POST['region'];
  $user_id = $_POST['user_id'];

  //retrieve League of Legends ID
  $json = @file_get_contents("https://$region.api.riotgames.com/lol/summoner/v3/summoners/by-name/$lolusername?api_key=$api");
  if($json === FALSE){
    $_SESSION['error'] = "Unable to find username";
    header('location:../view/profile.php');
  } else {
    $data = json_decode($json, TRUE);
    $riotid = $data['id'];
    if(isset($riotid)){
      $result = save_riot_id($riotid, $user_id);
      echo $riotid;
      echo $user_id;
    }
  }



?>
