<!DOCTYPE html>
<?php 
    session_start(); 
?>
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>TCGMX</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="fonts/style.css">
</head>
<body>
    <i class="icon-menu bur-button" id="burger-menu"></i>
    <header class="header" style="justify-content: space-between;">
        <div class="container">
            <div class="logo">
                <a href="index.php" class="return">
                    <img src="image/logo.png" alt="logo TCGMX" width="100px" height="100px">
                    <h1>TCG<br>MX</h1>
                </a>
            </div>

            <div class="header_section">    
                <div class="header_section_second">
                    <div class="cuenta">
                        <?php
                            
                            if(!isset($_SESSION['usuario'])){
                            ?>  
                                <a href="php/sesion.php" class="entrar_cuenta">
                                    <h2>Cuenta</h2>
                                    <span class="icon-user"></span>
                                </a>
                            
                            <?php
                            }else{
                                $_SESSION['usuario'] = false;
                            ?>
                                <a href="php/cerrar_sesion.php" class="entrar_cuenta">
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
                                <a class="link" href="html/Expansiones.php">Expansiones</a>
                            </li>
                            <li>
                                <a class="link" href="html/Estructuras.php">Estructuras</a>
                            </li>
                            <li>
                                <a class="link" href="html/Carton.php">Carton</a>
                            </li>
                            <li>
                                <a class="link" href="html/Accesorios.php">Accesorios</a>
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
            <div class="productos">
                <div class="ofertas">
                    <div class="container-slider">
                        <div class="slider" id="slider">
                            <div class="slider_section">
                                <img src="image/Slider_1.png" alt="" class="slider_img" width="100%">
                            </div>
                            <div class="slider_section">
                                <img src="image/Slider_2.png" alt="" class="slider_img" width="100%">
                            </div>
                            <div class="slider_section">
                                <img src="image/Slider_3.png" alt="" class="slider_img" width="90%">
                            </div>
                        </div>
                        <div class="slider_btn slider_btn-left" id="btn-left">
                            &#60;
                        </div>
                        <div class="slider_btn slider_btn-rigth" id="btn-right">
                            &#62;
                        </div>

                    </div>
                </div>

                <div class="other-products">
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="image/Carpeta.png" alt="crack" width="90%" height="90%">
                        </div>
                        <div class="desc">
                            <h2>25% de descuento</h2>
                        </div>
                    </div>
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="image/Cross.png" alt="crack" width="90%" height="90%">
                        </div>
                        <div class="desc">
                        <h2>15% de descuento</h2>
                        </div>
                    </div>
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="image/MicasUltra.png" alt="Crack" width="90%" height="90%">
                        </div>
                        <div class="desc">
                        <h2>20% de descuento</h2>
                        </div>
                    </div>
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="image/Ghost.png" alt="Piedra" width="90%" height="90%">
                        </div>
                        <div class="desc">
                            <h2>30% de descuento</h2>
                        </div>
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
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>