<?php 
include("assets/datos.php"); // $A_huertas
  
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HuertaDigitalCEI</title>
  <!-- Incluir Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<style>
    .image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px; /* Adjust height as needed */
}

.centered-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}


.image-container-cover {
  height: 200px; /* Adjust height as needed */
  overflow: hidden;
}

.cover-image {
  width: 100%;
  height: auto;
  object-fit: cover;
}


html {
            scroll-behavior: smooth;
        }
</style>
  <!-- Header con botón de inicio de sesión y enlaces a las secciones -->
  <header class="bg-green-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold text-white">HuertaDigitalCEI</h1>
      <nav class="space-x-4">
        <a href="#huertas-universitarias" class="text-white hover:text-blue-700">Huertas Universitarias</a>
        <a href="#simulaciones" class="text-white hover:text-blue-700">Simulaciones</a>
        <a href="#juego" class="text-white hover:text-blue-700">Juego</a>
      </nav>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar Sesión</button>
    </div>
  </header>

  <!-- Sección de Huertas Universitarias reales -->
  <section id="huertas-universitarias" class="py-8">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold mb-4">Huertas Universitarias Reales</h2>
      <div class="flex justify-center items-center space-x-4">
        <div class="w-1/4">
          <label for="universidades" class="font-bold">Seleccionar Universidad:</label>
          <select id="universidades" class="block w-full mt-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
            <option value="todas">Todas</option>
            <option value="1">Universidad de Madrid</option>
            <option value="2">Universidad de Valencia</option>
            <option value="3">Instituto CEI</option>
          </select>
        </div>
      </div>

      <div class="mt-8">
        <h3 class="text-xl font-bold mb-4">Huertas de la Universidad Seleccionada</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <?php
            foreach ($A_huertas as $huerta) {
                if ($huerta['tipo'] === 'real') {
                // Convert the string values to an array
                $temperatura = explode('|', $huerta['temperatura']);
                $humedad = explode('|', $huerta['humedad']);
                $ph = explode('|', $huerta['ph']);
                
                // Generar valores aleatorios dentro del rango para temperatura, humedad y pH
                $temperatura = mt_rand($temperatura[0], $temperatura[1]);
                $humedad = mt_rand($humedad[0], $humedad[1]);
                $ph = mt_rand($ph[0] * 10, $ph[1] * 10) / 10;
            ?>
                <div class="bg-white rounded-lg shadow-md p-4 huertaCard" data-iduniversidad="<?=$huerta["id_universidad"]?>">
                    <a href="huerta.php?id=25">
                        <div class="image-container-cover">
                            <img src="<?=$huerta['url_img']?>" alt="Imagen de la huerta" class="mb-4 cover-image">
                        </div>
                    </a>
                    <h4 class="text-lg font-bold mb-2"><?=$huerta['nombre']?></h4>
                    <p class="text-gray-600">Clima: <?=$huerta['tipo_clima']?></p>
                    <div class="flex justify-between mt-4">
                        <div>
                        <p class="text-sm font-medium">Temp</p>
                        <p class="text-gray-600"><?=$temperatura?>°C</p>
                        </div>
                        <div>
                        <p class="text-sm font-medium">Hum</p>
                        <p class="text-gray-600"><?=$humedad?>%</p>
                        </div>
                        <div>
                        <p class="text-sm font-medium">pH</p>
                        <p class="text-gray-600"><?=$ph?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        ?>
        
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Simulaciones -->
  <section id="simulaciones" class="py-8 bg-green-800">
    <div class="container mx-auto">
      <h3 class="text-2xl font-bold mb-4 text-white">Simulaciones</h3>
      <!-- Aquí puedes agregar el contenido y la funcionalidad relacionada con las simulaciones -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <?php
            foreach ($A_huertas as $huerta) {
                if ($huerta['tipo'] === 'simulacion') {
                // Convert the string values to an array
                $temperatura = explode('|', $huerta['temperatura']);
                $humedad = explode('|', $huerta['humedad']);
                $ph = explode('|', $huerta['ph']);
                
                // Generar valores aleatorios dentro del rango para temperatura, humedad y pH
                $temperatura = mt_rand($temperatura[0], $temperatura[1]);
                $humedad = mt_rand($humedad[0], $humedad[1]);
                $ph = mt_rand($ph[0] * 10, $ph[1] * 10) / 10;
            ?>
                <div class="tarjeta bg-white rounded-lg shadow-md p-4">
                    <div class="image-container-cover">
                        <img src="<?=$huerta['url_img']?>" alt="Imagen de la huerta" class="mb-4 cover-image">
                    </div>
                    <h4 class="text-lg font-bold mb-2"><?=$huerta['nombre']?></h4>
                    <p class="text-gray-600">Clima: <?=$huerta['tipo_clima']?></p>
                    <div class="flex justify-between mt-4">
                        <div>
                        <p class="text-sm font-medium">Temp</p>
                        <p class="text-gray-600"><?=$temperatura?>°C</p>
                        </div>
                        <div>
                        <p class="text-sm font-medium">Hum</p>
                        <p class="text-gray-600"><?=$humedad?>%</p>
                        </div>
                        <div>
                        <p class="text-sm font-medium">pH</p>
                        <p class="text-gray-600"><?=$ph?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        ?>
        
        </div>

    </div>
  </section>

  <!-- Sección del Juego -->
  <section id="juego" class="py-8">
    <div class="container mx-auto">
      <h3 class="text-2xl font-bold mb-4">Juego</h3>
      <!-- Aquí puedes agregar el contenido y la funcionalidad relacionada con el juego -->

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <?php
            foreach ($A_huertas as $huerta) {
                if ($huerta['tipo'] === 'juego') {

                    // Convert the string values to an array
                    $temperatura = explode('|', $huerta['temperatura']);
                    $humedad = explode('|', $huerta['humedad']);
                    $ph = explode('|', $huerta['ph']);
                    
                    // Generar valores aleatorios dentro del rango para temperatura, humedad y pH
                    $temperatura = mt_rand($temperatura[0], $temperatura[1]);
                    $humedad = mt_rand($humedad[0], $humedad[1]);
                    $ph = mt_rand($ph[0] * 10, $ph[1] * 10) / 10;
                ?>
                    <div class="tarjeta bg-white rounded-lg shadow-md p-4">
                        <div class="image-container-cover">
                            <img src="<?=$huerta['url_img']?>" alt="Imagen de la huerta" class="mb-4 cover-image">
                        </div>
                        <h4 class="text-lg font-bold mb-2"><?=$huerta['nombre']?></h4>
                        <p class="text-gray-600">Clima: <?=$huerta['tipo_clima']?></p>
                        <div class="flex justify-between mt-4">
                            <div>
                            <p class="text-sm font-medium">Temperatura</p>
                            <p class="text-gray-600"><?=$temperatura?>°C</p>
                            </div>
                            <div>
                            <p class="text-sm font-medium">Humedad</p>
                            <p class="text-gray-600"><?=$humedad?>%</p>
                            </div>
                            <div>
                            <p class="text-sm font-medium">pH</p>
                            <p class="text-gray-600"><?=$ph?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
        ?>
        
        </div>
    </div>
  </section>

  <script>

    







    // Obtener el select y las tarjetas de huerta
    const selectUniversidades = document.getElementById('universidades');
    const tarjetasHuerta = document.querySelectorAll('.huertaCard');

    // Función para mostrar las tarjetas de la universidad seleccionada
    function mostrarTarjetasUniversidadSeleccionada() {
    const idUniversidadSeleccionada = selectUniversidades.value;

    // Recorrer todas las tarjetas de huerta y mostrar solo las correspondientes a la universidad seleccionada
    tarjetasHuerta.forEach((tarjeta) => {
        const idUniversidad = tarjeta.dataset.iduniversidad;
     
        tarjeta.style.display = 'none';
        if (idUniversidad === idUniversidadSeleccionada || idUniversidadSeleccionada === 'todas') {   
            tarjeta.style.display = 'block';
        }
    });
    }

    // Agregar un event listener para detectar cambios en el select
    selectUniversidades.addEventListener('change', mostrarTarjetasUniversidadSeleccionada);

  </script>
</body>
</html>
