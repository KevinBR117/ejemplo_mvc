<?php
class Conexion
{
    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost:33066', 'root', '', 'peliculas');
    }

    public function getPeliculas()
    {
        $query = $this->con->query('SELECT * FROM peliculas');
        // echo($query);
        if (mysqli_num_rows($query) > 0) {
            $datos = array();
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($datos, $row);
            }
            // var_dump(json_encode($datos));
            return $datos;
        }
    }
}
