<?php
// open connection to mysql server
$link = mysqli_connect( 'localhost', 'root', 'root', 'lms');
if(!$link){
  die('cannot connect to server');
}