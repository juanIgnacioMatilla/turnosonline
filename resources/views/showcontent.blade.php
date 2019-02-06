<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedir Turno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css"> 
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script></head>
<body>
    <div class="flexbox-parent">
        <header class="header">
            <h1 class="header-title">Turnos Online</h1>
        </header>
        <div class="search-box"> 
            <input placeholder="Bucar por DNI" class="css-input search-input" />
            <button class="search-button" > Buscar </button>
        </div>
        <div class="appointments-table">
            <div class="row main">
                <div class="column">Numero</div>
                <div class="column">Nombre</div>
                <div class="column">DNI</div>
                <div class="column">Fecha</div>
                <div class="column">Especialidad</div>
                <div class="column">Medico</div>
                <div class="column">Estado</div>
                <div class="column">Acciones</div>
            </div>
            
            <div class="row" id="juanPerez">
                <div class="column">9</div>
                <div class="column"><a>Juan Perez</a></div>
                <div class="column">243183163</div>
                <div class="column">27/01/19 18:00</div>

                <div class="column">Pediatra</div>
                <div class="column">Dr. Lopez</div>
                <div class="column state">Pendiente</div>
                <div class="column"><button  class="adminButton" id='startButton'onclick="changeState()">Iniciar</button><button  class="adminButton"onclick="hide()">Borrar</button></div>
            </div>

            <div class="row" id="juanPerez">
                    <div class="column w">11</div>
            <div class="column w"><a target="_blank" href="{{ url('/user') }}">Diego Lopez</a></div>
                    <div class="column w">123214567</div>
                    <div class="column w">27/01/19 17:00</div>
                    <div class="column w">Cardiologo</div>
                    <div class="column w">Dr. Pra</div>
                    <div class="column state w">Pendiente</div>
                    <div class="column w"><button class="adminButton"id='startButton'onclick="changeState()">Iniciar</button><button class="adminButton"onclick="hide()">Borrar</button></div>
            </div>
        </div>
    </div>
</body>
</html>