<?php
  // Create connection
  $con=mysql_connect("127.0.0.1","root","", true, 65536)
    or die("Unable to connect to mysql");

  mysql_query("
    drop database ppa;
    create database ppa;
    use ppa;
    source ~/dev/ppa/ppa.sql;
  ");

  mysql_close($con);
?>
