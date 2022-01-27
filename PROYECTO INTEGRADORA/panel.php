<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUAL QUALITY</title>


    <link rel="stylesheet" href="STYLE.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Normalize.css">


</head>
<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>

<body>
    <section class="main-header">
        <div class="container container--flex">
            <div class="main-header__container">
                <h2 class="main-header__title"> VISUAL QUALITY</h2>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="index.php" class="menu__link">INICIO</a></li>
                        <li class="menu__item"><a href="blog.php" class="menu__link">SOBRE NOSOTROS</a></li>
                        <li class="menu__item"><a href="tienda.php" class="menu__link">TIENDA</a></li>
                        <li class="menu__item"><a href="#contacto" class="menu__link">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt"></span>

            </div>
            <div class="main-header__container">
                <a href="" class="main-header__link"><i class="fas fa-user"></i></a>

                <input type="search" class="main-header__input" placeholder="Buscar productos"><i
                    class="fas fa-search"></i>
            </div>
        </div>
    </section>




    <!-- SLIDER -->
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="https://images.pexels.com/photos/2097085/pexels-photo-2097085.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer !OFERTA! 50% off</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="https://images.pexels.com/photos/3414327/pexels-photo-3414327.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer ¡OFERTA! 50% off</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="https://images.pexels.com/photos/2846815/pexels-photo-2846815.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer ¡OFERTA! 50% off</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="https://snappygoat.com/b/e031d75f5c05484c31a2e3eb0dcc218b4268620a" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Men’s eyewear</h2>
                    <p class="slider__txt">Cool summer ¡OFERTA! 50% off</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>

    <main class="main">
        <div class="container">
            <h2 id=ofertas class="main-title"><em>¡NUEVAS TENDENCIAS PARA TI!</em></h2><br><br>
            <section class="container-products">
                <div class="product">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Lentes_del_Ojo_de_cristal..jpg" alt=""
                        class="product__img">
                    <div class="product__description">
                        <h3 class="product__title"> Grey</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="https://www.nunsarangoptical.com/blog/wp-content/uploads/2019/03/nunsarang-usar-lentes-de-sol-mas-seguido.jpg"
                        alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title"> Clark</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="https://c.pxhere.com/photos/91/35/glasses_accessoirs_fashion_sunglasses_sun_modern_backgrounds_elegance-1042997.jpg!d"
                        alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title"> Sheriff </h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Gafas_de_sol_Rayban_Aviador.jpg"
                        alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Ray ban</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
            </section>


            <!-- <section class="container__testimonials">
                <h2 class="section__title">Testimonios</h2>
                <h3 class="testimonial__title">Anita la huerfanita </h3>
                <p class="testimonial__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, perferendis,
                    animi! Numquam quasi similique, fuga sint. Nulla veritatis quia nemo, magni, necessitatibus impedit
                    inventore, provident culpa repellat esse a quo.</p>
            </section> -->




            <div class="container-editor">
                <div class="editor__item">
                    <img src="SunRed.jpg" alt="" class="editor__img">
                    <p class="editor__circle"><em>EXPRESA TU ESTILO</p></em>
                </div>
                <div class="editor__item">
                    <img src="https://images.pexels.com/photos/261856/pexels-photo-261856.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="" class="editor__img">
                    <p class="editor__circle"><em>EXPRESA TU ESTILO</p></em>
                </div>
            </div>
            <section class="container-tips">
                <div class="tip">
                    <i class="far fa-hand-paper"></i>
                    <h2 class="tip__title">Satisfaccion Garantizada</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
                <div class="tip">
                    <i class="fas fa-rocket"></i>
                    <h2 class="tip__title">Compra Facil </h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit.</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
                <div class="tip">
                    <i class="fas fa-cog"></i>
                    <h2 class="tip__title">Proteccion UV y Mas!</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit.</p>
                    <a href="tienda.php" class="btn-shop">COMPRAR</a>
                </div>
            </section>
        </div>
    </main>
    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">QUIENES SOMOS</h2>
            <p class="footer__txt">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget
                consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title"> SUCURSAL :</h2>
            <p class="footer__txt">0926k 4th block building, king Avenue, New York City</p>
            <h2 class="footer__title">CONTACTO</h2>
            <p id=contacto class="footer__txt">Phone : 81 12345678</p>
            <p class="footer__txt">Email : info@example.com</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Quick Links</h2>
            <a href="logout.php" class="footer__link">CERRAR SESION</a>
            <a href="blog.php" class="footer__link">SOBRE NOSOTROS</a>
            <a href="tienda.php" class="footer__link">TIENDA</a>
            <a href="#ofertas" class="footer__link">OFERTAS</a>

            
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Recibe las mejores Ofertas! </h2>
            <p class="footer__txt">By subscribing to our mailing list you will always get latest news and updates from
                us.</p>
            <input type="email" class="footer__input" placeholder="Enter your email">
        </div>
        <p class="copy">© 2021 UTE equipo 3 . All Rights Reserved | Design by Bruce</p>
        <a href="logout.php">Desconectar</a>

    </footer>



    <script src="tienda/js/app.js"></script>



</body>

</html>