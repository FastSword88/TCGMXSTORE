<!DOCTYPE html> 
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="../images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Accesorios</title>
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
                                    <a class=link href="php/dir.php">Dirección</a>
                                </li>
                            <?php
                            }
                            ?>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="other_products">
                <!-- Portadeck-->
                <div class="producto"> 
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../image/DeckBox.png" alt="Portadeck" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Portadek marca DeckBox Negro</p>
                        <p class="precio">$60.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Micas -->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../image/MicasDioses.png" alt="Micas" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Micas Dioses Egipcios marca Konami</p>
                        <p class="precio">$150.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Micas Ultrapro-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../image/MicasUltra.png" alt="Micas" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Micas marca Ultrapro</p>
                        <p class="precio">$60.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- carpeta konami-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../image/Portafolio.png" alt="Carpeta" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Portafolio (carpeta) Dioses Egipcios marca Konami</p>
                        <p class="precio">$350.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- carpeta ultra pro-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../image/Carpeta.png" alt="carpeta" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Carpeta Ultra Pro 4 Pocket </p>
                        <p class="precio">$400.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Mat -->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../image/Mat.png" alt="Playmat" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Playmat Dioses marca Konami</p>
                        <p class="precio">$300.00</p>
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