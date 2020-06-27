<?php
  class db
  {
      protected $conexion;
      protected function conectar()
      {
          $mysqli = new mysqli("localhost", "root", "", "celulares");
       //   $this->conexion = mysqli_connect("localhost", "root", "");
       //   mysqli_select_db("celulares", $this->conexion)or die (mysql_error());
     
       }
      protected function desconectar()
      {
          mysql_close($this->conexion);
      }
  }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>