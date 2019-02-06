<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedir Turno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css"> 
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</head>
    
<body>
    <div class="flexbox-parent">
        <header class="header">
            <h1 class="header-title">Turnos Online</h1>
        </header>
        <div class="user-div">
            <div class="form-content">
                <div class="user-info">
                    <div class="form-item title-info">Diego Lopez</div>
                    <p class="form-item"><b>DNI:</b> 123214567</p>
                    <p class="form-item"><b>Telefono:</b> +542302908756</p>
                </div>
                <form class="form-content add-history">
                    <h3 class="form-item">Agregar al historial</h3>
                    <input type="date" placeholder="Fecha" class="form-item css-input"/>
                    <textarea placeholder="Nueva Entrada" class="form-item css-input"></textarea>
                    <button>Agregar</button>
                </form>
            </div>
            <div class="form-content">
                <h3 class="form-item">Historial Clinico</h3>
                <div class="card">
                    <div class="card-body">
                        <h4><b>18/01/2019</b></h4> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="card-buttons">
                            <button>Editar</button><button>Borrar</button> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4><b>05/01/2019</b></h4> 
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="card-buttons">
                            <button>Editar</button><button>Borrar</button> 
                        </div> 
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4><b>02/01/2019</b></h4> 
                        <p>co laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="card-buttons">
                            <button>Editar</button><button>Borrar</button> 
                        </div> 
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4><b>21/12/2018</b></h4> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                        <div class="card-buttons">
                            <button>Editar</button><button>Borrar</button> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>