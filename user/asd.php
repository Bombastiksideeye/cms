<?php
session_start();
include './db.php';
                  
                  $bayot = $db->selectWithWhere('reservations', '*', 'user_id=4')[0];
                  extract($bayot);
                  echo $user_id;
                  ?>