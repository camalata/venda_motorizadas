<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SERVERS-COMERCIAL - Vendas de motorizadas</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Multi
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">AS MELHORES MARCAS E MODELOS</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">HOME</a></li>
                    <li><a href="#about">PRODUTOS</a></li>
                    <li><a href="#services">SERVIÇOS</a></li>
                   <!-- <li><a href="#portfolio">Portfolio</a></li>  -->
                    <li><a href="#contact">CONTACTAR-NOS</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="/cliente/login">Entrar</a>

        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
                    <div class="carousel-container">
                        <h2>Bem-vindo a SERVERS-COMERCIAL<br></h2>
                        <p>Não perca a oportunidade de ter a sua motorizada de qualidade a um preço acessivel e com as melhores garantias.</p>
                        <a href="/cliente/login" class="btn-get-started">Entrar</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
                    <div class="carousel-container">
                        <h2>Encontre a aqui a sua motorizada</h2>
                        <p> Temos pra sim as excelentes marcas e modelos para sua motorizada</p>
                        <a href="/cliente/login" class="btn-get-started">Entrar</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
                    <div class="carousel-container">
                        <h2>Preços baixos e com qualidade</h2>
                        <p> Resolva ja uma vez por toda a questao transporte com as grandes marcas e modelos com as melhores cilindragem na SEVERS-COMERCIAL</p>
                        <a href="/cliente/login" class="btn-get-started">Entrar</a>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>SOBRE NÓS</h2>
                <div><span>TUDO SOBRE NÓS</span> <span class="description-title">SOBRE NÓS</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. </p>
                        <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Motas disponiveis</h2>
                <div><span>Nossa tabela de </span> <span class="description-title">Preços</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Tudo</li>
                        <?php
                        foreach ($marcas as $marca) {
                            echo '<li data-filter=".filter-' . $marca . '">' . $marca . '</li>';
                        }
                        ?>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php foreach ($motas as $mota) { ?>
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $mota->marca }}">
                                <div class="portfolio-content h-100">
                                    <a href="{{ asset('assets/img/LINKEN-50.jpg') }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox"><img
                                            src="{{ asset('assets/img/LINKEN-50.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                    <div class="row d-flex justify-content-center text-center">
                                        <div class="col-8 portfolio-info">
                                            <h4>{{ $mota->marca }}</a></h4>
                                            <p>{{ number_format($mota->preco, 2, ',', '.') . ' Kz' }}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a href="/cliente/reservas/create?motas_id={{ $mota->id }}" class="btn btn-primary">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        <?php } ?>

                    </div>

                </div>

        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Serviços</h2>
                <div><span>Confira os nossos</span> <span class="description-title">Serviços</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <a href="#portifolio" class="stretched-link">
                                <h3>Venda de motorizadas</h3>
                            </a>
                            <p>  Cada cliente atendido é uma oportunidade de transformar sonhos em realidade sobre duas rodas. Venda com paixão, e o sucesso será o seu caminho!"  O sucesso vem quando o cliente sente que fez a melhor escolha!
                                A melhor venda não é só aquela que fecha negócio, mas aquela que abre portas para novas oportunidades!
"Cada moto vendida é um novo destino conquistado.  </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <a href="#portifolio" class="stretched-link">
                                <h3>Montagem de motorizadas</h3>
                            </a>
                            <p>"Cada peça montada é um passo rumo à liberdade sobre duas rodas. Precisão, paixão e qualidade fazem toda a diferença!" .</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="#portifolio" class="stretched-link">
                                <h3>Publicidade de novas marcas</h3>
                            </a>
                            <p>"Sinta a liberdade sobre duas rodas! Encontre sua motorizada perfeita aqui!" 🏍️✨
"Velocidade, estilo e economia! Escolha a moto dos seus sonhos hoje mesmo!" 🚀🔥
"A estrada te espera! Garanta já a sua motorizada com os melhores preços!" 🛣️💨
"Mais que uma moto, um estilo de vida! Venha conferir nossas ofertas!" 🏁⚡
"Montamos sua motorizada com qualidade e paixão. Peça já a sua!" .</p>
                        </div>
                    </div><!-- End Service Item -->


                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contacto</h2>
                <div><span>Precisa de ajuda?</span> <span class="description-title">Entre em contacto conosco</span>
                </div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 ">
                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Endereço</h3>
                                    <p> Rua Jaoquim Kapango, Estrada Nacional 250, NF:933617633</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Ligue para nós</h3>
                                    <p>244 927480529</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Nosso email</h3>
                                    <p> severscomercialvendasmotorizadas@
                                         gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="digite seu nome" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="seu email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Assunto"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Mensagem" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Enviar Mensagem</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">SEVERS COMERCIAL</strong> <span>Todos os direitos
                    reservados</span>
            </p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
