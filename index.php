<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <style>
            body{
                background: black;
                background-image:url(img/title1.jpg);
                background-size: cover;
            }
        </style>
        
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row">
                <div class="col-md-12"><h2 class="text-center" style="color:white;">EJEMPLO INICIO DE SESION EN PHP</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <!--<form action="index2.php" method="post">-->
                        <br>
                        <input id="usuario_nombre" class="form-control" type="text" placeholder="Usuario">
                        <br>
                        <input id="usuario_clave" class="form-control" type="password" placeholder="Contraseña">
                        <br>
                        <button class="btn btn-success btn-block" onclick="chequeaPass();" type="submit">Entrar</button>
                    <!--</form>-->
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
        
        ?>
    </body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    function chequeaPass(){
        var _usuario_nombre = $('#usuario_nombre').val();
        var _usuario_clave = $('#usuario_clave').val();
        //console.log(_usuario_nombre);
        
        $('#centro').load("login.php" ,{
            usuario_nombre : _usuario_nombre,
            usuario_clave : _usuario_clave
        });
    }
        
    </script>
</html>
