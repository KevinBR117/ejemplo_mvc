<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de peliculas</title>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https:///cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <table id="datatable">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Director</td>
                <td>Genero</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculas as $pelicula) { ?>
                <tr>
                    <td> <?php echo $pelicula['nombre_pelicula'] ?> </td>
                    <td> <?php echo $pelicula['director'] ?> </td>
                    <td> <?php echo $pelicula['genero'] ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

</html>