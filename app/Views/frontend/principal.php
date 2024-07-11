<!--Carrousel Principal-->
<div id="carouselExampleCaptions" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/principal/carousel_1.jpg" class="d-block w-100" alt="Carrousel_principal_img_1">
            <div class="carousel-caption">
                <h5>Coffe House</h5>
                <p>Para compartir una experiencia única e inolvidable</p>
                <a href="#services" class="btn btn-warning mt-3">VER OFERTAS</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/principal/carousel_2.jpg" class="d-block w-100" alt="Carrousel_principal_img_2">
            <div class="carousel-caption">
                <h5>Coffe House</h5>
                <p>Para compartir una experiencia única e inolvidable</p>
                <a href="#about" class="btn btn-warning mt-3">ACERCA DE</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/principal/carousel_3.jpg" class="d-block w-100" alt="Carrousel_principal_img_3">
            <div class="carousel-caption">
                <h5>Coffe House</h5>
                <p>Para compartir una experiencia única e inolvidable</p>
                <a href="#team" class="btn btn-warning mt-3">QUIENES SOMOS</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/principal/carousel_4.jpg" class="d-block w-100" alt="Carrousel_principal_img_4">
            <div class="carousel-caption">
                <h5>Coffe House</h5>
                <p>Para compartir una experiencia única e inolvidable</p>
                <a href="#contact" class="btn btn-warning mt-3">CONTACTO</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Informacion acerca de nosotros -->
<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h3>ACERCA DE COFFE HOUSE</h3>
                </div>
            </div>
        </div>
        <div class="card mb-3 custom-card-horizontal">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="assets/img/principal/cafe_taza_5.jpg" alt="img_cafe_taza_5" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">DESCUBRE LA EXCELENCIA DEL CAFE</h5>
                        <p class="card-text justify-text">En Coffe House, nos especializamos en ofrecer una experiencia única con nuestros cafés premium.
                            Nuestra pasión por el café nos lleva a seleccionar los mejores granos, asegurando un sabor
                            inigualable en cada taza. Más que una tienda, somos un lugar donde los amantes del café pueden
                            descubrir nuevos sabores, aprender sobre la rica historia del café y compartir momentos
                            inolvidables. Únete a nosotros y vive la experiencia Coffe House.</p>
                        <a href="<?php echo base_url('acerca_de'); ?>" class="btn btn-warning btn-sm d-block mx-auto">LEER MAS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Cards de Ofertas de nuestros Servicios/Prodcutos dentro de un Carousel-->
<section id="services" class="services custom-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h3>NUESTRAS OFERTAS</h3>
                </div>
            </div>
        </div>
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Primer item del carousel -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>AMERICANO</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café rebajado con agua</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_macchiato.png" alt="img_cafe_macchiato">
                                    <h6><b>MACCHIATO</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café espumoso</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_expresso.png" alt="img_cafe_expresso">
                                    <h6><b>EXPRESSO</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café solo</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_cortado.png" alt="img_cafe_cortado">
                                    <h6><b>CORTADO</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café cortado con poca leche</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Segundo item del carousel -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_leche.png" alt="img_cafe_leche">
                                    <h6><b>CAFÉ CON LECHE</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Mitad café, mitad leche</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_lagrima.png" alt="img_cafe_lagrima">
                                    <h6><b>LAGRIMA</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Poco café, mucha leche</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>CAPPUCHINO</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Poca leche y mucha espuma</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>CAFÉ LATTE</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Menos espuma, suave y cremoso</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tercer item del carousel -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>BREVE</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café con leche y crema</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>IRLANDES</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café con whiisky y crema batida</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>HAWAIANO</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café con leche de coco</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="align-items-center p-2 text-center">
                                    <img class="rounded" width="120" height="120" src="assets/img/catalogo/img_cafe_americano.png" alt="img_cafe_americano">
                                    <h6><b>ARABE</b></h6>
                                    <div class="mt-3 info">
                                        <span class="text d-block">Descripcion</span>
                                        <span class="text">Café con especias</span>
                                    </div>
                                    <div class="precio mt-3 text-dark">
                                        <span>$1100</span>
                                    </div>
                                </div>
                                <div class="btn btn-dark p-3 promo text-center mt-3">
                                    <a href="#"><span class="text-uppercase text-white">AÑADIR AL CARRITO</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles del carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Cards Equipo de trabajo -->
<section id="team" class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h3>NUESTRO EQUIPO</h3>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="assets/img/quienes_somos/1.webp" alt="foto_persona_1" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Justo Escobar</h3>
                        <p class="card-text">Líder de equipo</p>
                        <p class="socials">
                            <i class="fa-brands fa-twitter text-dark mx-1"></i>
                            <i class="fa-brands fa-facebook text-dark mx-1"></i>
                            <i class="fa-brands fa-linkedin text-dark mx-1"></i>
                            <i class="fa-brands fa-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="assets/img/quienes_somos/2.webp" alt="foto_persona_2" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Justo Escobar</h3>
                        <p class="card-text">Diseñador UX/UI</p>
                        <p class="socials">
                            <i class="fa-brands fa-twitter text-dark mx-1"></i>
                            <i class="fa-brands fa-facebook text-dark mx-1"></i>
                            <i class="fa-brands fa-linkedin text-dark mx-1"></i>
                            <i class="fa-brands fa-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="assets/img/quienes_somos/3.webp" alt="foto_persona_3" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Justo Escobar</h3>
                        <p class="card-text">Analista</p>
                        <p class="socials">
                            <i class="fa-brands fa-twitter text-dark mx-1"></i>
                            <i class="fa-brands fa-facebook text-dark mx-1"></i>
                            <i class="fa-brands fa-linkedin text-dark mx-1"></i>
                            <i class="fa-brands fa-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="assets/img/quienes_somos/4.webp" alt="foto_persona_4" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Justo Escobar</h3>
                        <p class="card-text">Programador</p>
                        <p class="socials">
                            <i class="fa-brands fa-twitter text-dark mx-1"></i>
                            <i class="fa-brands fa-facebook text-dark mx-1"></i>
                            <i class="fa-brands fa-linkedin text-dark mx-1"></i>
                            <i class="fa-brands fa-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section contactarse con nosotros-->
<section id="contact" class="contact section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h3>CONTACTO</h3>
                </div>
            </div>
        </div>
        <div class="form-area">
            <div class="container">
                <div class="row single-form g-0">
                    <div class="col-sm-12 col-lg-6">
                        <div class="left">
                            <h3><span>Contacta con nosotros</span> <br>Coffe House</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="right">
                            <i class="fa-solid fa-caret-left"></i>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>