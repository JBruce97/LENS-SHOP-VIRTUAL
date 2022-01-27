<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> VISUAL SHOP</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="tienda/css/tienda.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> VISUAL SHOP </a>

    <nav class="navbar">
        <a href="panel.php">Menu principal</a>
        <a href="#home">Inicio</a>
        <a href="#contacto">Contacto</a>
    </nav>



    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

<!--  -->
    <div class="shopping-cart">
        <div class="box">
          
        <a href="carrito.html" class="btn">Empezar</a>
    </div>
<!--  -->

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Fresco y <span>Original</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="#features" class="btn">comprar ahora!  </a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> TRES <span>SENCILLOS PASOS</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="tienda/image/lentes/SunRed.jpg" alt="">
            <h3>Escoge tu Estilo a expresar</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#contacto" class="btn">Mas Informacion</a>
        </div>

        <div class="box">
            <img src="tienda/image/feature-img-3.png" alt="">
            <h3>Haz tu forma de pago</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#contacto" class="btn">Mas Informacion</a>
        </div>

        <div class="box">
            <img src="tienda/image/feature-img-2.png" alt="">
            <h3>Recibe tu nuevo look</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#contacto" class="btn">Mas Informacion</a>
        </div>

    </div>

</section>

<!-- features section ends -->





<!-- productos section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Nuestros <span>Productos </span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente1.jpeg" alt="">
                <h3>chicken</h3>
                <div class="price"> $1299.99 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente2.jpeg" alt="">
                <h3>Clark kent</h3>
                <div class="price"> $899.99 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente3.jpeg" alt="">
                <h3> meat</h3>
                <div class="price"> $489.99 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente4.jpeg" alt="">
                <h3>Pink panther</h3>
                <div class="price"> $499.99 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente5.jpeg" alt="">
                <h3>Grey</h3>
                <div class="price"> $990.00</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente6.jpeg" alt="">
                <h3>Charly Lens</h3>
                <div class="price"> $889.97 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/lente7.jpeg" alt="">
                <h3>Lemons</h3>
                <div class="price"> $489.99 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/lentes/SunRed.jpg" alt="">
                <h3>watermelon</h3>
                <div class="price"> $2499.99 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="carrito.html" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->







<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="tienda/image/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="tienda/image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->







<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> VISUAL QUALITY  </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="https://www.facebook.com/SolutionVisual/" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/visualquality.1/" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3 id="contacto">Contacto info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> visualquality@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Monterrey, N.L - C.P 400104 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Inicio </a>
            
            <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> Productos </a>
            
            <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="Blog.php" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribete Para mas detalles</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> mr. john Lopez </span> | all rights reserved UTE </div>

</section>

<!-- footer section ends -->









<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="tienda/js/tienda.js"></script>

</body>
</html>