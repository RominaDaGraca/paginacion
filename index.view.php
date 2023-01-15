<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <title> Pagina Web / Paginacion </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo): ?>
                    <li><?php echo $articulo['id'].'.-'.$articulo['articulo']; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="paginacion">
            <ul>
                <!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
                <?php if ($pagina == 1 ): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Ejecutamos un ciclo para mostrar las paginas -->
                <?php 
					for($i = 1; $i <= $numeroPaginas; $i++){
						if ($pagina === $i) {
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						} else {
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}
				 ?>

                <!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
                <?php if ($pagina == $numeroPaginas ): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&laquo;</a></li>
                <?php endif; ?>
               
            </ul>
        </section>
    </div>
</body>
</html>