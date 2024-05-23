<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maxi pollo</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/hero-banner-bg.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">Maxi Pollo<span class="span">.</span></a>
      </h1>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="nav-item">
            <a href="#home" class="navbar-link" data-nav-link>Inicio</a>
          </li>

          <li class="nav-item">
            <a href="#about" class="navbar-link" data-nav-link>Especialidad</a>
          </li>

          <li class="nav-item">
            <a href="#blog" class="navbar-link" data-nav-link>Tiquetera</a>
          </li>

        </ul>
      </nav>

<a href="./auth/login.php"> <button class="btn btn-hover">Tiquetera</button></a>
       

        <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
          <span class="line top"></span>
          <span class="line middle"></span>
          <span class="line bottom"></span>
        </button>
      </div>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">El sabor del pueblo</p>

            <h2 class="h1 hero-title">Asadero Restaurante Maxi Pollo</h2>

            <p class="hero-text">En nuestro restaurante encuentras los mejores platos .</p>

            

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner-bg.png" width="820" height="716" alt="" aria-hidden="true"
              class="w-100 hero-img-bg">

            <img src="./assets/images/hero-banner.png" width="700" height="637" loading="lazy" alt="Burger"
              class="w-100 hero-img">
          </figure>

        </div>
      </section>





      <!-- 
        - #PROMO
      -->

      <section class="section section-divider white promo">
        <div class="container">

          <ul class="promo-list has-scrollbar">

            <li class="promo-item">
              <div class="promo-card">

                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                    xmlns:v="https://vecta.io/nano">
                    <
                    <defs>
                      <clipPath id="A">
                        <path fill="#fff" d="M0 0h60v60H0z" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>

                <h3 class="h3 card-title">Desayunos</h3>

                

                <img src="./assets/images/promo-1.jpeg" width="300" height="300" loading="lazy" alt="Maxican Pizza"
                  class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                    xmlns:v="https://vecta.io/nano">
                    
                    <defs>
                      <clipPath id="A">
                        <path fill="#fff" d="M0 0h60v60H0z" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>

                <h3 class="h3 card-title">Almuerzos</h3>

               
                <img src="./assets/images/promo-2.jpeg" width="300" height="300" loading="lazy" alt="Soft Drinks"
                  class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                    xmlns:v="https://vecta.io/nano">
                    
                    <defs>
                      <clipPath id="A">
                        <path fill="#fff" d="M0 0h60v60H0z" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>

                <h3 class="h3 card-title">Cenas</h3>

                

                <img src="./assets/images/promo-3.jpeg" width="300" height="300" loading="lazy" alt="French Fry"
                  class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                    xmlns:v="https://vecta.io/nano">
           
                    <defs>
                      <clipPath id="A">
                        <path fill="#fff" d="M0 0h60v60H0z" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>

                <h3 class="h3 card-title">Nuestra especialidad</h3>

                
                <img src="./assets/images/Pollo_Asado.jpeg" width="300" height="300" loading="lazy" alt="Burger Kingo"
                  class="w-100 card-banner">

              </div>
            </li>


          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section section-divider gray about" id="about">
        <div class="container">

          <div class="about-banner">
            <img src="./assets/images/Pollo_Asado.jpeg" width="479" height="439" loading="lazy" alt="Burger with Drinks"
              class="w-100 about-img">
          </div>

          <div class="about-content">

            <h2 class="h2 section-title">
              Em mejor pollo asado 
              <span class="span">lo encuentras aqui</span>
            </h2>

            <p class="section-text">
              Un ejemplo de restaurante que se especializa en asar pollos es "Maxipollo" en Nariño.
               Este restaurante ha conquistado a los comensales con su especialidad.
                Maxipollo se encuentra en san Jose de Alban Nariño y se destaca por su preparación única
                 del pollo, que lo hace especialmente sabroso y atractivo para los amantes de esta ave
                  asada </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Delicioso</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Sabor exquisito</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Elm mejor sazon</span>
              </li>

          

            </ul>

       

          </div>

        </div>
      </section>










      <!-- 
        - #BANNER
      -->

      <section class="section section-divider gray banner">
        <div class="container">

          <ul class="banner-list">

            <li class="banner-item banner-lg">
              <div class="banner-card">

                <img src="./assets/images/banner-1.jpeg" width="550" height="450" loading="lazy"
                  alt="Discount For Delicious Tasty Burgers!" class="banner-img">


              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-2.jpeg" width="550" height="465" loading="lazy" alt="Delicious Pizza"
                  class="banner-img">

          

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-3.jpeg" width="550" height="465" loading="lazy" alt="American Burgers"
                  class="banner-img">

                

              </div>
            </li>

            <li class="banner-item banner-md">
              <div class="banner-card">

                <img src="./assets/images/banner-4.jpeg" width="550" height="220" loading="lazy" alt="Tasty Buzzed Pizza"
                  class="banner-img">

                
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section section-divider white blog" id="blog">
        <div class="container">

          <p class="section-subtitle">Maxipollo</p>

          <h2 class="h2 section-title">
            Nuestro servicio de <span class="span">Tiquetera</span>
          </h2>

          <p class="section-text">
          la mejor gastronomia de la región </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <div class="card-banner">
                  <img src="./assets/images/blog-1.jpeg" width="600" height="390" loading="lazy"
                    alt="What Do You Think About Cheese Pizza Recipes?" class="w-100">

                
                </div>

                <div class="card-content">

                  

                  <h3 class="h3">
                    <a href="#" class="card-title">Tiquetera Quincenal</a>
                  </h3>

                  <p class="card-text">
                    Disfruta de 15 días de deliciosas comidas con nuestro Paquete Gastronómico Quincenal.
                     Incluye desayuno, almuerzo y cena para una experiencia culinaria completa y variada.
                    </p>

                  <a href="./auth/maxipollo.php" class="btn-link">
                    <span>Adquierela</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner">
                  <img src="./assets/images/blog-2.jpeg" width="600" height="390" loading="lazy"
                    alt="Making Chicken Strips With New Delicious Ingridents." class="w-100">

               
                </div>

                <div class="card-content">

                  

                  <h3 class="h3">
                    <a href="#" class="card-title">Tiquetera Mensual</a>
                  </h3>

                  <p class="card-text">
                    Disfruta de 30 días de deliciosas comidas con nuestro Paquete Gastronómico Mensual. Incluye desayuno, almuerzo y cena para una experiencia culinaria completa y variada.
                  </p>

                  <a href="./auth/maxipollo.php" class="btn-link">
                    <span>Adquierela</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner">
                  <br>
                  <br>
                
                  <img src="./assets/images/blog-3.jpeg" width="600" height="390" loading="lazy"
                    alt="Innovative Hot Chessyraw Pasta Make Creator Fact." class="w-100">

                 

                </div>

                <div class="card-content">


                  <h3 class="h3">
                    <a href="#" class="card-title">Tiquetera segun la necesidad del cliente</a>
                  </h3>

                  <p class="card-text">
                    Disfruta de los días que necesites el servicio, ofrecemos deliciosas comidas con nuestro Paquete Gastronómico ajustado a los dias que necesite el serviccio. Incluye desayuno, almuerzo y cena para una experiencia culinaria completa y variada.</p>

                  <a href="./auth/maxipollo.php" class="btn-link">
                    <span>Adquierela</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top" style="background-image: url('./assets/images/footer-illustration.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="" class="logo">Maxipollo<span class="span">.</span></a>

          <p class="footer-text">
            Ven y disfruta de una comida exquisita en nuestro restaurante. Será un placer atenderte.</p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contacto</p>
          </li>

          <li>
            <p class="footer-list-item">+57313433032</p>
          </li>

          <li>
            <p class="footer-list-item">Info@maxipollo.com</p>
          </li>

          <li>
            <address class="footer-list-item">San José, Alban, Nariño</address>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Horario</p>
          </li>

          <li>
            <p class="footer-list-item">Lunes-Domingo: 07:00-22:00</p>
          </li>

    



        </ul>


      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright-text">
          &copy; 2024 <a href="#" class="copyright-link">Maxipollo</a>
        </p>
      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>