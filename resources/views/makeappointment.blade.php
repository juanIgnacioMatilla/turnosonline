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
</head>
<body>
    <div class="flexbox-parent">
        <header class="header">
            <h1 class="header-title">Turnos Online</h1>
        </header>
        <div class="make-appointment-div">
        <form action="{{ url('/ok') }}" method="get" class="form-content">
                <h2 class="content-title">Pedir Turno</h2>
                <h3 class="form-item">Seleccione especialidad</h3>
                <div class="select form-item">
                    <select>
                        <option>Pediatra</option>
                        <option>Odontologo</option>
                        <option>Cardiologo</option>
                        <option>Oculista</option>
                    </select>
                    <div class="select_arrow form-item">
                    </div>
                </div>

                <h3 class="form-item">Seleccione medico</h3>
                <div class="select form-item">
                    <select id="selectDoctor">
                        <option>Seleccionar</option>
                        <option>Dr. Lopez</option>
                        <option>Dr. Perez</option>
                        <option>Dr. Ramirez</option>
                        <option>Dr. Detal</option>
                    </select>
                    <div class="select_arrow form-item">
                    </div>
                </div>

                <h3 class="form-item">Fecha</h3>
                <div class="select form-item">
                    <select>
                        <option>Seleccionar</option>
                        <option>9 enero 09:00hs</option>
                        <option>8 de marzo 10:30hs</option>
                        <option>7 de julio 17:30hs</option>
                    </select>
                    <div class="select_arrow form-item">
                    </div>
                </div>
                
                <h3 class="form-item">Nombre Completo</h3>
                <input type="text" name="fullname" id="fullname"class="form-item css-input">
                
                <h3 class="form-item">DNI</h3>
                <input type="number" name="dni" id="dni"class="form-item css-input">

                <h3 class="form-item">Telefono</h3>
                <input type="text" name="cellphone" id="cellphone"class="form-item css-input">

                <h3 class="form-item">E-mail</h3>
                <input type="mail" name="email" id="email"class="form-item css-input">

                <h3 class="form-item">Obra social</h3>
                <input type="text" name="obraSocial" id="obraSocial"class="form-item css-input">
                <p class="pOS" id="pLopez">ACLARACION: El Dr. Lopez solo trabaja con OSDE</p>
                <p class="pOS" id="pRamirez">ACLARACION: El Dr. Ramirez trabaja con SEMPRE y OSDE</p>
                <p class="pOS" id="pPerez">ACLARACION: El Dr. Perez solo trabaja con SANCOR</p>
                <p class="pOS" id="pDetal">ACLARACION: El Dr. Detal solo trabaja con SEMPRE</p>

                <div type="submit" class="form-item button"><button type="submit">Pedir</button></div>
            </form>
        </div>
    </div>
</body>
</html>