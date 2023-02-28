<?php
require('./Model/conexion.php');

$con = new Conexion();

$peliculas = $con->getPeliculas();

require('./Views/v_verPeliculas.php');
