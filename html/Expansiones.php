<!DOCTYPE html> 
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="../images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Expansiones</title>
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
<!--Supongamos que es el carrito de compras-->
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
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="other_products">
                <!-- Primer expansion -->
                <div class="producto"> 
                    <div class="imagen">
                        <img src="../image/Dawn.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Dawn of Majesty, Booster Box Sellada</p>
                        <p class="precio">$1,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Segundo producto-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Kings.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Kings Court, Booster Box Sellada</p>
                        <p class="precio">$1,700.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Megatin 2021-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Megatin.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">2021 Tin Of The Ancient Battles </p>
                        <p class="precio">$400.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!--Ancient Guardian-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Ancient.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Ancient Guardian, Booster Box Sellada</p>
                        <p class="precio">$1600.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Lightning Overdrive-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Light.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Yugioh Lightning Overdrive 24/sobres Sellada</p>
                        <p class="precio">$1,700.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Display de Gold -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/GoldDisplay.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Display Maximum Gold El Dorado 5 cajas con 4 sobres cada caja</p>
                        <p class="precio">$2,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Gold pal pueblo -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Dorado.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Maximum Gold El Dorado 4 sobres.</p>
                        <p class="precio">$500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Display Ghost From the Past-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/GhostDisplay.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Display Ghost from the past 5 cajas con 5 sobres cada caja</p>
                        <p class="precio">$2,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Ghost from the past pal pueblo-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Ghost.png" alt="Expansion" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Ghost from the past 5 sobres</p>
                        <p class="precio">$500.00</p>
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