<?php 
  // html escape
  function h($v){
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
  }

  // timezone
  date_default_timezone_set('Asia/Tokyo');
  $date = date('m月d日H時i分');
?>