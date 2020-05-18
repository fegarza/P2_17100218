<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="vistas/build/index.css">

    <script src="vistas/index.js"></script>
    <title> Bonbon - Recetas </title>
</head>
<body>
    <section id="cover">
        <div class="cont">
          <nav>
            <img id="logo" src="vistas/images/bonbonnx.png" alt="bonbon*">
            <ul>
              <li>Acerca</li>
              <li><a id="login" class="button" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
            </ul>
          </div>
        </nav>
          <div class="convtent">
            <p>¡Comparte tus recetas de cocina! </p>
            <p id="mini">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 196"><path class="cls-1" d="M1194.5,532.5" transform="translate(0 0)"/><path class="cls-2" d="M462,196" transform="translate(0 0)"/><path class="cls-2" d="M0,98s298,98,700,98,700-98,700-98V0H0Z" transform="translate(0 0)"/></svg>      <div class="overlay overlay--hidden"></div>
      <div id="imagen">        
        <img id="sartencio" src="vistas/images/Artboard 2.png" alt="sarten">
      </div>
      </section>

        <section id="acerca">
          <p id="titulo">ACERCA</p>
          <div id="acerca1">
            <img id="imagen1" src="vistas/images/orangehair.png" alt="chico cocinando">
            <div id="texto1">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolor et amet sed sequi ad voluptas facere, aliquam neque magni aliquid iure, vel, quidem adipisci. Reiciendis dolore omnis sequi earum?</p>
            </div>
          </div>
          <div id="acerca2">
            <div id="texto2">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat obcaecati nobis suscipit ipsam doloremque, eaque est. Tempora vero nam totam explicabo, aut neque voluptatum, corporis voluptatem temporibus assumenda in possimus.</p>
            </div>
            <img id="imagen2" src="vistas/images/cookin.png" alt="cocinando" >
          </div> 
          <div id="creds">
            <h1>made with <3 </h1>
          </div>
        </section>

 <section id="login">
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'"
    class="close" title="Cerrar">&times;</span>
    
      <!--  content -->
      <form class="modal-content animate" action="" method="POST">
      <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <div class="imgcontainer">
          <img src="vistas/images/blackhair.png" alt="user" class="avatar">
        </div>
        <div class="container">
          <label for="uname"><b>Usuario</b></label>
          <input type="text" placeholder="Escribe tu usuario" name="username" required>
          <label for="psw"><b>Contraseña</b></label>
          <input type="password" placeholder="Escribe tu contraseña" name="password" required>
          <button type="submit">Login</button>
          <!-- <span>¿No tienes cuenta? <a href="#">Regístrate</a></span>-->
      </form>
    </div> 
</section>
</body>
</html>