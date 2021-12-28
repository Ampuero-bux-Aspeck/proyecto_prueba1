<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"
/>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css" />
    <title>PURINA</title>
  </head>
  <body>
  <?php
            error_reporting(0);
            $mensaje = $_GET["mensaje"];
            if ($mensaje == 1) {
                echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> El Estudiante fue eliminado con éxito.</p><br><br>";
            }
            if ($mensaje == 2) {
              echo"<script>
              window.alert('EL USUARIO FUE GURADADO CON EXITO');
              </script>";
                //echo "<p class='btn  btn-access'> EL USUARIO FUE GURADADO CON EXITO.</p><br><br>";




            }
            if ($mensaje == 3) {
                echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> El Estudiante fue modificado con éxito.</p><br><br>";
            }
        ?>  
      
      <div class="form-container">
        <div class="login-data">
          <section>
          <h1>INICIO DE SESIÓN</h1>
          <form action="iniciarsesion.php" method="post" class="login-form">
            <center>
            <div class="input-group">
              <label class="input-fill">
                <input type="text" name="name" id="name" required />
                <span class="input-label">USUARIO</span>
                <i class="fas fa-envelope"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
                <input type="password" name="pass" id="pass"  required />
                <span class="input-label">CONTRASEÑA</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <a href="inicio.php">¿Necesitas una Cuenta?</a>
            <input type="submit" value="Iniciar Sesión" class="btn-login" />
          </center>
          </form>
          </section>
        </div>
      </div>
    <header>
        <img src="logo.jpg" class="logo" width="200px" height="50px">
        <div class="righSide">  
            <div class="btns dayNight">
                
            </div>    
            
        </div> 
    </header>
    <section class="main">
      <video src="wert.mp4" autoplay loop muted type="mp4"></video>
      <img src="mask.jpg" class="ser">
      
      <p class="futer">© creator ampuero y richi</p>
      <ul class="sci">
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>
      <!--<h2>(Completa la frase) Lo que más me gusta de<br> Lazos de Cariño Dog Chow es<br> _________________________</h2>-->
    </section>
    <!--navegacion-->
    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      let dayNight = document.querySelector('.dayNight')
      let menuToggle = document.querySelector('.menuToggle')
      let body = document.querySelector('body')
      
      
      dayNight.onclick = function(){
        body.classList.toggle('dark')
        dayNight.classList.toggle('active')
      }
      menuToggle.onclick = function(){
        menuToggle.classList.toggle('active')
       
      }
    </script>
  </body>
</html>
