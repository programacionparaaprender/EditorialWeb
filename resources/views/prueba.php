<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editorial Web Santillanez</title>
    <script src="js/vue.js"></script>
    <script>
        var librosjs = <?php echo json_encode($libros);?>
        function realizar()
        {
            new Vue({
                el: 'body',
                data:{
                    libros:librosjs,
                },
            });
        }
        window.onload = realizar;
    </script>
</head>
<body>
    <h1>Prueba</h1>
    <div id="textDiv">
        
    </div>
</body>
</html>
