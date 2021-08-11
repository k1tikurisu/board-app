<?php
  // var def
  $FILE = 'data.json';
  $id = uniqid();
  $text = '';
 
  // one time post
  // [$id, $date, $text]
  $DATA = [];

  // [$DATA, $DATA, ...]
  $BOARD = [];

  if (file_exists($FILE)) {
    $BOARD = json_decode(file_get_contents($FILE));
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['txt'])) {
      $text = $_POST['txt'];
      // new data
      $DATA = [$id, $date, $text];
      $BOARD[] = $DATA;
      file_put_contents($FILE, json_encode($BOARD));
    } else if (isset($_POST['del'])) {
        // when the delete button is pressed
        $NEWBOARD = [];
        
        foreach($BOARD as $DATA){
          if($DATA[0] !== $_POST['del']){
            $NEWBOARD[] = $DATA;
          }
        }
      file_put_contents($FILE, json_encode($NEWBOARD));
    }
    
    // redirect
    header('Location: '.$_SERVER['SCRIPT_NAME']);
    exit;
  }
?>