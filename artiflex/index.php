<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artiflex</title>
   
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form" method="post">
              <div class="logo">
                <img src="./img/logo2.png" alt="easyclass" />
                <h4>Artiflex</h4>
              </div>

              <div class="heading">
                <h2>
                    ¡Bienvenido!</h2>
                
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    name="user"
                    required
                  />
                  <label>Usuario</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    name="password"
                    required
                  />
                  <label>Contrasena</label>
                </div>

                <input type="submit" value="Iniciar sesion" class="sign-btn" />

                <p class="text">
                    ¿Olvidó su nombre de usuario o contraseña?
                  <a href="ayuda.html">Obtener ayuda</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="#" class="image img-1 show" alt="" />
              <img src="#" class="image img-2" alt="" />
              <img src="#" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>¡Revolución en Rehabilitación!</h2>
                  <h2>
                    ¡Transforma tu Bienestar!</h2>
                  <h2>¡No te pierdas esta oportunidad!</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- script para animaciones y slider -->

    <script src="main.js"></script>
  </body>
</html>