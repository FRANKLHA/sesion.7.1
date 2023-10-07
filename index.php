<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href=<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu.jpg" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-text">
                <h1>Heladeria</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Vel, tempora quidem! Ipsum praesentium eos dignissimos! Tempora aperiam expedita eveniet impedit soluta doloribus, esse ullam, voluptas explicabo ratione quia nulla quaerat.
                </p>


                <a href="#" class="btn-1">Informacion</a>
                
            </div>
            <div class="header-img">
                <img src="img/logo.png" alt="">
            </div>
        </div>
    </header>

    <section class="about container">
        <div class="about-img">
            <img src="img/helado.jpg" alt="">
        </div>

        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eveniet modi officiis
                illo incidunt. Nihil adipisci, soluta rem cum deserunt maxime ea, dolore labore architecto expedita magni sapiente suscipit quis accusamus.

            </p>

        </div>
    </section>

    <main class="servicios">

        <h2>Nuestros Sabores</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fi fi-rr-ice-cream"></i>
                <h3>Frutos Citricos</h3>
            </div>

            <div class="servicio-1">
                <i class="fi fi-rr-strawberry"></i>
                <h3>Frutos rojos</h3>
            </div>

            <div class="servicio-1">
                <i class="fi fi-ts-pineapple"></i>
                <h3> Frutos de temporada</h3>
            </div>

        </div>
    </main>

    <section class="formulario container">
        <form action="post" autocomplete="off">
            <h2>Pedidos</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombres y Apellidos">
                    <i class="fi fi-sr-circle-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Celular">
                    <i class="fi fi-sr-phone-call"></i>

                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo electronico">
                    <i class="fi fi-rr-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalle de la consulta"></textarea>
                
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">
            
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Contacto</a></li>

                </ul>
            </div>
        </div>

    </footer>

    <?php include "enviar.php"

    ?>

</body>
</html>