<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp Php 3F</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container mb-5">
     <h2 class="text-white text-center mt-5 mb-5 font1">Sandra Ferreyra, Fernando Gregoratti,Santiago Bergerat, Santiago Delgado, Pablo Agustín Jerez,David Sanchez - TP PHP <img src="img/3F.jpg" alt="logo 3f" style=" width: 2.4vw;height:auto;margin-top:-0.5%;border:2px solid white;border-radius:6px;">  </h2>  
    <div class="row justify-content-center align-items-start ">
    <div class="bordes col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 d-flex flex-column justify-content-center  align-items-center text-center m-2">
    <h3 class="text-white mt-2 mb-2">ACCIONES</h3>
    <button type="button" class="btn btn-success mt-3" id="btn-alta">Alta</button>
     <button type="button" class="btn btn-success mt-3 " id="btn-modificar">Modificar</button>
    <button type="button" class="btn btn-success mt-3 mb-3" id="btn-lista">Eliminar</button>
    </div>
       <div class="bordes col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9 d-flex flex-column justify-content-center  align-items-center m-2">
    <h1 class="text-white">Bienvenido</h1>
    <!-- Sección para cargar el contenido dinámicamente -->
     <div id="contenido-dinamico" class=" d-flex flex-column justify-content-center  align-items-center text-center m-2">
        <!-- Aquí se cargará el contenido dinámico -->
        <h3 class="text-white">Sistema de gestión de movimientos hogareños</h3>
        <br>
        <div class="row">
            <div class="col">
            <iframe width="460" height="270" src="https://www.youtube.com/embed/0Yt1bgK7CaU?si=DUpZ2SpveCJb3V0R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col">
            <iframe width="460" height="270" src="https://www.youtube.com/embed/OxjX4iRlmF0?si=uetYuKpJK6YPRFSh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <br>
        <div class="row">
            <h4 class="text-white">Más tips para gestionar las finanzas de su hogar</h4>
            <br> <br>
               <div class="col">
            <p class="text-white"><b>Presupuesto mensual:</b> Establece un presupuesto mensual que incluya todos los gastos fijos y variables, como hipoteca o alquiler, servicios públicos, alimentos, transporte, entretenimiento, etc. Esto te dará una visión clara de tus ingresos y gastos, ayudándote a tomar decisiones financieras más informadas. </p>
          <br>
          <p class="text-white"><b>Prioriza gastos esenciales:</b> Identifica y prioriza los gastos esenciales, como vivienda, alimentos, servicios básicos y atención médica. Estos deben ser cubiertos primero para asegurar las necesidades fundamentales de tu familia. Luego, asigna el dinero restante a otros gastos no esenciales. </p>
          <br>
          <p class="text-white"><b>Ahorro sistemático:</b> Establece un hábito de ahorro sistemático. Destina una parte de tus ingresos a una cuenta de ahorros antes de asignar dinero a otros gastos. Esto te ayudará a construir un fondo de emergencia y a planificar para metas a largo plazo. </p>
          <br>
          <p class="text-white"><b>Comparación de precios y negociación:</b> Antes de realizar compras importantes, compara precios en diferentes tiendas o proveedores. Además, no dudes en negociar cuando sea posible, especialmente en servicios como seguros, cable/internet y contratos de telefonía. Puedes obtener descuentos o mejores tarifas simplemente preguntando. </p>
          <br>
          <p class="text-white"><b>Control de gastos variables:</b> Lleva un registro detallado de tus gastos variables, como salidas a comer, entretenimiento y compras impulsivas. Utiliza aplicaciones de presupuesto o lleva un registro manual para identificar patrones y áreas donde puedas reducir gastos. Esto te ayudará a ser más consciente de tus hábitos de gasto.
Recuerda que la clave para una gestión exitosa de los gastos hogareños es la disciplina y la consistencia. Revisar regularmente tu presupuesto y hacer ajustes según sea necesario te permitirá adaptarte a cambios en tus circunstancias financieras.
</p>
        </div>
        </div>
       
    </div>
                <div id="respuesta-eliminar"></div>
                <div id="respuestaDeLaAlta"></div>
        </div>
    </div>
</div>
<script src="js/modificar.js"></script>
<script src="js/asincronismo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>