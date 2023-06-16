<?php 
include("assets/datos.php"); // $A_huertas
  $id_huerta=$_GET["id"]??0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Huerta</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <style>
        .card{
            text-align:"center";
        }

        .img_sensors{
            max-height:120px;
        }
        
        html {
            scroll-behavior: smooth;
        }
    </style>

<header class="bg-green-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold text-white">HuertaDigitalCEI</h1>
      <a  href="index.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
    </div>
  </header>

    <section class="container mx-auto px-4 py-8">
        <div class="card">
        <h2 class="text-2xl font-bold mb-2">Huerta de Patio Num 6</h2>
        <img src="https://techraptor.net/sites/default/files/styles/image_header/public/2022-06/Pixelshire%20Farming%20RPG%20Main.jpg" alt="Huerta Image" class="w-full mb-4">
        <!-- <p class="text-gray-600">Tipo de clima: Fresco, con tierra de medio nutriente</p> -->

        
        <div class="flex justify-between">
            <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-2/4">
                <p class="text-sm font-medium">Tipo de Clima</p>
                <p class="text-2xl font-bold text-gray-600">Fresco, con tierra de medio nutriente</p>
                <p class="text-gray-600">Madrid, Maps:(<a class="underline text-blue-800" href="https://goo.gl/maps/dUjevyxFcJh86oyT6" target="_blank">40.5467023,-3.6992382,17z</a>)</p>
            </div>
            <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/4">
                <p class="text-sm font-medium">Simulaciones</p>
                <p class="text-2xl font-bold text-gray-600">25</p>
                <p class="text-gray-600"><a class="underline text-blue-800" href="simulacion.php">nueva </a></p>
            </div>
            <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/4">
                <p class="text-sm font-medium">Tipo de Huerta</p>
                <p class="text-gray-600 text-2xl font-bold">Real</p>
                <p class="text-gray-600">Ultima actualización: 10min</p>
            </div>
        </div>

    </section>


    <section class="container mx-auto px-4 py-8">
      <h2 class="text-2x1 font-bold mt-4">Próxima Cosecha (Mañana -> Tomates)</h2>

      <div class="flex justify-between">
        <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/4">
          <p class="text-sm font-medium text-center font-bold">Tomates</p>
          <img src="https://jardinarium.com/blog/wp-content/uploads/2023/05/istockphoto-1297093841-1024x1024-1.jpg" alt="tomate">
          <p class="text-2xl font-bold text-gray-600">x25</p>
          <p class="text-gray-600">Mañana</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/4">
          <p class="text-sm font-medium text-center font-bold">Lechuga</p>
          <img src="https://cdn.portalfruticola.com/2021/06/Cultivo-Lechuga-shutterstock_123628498-2-scaled.jpg" alt="tomate">
          <p class="text-2xl font-bold text-gray-600">x12</p>
          <p class="text-gray-600">en 32 días</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/4">
          <p class="text-sm font-medium text-center font-bold">Zanahorias</p>
          <img src="https://www.lahuertadeivan.com/wp-content/uploads/2016/12/sembrar-zanahorias.jpg" alt="tomate">
          <p class="text-2xl font-bold text-gray-600">x25</p>
          <p class="text-gray-600">en 32 días</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 m-2 w-1/4">
          <p class="text-sm font-medium text-center font-bold">Frutillas</p>
          <img src="https://www.elbroteurbano.com/wp-content/uploads/2015/11/fresa-frutilla-cultivo1-684x400.jpg" alt="tomate">
          <p class="text-2xl font-bold text-gray-600">x230</p>
          <p class="text-gray-600">en 6 días</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 m-2 w-1/4">
          <p class="text-sm font-medium text-center font-bold">Brocoli</p>
          <img src="https://trucosdejardineria.com/wp-content/uploads/2019/04/brocoli-en-macetas.png.webp" alt="tomate">
          <p class="text-2xl font-bold text-gray-600">x25</p>
          <p class="text-gray-600">en 2 días</p>
        </div>

      </div>
    </section>

    <section class="container mx-auto px-4 py-8">
      <h2 class="text-2x1 font-bold mt-4">Sensores</h2>

      <div class="flex justify-between">
        <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/3">
          <p class="text-sm font-medium">Temperatura</p>
          <p id="temp-actual" class="text-2xl font-bold text-gray-600" data-val="15" data-min="14" data-max="25">15 °C</p>
          <p class="text-gray-600">14°C - 25°C</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/3">
          <p class="text-sm font-medium">Humedad</p>
          <p id="hum-actual" class="text-2xl font-bold text-gray-600" data-val="68" data-min="40" data-max="70">68 %</p>
          <p class="text-gray-600">40% - 70%</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md m-2 p-4 w-1/3">
          <p class="text-sm font-medium">pH</p>
          <p id="ph-actual" class="text-2xl font-bold text-gray-600" data-val="5.1" data-min="6.5" data-max="7.5">5.1 ph</p>
          <p class="text-gray-600">6.5 - 7.5</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 m-2 w-1/3">
          <p class="text-sm font-medium">Nutrientes</p>
          <p id="nut-actual" class="text-2xl font-bold text-gray-600" data-val="32" data-min="30" data-max="70">32</p>
          <p class="text-gray-600">30 - 70</p>
        </div>

      </div>
    </section>

      
    <section id="mediciones" class="bg-green-600" >

        <div class="container mx-auto px-4 py-8">
            <h2 class="text-2x1 font-bold mt-4 text-white">Últimas mediciones (24hs)</h2>
            
            <div class="flex justify-between mt-4">
                
                <div class="card bg-white rounded-lg shadow-md p-4 w-3/4">
                    <canvas id="line-chart"></canvas>
                </div>
                
                <div class="card ms-2 p-4 w-1/4">
                    <div class="card bg-white rounded-lg shadow-md p-4 mb-2">
                        <p class="text-sm font-medium">Medición pH</p>
                        <img src="imgs/ph_sensor.png" alt="my image" class="img_sensors">
                        <p class="text-gray-600">electrodos de PH</p>
                    </div>
                    <div class="card bg-white rounded-lg shadow-md p-4 mb-2">
                        <p class="text-sm font-medium">Medición temperatura</p>
                        <img src="https://projar.es/wp-content/uploads/soil-test-tester-ce-temp-del-suelo-000-a-400-ms-cm-1.jpg" alt="my image" class="img_sensors">
                        <!-- <p class="text-gray-600">termometro 251</p> -->
                    </div>
                    <div class="card bg-white rounded-lg shadow-md p-4 mb-2">
                        <p class="text-sm font-medium">Medición Humedad</p>
                        <img src="https://m.media-amazon.com/images/I/511lqr0-DeL._AC_UF1000,1000_QL80_.jpg" alt="my image" class="img_sensors">
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="container mx-auto px-4 py-8">
      <div class="flex justify-between mt-4">

 
        <div class="card bg-white rounded-lg shadow-md p-4 m-2 w-1/3">
          <p class="text-sm font-medium">Fecha de creación</p>
          <p class="text-gray-600 text-center date" data-fecha="2021-02-10 08:15:23"></p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 m-2 w-1/3">
          <p class="text-sm font-medium">Usuario</p>
          <p class="text-gray-600">Roberto</p>
        </div>

      </div>

        
        <div class="flex justify-between mt-4">

        

            <div class="card bg-white rounded-lg shadow-md p-4 mt-4 m-2 w-1/2">
                <p class="text-sm font-medium">Universidad</p>
                <p class="text-gray-600">Universidad de Madrid</p>
            </div>
        </div>
    </section>  


  <!-- <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script> -->


  <script>

        // Gráfico de lineas
// // Obtener el contexto del canvas
// const ctx = document.getElementById('line-chart').getContext('2d');

// // Datos ficticios para el gráfico (inventa los valores)
// const labels = ['12:00 AM', '3:00 AM', '6:00 AM', '9:00 AM', '12:00 PM', '3:00 PM', '6:00 PM', '9:00 PM'];
// const humedadData = [45, 52, 55, 62, 58, 55, 50, 47];
// const phData = [6.8, 6.7, 6.5, 6.2, 6.4, 6.3, 6.5, 6.7];
// const temperaturaData = [24, 23, 22, 24, 26, 25, 24, 23];
// const nutrientesData = [60, 65, 62, 58, 61, 63, 59, 64];



// Chart.register(ChartTime);
// Chart.defaults.plugins.tooltip.callbacks.title = (tooltipItems) => {
//   return tooltipItems[0].parsed.x.format('MMM D, YYYY h:mm A');
// };

// // Crear el gráfico de línea
// new Chart(ctx, {
//   type: 'line',
//   data: {
//     labels: labels,
//     datasets: [
//       {
//         label: 'Humedad',
//         data: humedadData,
//         borderColor: 'blue',
//         fill: false
//       },
//       {
//         label: 'pH',
//         data: phData,
//         borderColor: 'orange',
//         fill: false
//       },
//       {
//         label: 'Temperatura',
//         data: temperaturaData,
//         borderColor: 'red',
//         fill: false
//       },
//       {
//         label: 'Nutrientes',
//         data: nutrientesData,
//         borderColor: 'green',
//         fill: false
//       }
//     ]
//   },
//   options: {
//     responsive: true,
//     scales: {
//       x: {
//         type: 'time',
//         time: {
//           displayFormats: {
//             hour: 'hA'
//           }
//         },
//         ticks: {
//           maxTicksLimit: 8
//         }
//       },
//       y: {
//         beginAtZero: true
//       }
//     }
//   }
// });

var ctx = document.getElementById('line-chart').getContext('2d');

var labels = ['12:00 AM', '3:00 AM', '6:00 AM', '9:00 AM', '12:00 PM', '3:00 PM', '6:00 PM', '9:00 PM'];
var humedadData = [45, 52, 55, 62, 58, 55, 50, 47];
var phData = [6.8, 6.7, 6.5, 6.2, 6.4, 6.3, 6.5, 6.7];
var temperaturaData = [24, 23, 22, 24, 26, 25, 24, 23];
var nutrientesData = [60, 65, 62, 58, 61, 63, 59, 64];


// const config = {
//   type: 'line',
//   data: data,
//   options: {
//     responsive: true,
//     plugins: {
//       legend: {
//         position: 'top',
//       },
//       title: {
//         display: true,
//         text: 'Chart.js Line Chart'
//       }
//     }
//   },
// };


new Chart(ctx, {
  type: 'line',
  data: {
    labels: labels,
    datasets: [{
      label: 'Humedad',
      data: humedadData,
      borderColor: 'blue',
      fill: false
    }, {
      label: 'pH',
      data: phData,
      borderColor: 'orange',
      fill: false
    }, {
      label: 'Temperatura',
      data: temperaturaData,
      borderColor: 'red',
      fill: false
    }, {
      label: 'Nutrientes',
      data: nutrientesData,
      borderColor: 'green',
      fill: false
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Sensores de Huerta Patio Num 6'
      }
    }
  }
});

























    // colores de textos según humedad:
    function asignarColorTexto(htmlElement) {
        const actual = htmlElement.getAttribute('data-val');
        const min = htmlElement.getAttribute('data-min');
        const max = htmlElement.getAttribute('data-max');

        var porcentaje = (actual - min) / (max - min) * 100;
        
        if (porcentaje < 25) {
            return 'green'; // Verde para valores cercanos al mínimo
        } else if (porcentaje >= 25 && porcentaje < 75) {
            return 'yellow'; // Amarillo para valores intermedios
        } else {
            return 'red'; // Rojo para valores cercanos al máximo
        }
    }

    const temperaturaActualElement = document.getElementById('temp-actual');
    const humedadActualElement = document.getElementById('hum-actual');
    const phActualElement = document.getElementById('ph-actual');
    const nutActualElement = document.getElementById('nut-actual');
 

    //temperaturaActualElement.textContent = temperaturaActualElement.getAttribute('data-val') + '°C';
    temperaturaActualElement.style.color = asignarColorTexto(temperaturaActualElement);

    //humedadActualElement.textContent = humedadActualElement.getAttribute('data-val') + '%';
    humedadActualElement.style.color = asignarColorTexto(humedadActualElement);

    //phActualElement.textContent = phActualElement.getAttribute('data-val') + 'ph';
    phActualElement.style.color = asignarColorTexto(phActualElement);

    nutActualElement.textContent = "45 (Regular)";
    nutActualElement.style.color = asignarColorTexto(nutActualElement);





    //convertir fechas
    function convertirFecha() {
        const fechas = document.querySelectorAll('.date');

        fechas.forEach(fecha => {
            const fechaOriginal = fecha.getAttribute('data-fecha');
            const fechaFormateada = new Date(fechaOriginal);

            const opcionesFecha = { weekday: 'long', day: 'numeric', month: 'short' };
            const opcionesHora = { hour: 'numeric', minute: 'numeric', second: 'numeric' };

            const fechaTexto = fechaFormateada.toLocaleDateString('es-ES', opcionesFecha);
            const horaTexto = fechaFormateada.toLocaleTimeString('es-ES', opcionesHora);

            fecha.innerHTML = `
            <span>${fechaTexto}</span>
            <br>
            ${horaTexto}
            `;
        });
        }

        // Llamar a la función para convertir las fechas
        convertirFecha();

  </script>
</body>

</html>