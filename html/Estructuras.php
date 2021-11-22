<!DOCTYPE html> 
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="../images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Estructuras</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../css/estilo1.css">
</head>
<body>
    <i class="icon-menu bur-button" id="burger-menu"></i>
    <header class="header" style="justify-content: space-between;">
        <div class="container">
            <div class="logo">
                <a href="../index.php" class="return">
                    <img src="../image/logo.png" alt="logo TCGMX" width="100px" height="100px">
                    <h1>TCG<br>MX</h1>
                </a>
            </div>
            <div class="header_section">
                <div class="header_section_second">
                    <div class="cuenta">
                    <?php
                            session_start(); 
                            if(!isset($_SESSION['usuario'])){
                            ?>
                                <a href="../php/sesion.php" class="entrar_cuenta">
                                    <h2>Cuenta</h2>
                                    <span class="icon-user"></span>
                                </a>
                            
                            <?php
                            }else{
                                $_SESSION['usuario'] = false;
                            ?>
                                <a href="../php/cerrar_sesion.php" class="entrar_cuenta">
                                    <h2>Cerrar sesión</h2>
                                    <span class="icon-user"></span>
                                </a>
                            <?php
                            }
                            ?>
                    </div>
                    <div class="carrito">
                        <h2>Carrito</h2>
                        <span class="icon-cart"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="products">
        <div class="container">
            <div class="space">
                <div class="menu">
                    <h2>MENU</h2>
                    <nav>
                        <ol>
                        
                            <li>
                                <a class="link" href="../index.php">Inicio</a>
                            </li>
                            <li>
                                <a class="link" href="Expansiones.php">Expansiones</a>
                            </li>
                            <li>
                                <a class="link" href="Estructuras.php">Estructuras</a>
                            </li>
                            <li>
                                <a class="link" href="Carton.php">Carton</a>
                            </li>
                            <li>
                                <a class="link" href="Accesorios.php">Accesorios</a>
                            </li>
                        
                            <?php
                            
                            if(!isset($_SESSION['usuario'])){
                            ?>  

                            <?php
                            }else{
                                $_SESSION['usuario'] = false;
                            ?>
                                <li>
                                    <a class=link href="..php/dir.php">Dirección</a>
                                </li>
                            <?php
                            }
                        ?>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="other_products">
                <!-- Impermanence con otras 39 cartas xd-->
                <div class="producto" > 
                    <div class="imagen">
                        <img src="../image/CiberStryke.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Ciber Stryke</p>
                        <p class="precio">$220.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Deck meta bueno, bonito y "barato" -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Shadoll.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Shaddoll Showdown</p>
                        <p class="precio">$220.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Llevele sus twin twister, Warning y dark ruler no more con el plus de waifus -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Charmer.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Spirit Charmers</p>
                        <p class="precio">$200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Quiero tercia de ashes pero no tengo para pagar 1500: la estructura-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Soulburner.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck SoulBurner</p>
                        <p class="precio">$250.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Parece deck de nostalgia pero te hace tremendo Lock -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Bestias.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre"> Structure Deck: Sacred Beasts of Chaos </p>
                        <p class="precio">$180.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Deck para principiantes xd-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Madness.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Mechanized Madness</p>
                        <p class="precio">$150.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Nostalgia!!!!!!!! -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/BlueEyes.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Saga of Blue-Eyes White Dragon </p>
                        <p class="precio">$180.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Turutututu turutututu -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Dinos.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Dinomaster Fury</p>
                        <p class="precio">$220.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Los pendulos arruinaro el juego y con esto lo vamos a nerfear -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Link.png" alt="Estructura" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Structure Deck Powercode Link</p>
                        <p class="precio">$150.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="contacto">
                <p>
                    Esto es un trabajo escolar hecho por una empresa 100% mexicana. Los productos, así como los precios son ficticios.
                </p>
            </div>
            <div class="sociales">
                <div class="redes">
                    <a href="https://www.facebook.com/FastSword.12/" class="social-link facebook" target="_blank"></a>
                    <a href="https://twitter.com/FastSword_88" class="social-link twitter" target="_blank"></a>
                    <a href="https://www.instagram.com/fastsword88" class="social-link instagram" target="_blank"></a>
                </div>
                <div class="atencion">
                    <h3>Atención a clientes <br> 5567346883</h3>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/main.js"></script>
</body>
</html>