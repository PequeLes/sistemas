<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
    <?php
    include('./navbar.php');  
    ?>
        <div class="main p-5">
            <div id= "inicio" class="text-center content-div">
                <h1>
                    Informática
                </h1>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Column 1</th>
                        <th scope="col">Column 2</th>
                        <th scope="col">Column 3</th>
                        <th scope="col">Column 4</th>
                        <th scope="col">Column 5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Row 1, Cell 1</td>
                        <td>Row 1, Cell 2</td>
                        <td>Row 1, Cell 3</td>
                        <td>Row 1, Cell 4</td>
                        <td>Row 1, Cell 5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Row 2, Cell 1</td>
                        <td>Row 2, Cell 2</td>
                        <td>Row 2, Cell 3</td>
                        <td>Row 2, Cell 4</td>
                        <td>Row 2, Cell 5</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Row 3, Cell 1</td>
                        <td>Row 3, Cell 2</td>
                        <td>Row 3, Cell 3</td>
                        <td>Row 3, Cell 4</td>
                        <td>Row 3, Cell 5</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Row 4, Cell 1</td>
                        <td>Row 4, Cell 2</td>
                        <td>Row 4, Cell 3</td>
                        <td>Row 4, Cell 4</td>
                        <td>Row 4, Cell 5</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Row 5, Cell 1</td>
                        <td>Row 5, Cell 2</td>
                        <td>Row 5, Cell 3</td>
                        <td>Row 5, Cell 4</td>
                        <td>Row 5, Cell 5</td>
                    </tr>
                </tbody>
           
            
            </table>
        </div>
        
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <script>
        function cambiarEstado(id) {
  // Hacer una solicitud AJAX para cambiar el estado del usuario en el servidor
  fetch('../../autenticacion/cambiar_estado_res.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          // Si la solicitud tuvo éxito, recargar la página o actualizar la tabla
          location.reload();
      } else {
          // Manejar el error
          alert('No se pudo cambiar el estado del usuario.');
      }
  })
  .catch(error => console.error('Error:', error));
}

    </script>
</body>