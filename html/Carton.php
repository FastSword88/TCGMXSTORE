<!DOCTYPE html> 
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="../images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Carton</title>
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
                <!-- Blu ais xd -->
                <div class="producto"> 
                    <div class="imagen">
                        <img src="../image/SDK.png" alt="Blue eyes" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Blue Eyes White Dragon SDK-001</p>
                        <p class="precio">$3,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Stardus Ghost -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/TDGS.png" alt="Stardust" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Stardust Dragon Ghost Rare TDGS-EN040</p>
                        <p class="precio">$1,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Dark Magician-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/SDY.png" alt="Dark Magician" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Dark Magician SDY-006</p>
                        <p class="precio">$2,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Red Eyes -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/SDJ001.png" alt="Red Eyes" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Red Eyes Black Dragon SDJ-001</p>
                        <p class="precio">$3,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Typhon que niega -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Tifon.png" alt="Typhoon" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Mystical Space Typhoon Ghost Rare GLD5-EN038 </p>
                        <p class="precio">$800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Frentona -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Ash.png" alt="Ash Blossom & Joyous Spring" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tercia Ash Blossom & Joyous Spring Secret MACR-EN036</p>
                        <p class="precio">$3,900.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- strike-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Strike.png" alt="Solemn Strike" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tercia Solemn Strike Secret BOSH-EN079</p>
                        <p class="precio">$750.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- ACCES CODE-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Access.png" alt="Acces Code" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Accesscode Talker Secret ETCO-EN046</p>
                        <p class="precio">$1,800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- crossout -->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Cross.png" alt="Crossout Designator" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Crossout Designator Ultra MP21-EN258</p>
                        <p class="precio">$900.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Lightning Storm-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../image/Storm.png" alt="Lightning Stormr" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Lightning Storm Ultra KICO-EN057</p>
                        <p class="precio">$900.00</p>
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