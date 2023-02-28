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

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

</html>