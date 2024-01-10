<style>
/* 

BLUE 
#0f98f8
#2d97e2

GREEN 
#229954
#27AE60

REED 
#EA1030
#A3081E
*/
:root {
    --main: #1C2833;
    --second: #283747;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    list-style: none;
    text-decoration: none !important;

}

header {
    position: fixed;
    right: 0;
    top: 0;
    z-index: 100000;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 9%;
}

.logo {
    font-size: 25px;
    font-weight: 700;
    padding-left: 9%;
    color: var(--main);
    text-decoration: none;
}


.navlist,
.navlist2 {
    display: flex;
    z-index: 1000;
}

.navlist a,
.navlist2 a {
    color: var(--second);
    margin-left: 60px;
    margin-bottom: 20px;
    font-size: 19px;
    font-weight: 620;
    border-bottom: 2px solid transparent;
    transition: all .55s ease;
}

#menu-icon {
    color: black;
    font-size: 35px;
    z-index: 10001%;
    cursor: pointer;
    display: none;
}

.bg-info {
    background: linear-gradient(to right, var(--main), var(--second)) !important;
}

.rounded-10 {
    border-radius: 150px 150px 0px 0px;
}

.info {
    height: 100%;
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(to right, var(--main), var(--second));
    /* o este to right, #87CEEB, #00BFFF */
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
}

.info-img img {
    width: 80%;
    height: auto;
    margin-top: -10px;
}

section {
    padding: 0 8%;
}

section .container-fluid {
    padding: 0 8%;
    padding-top: 13vh !important;
}

.info-text h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 50px;
    line-height: 1;
    color: white;
    margin: 0 0 45px;

}

.shadow-2 {
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.shadow-3 {
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.info-text2 h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 50px;
    line-height: 1;
    color: rgb(0, 0, 0);
    margin: 0 0 45px;
}

.info-text p {
    color: rgb(0, 0, 0);
    font-size: 18px;
    margin-bottom: 40px;
    text-align: justify;
    line-height: 1.9;
}

.st-2 {
    color: var(--main) !important;
}

.info-text a {
    display: inline-block;
    color: white;
    background: #000000;
    border: 1px solid transparent;
    padding: 12px 30px;
    line-height: 1.4;
    font-size: 14px;
    font-weight: 500;
    border-radius: 30px;
    text-transform: uppercase;
    transition: all .55s ease;

}

.img-placa {
    margin-left: auto;
    margin-right: auto;
    margin-top: 16% !important;
    display: block;
    /* Esto es importante para que el margin:auto funcione */
}

.info-text a:hover {
    background: transparent;
    border: 1px solid white;
    transform: translate(8px);
}

.icons {
    position: absolute;
    top: 70%;
    padding: 0 9%;
    transform: translateY(-50%);
    right: 0px;
}

.icons i {
    display: block;
    margin: 26px 0;
    font-size: 24px;
    color: black;
    transition: all .50s ease;
}

.icons i:hover {
    color: white;
    transform: translateX(8px);
}

.st {
    padding-top: 6%;
}

@media (max-width : 1535px) {
    .navlist a {
        margin-right: 50px;
    }

    header {
        padding: 15px 3%;
        transition: .2s;
    }

    .icons {
        padding: 0 3%;
        transition: .2s;
    }
}

@media (max-width : 1460px) {
    selection {
        padding: 0 12%;
        transition: .2s;
    }

}

@media (max-width : 1340px) {
    .info-img {
        width: 100%;
        height: auto;
    }

    .info-text h1 {
        font-size: 40px;
        margin: 0 0 30px;
    }

}

@media (max-width : 1195px) {
    selection {
        padding: 0 3%;
        transition: .2s;
    }

    .info-text {
        padding-top: 115px;
    }

    .info-text p {
        line-height: 1.8 !important;
    }

    .info-text h1,
    .info-text2 h1 {
        font-size: 32px !important;
        padding: 5px;
    }

    .info-img {
        text-align: center;
    }

    .info-img img {
        width: 560px;
        height: auto;
    }

    .info {
        height: 100%;
        gap: 1rem;
        grid-template-columns: 1fr;
    }
}

@media (max-width : 990px) {


    .info-text p {
        line-height: 1.8 !important;
    }

    .st {
        padding-top: 0px;
    }

    #menu-icon {
        display: block;
    }

    .navlist {
        position: absolute;
        top: -600% !important;
        right: 0;
        width: 100%;
        height: 243px;
        background: rgb(248, 249, 250);
        display: flex;
        align-items: left;
        flex-direction: column;
        padding: 20px 40px;
    }

    .navlist2 {
        position: absolute;
        top: -350%;
        right: 0;
        width: 100%;
        height: 243px;
        background: rgb(248, 249, 250);
        display: flex;
        align-items: left;
        flex-direction: column;
        padding: 20px 40px;
    }

    .navlist a,
    .navlist2 a {
        margin-left: 0;
        display: block;
        margin: 10px 0;

    }

    .navlist.open {
        top: 67 !important;
        transition-duration: 0.5s;
    }

    .logo {
        padding-left: 5%;
    }
}

@media (max-width : 680px) {
    .video-container {
        width: 100%;
        height: 92vh !important;
    }

    p {
        text-align: justify !important;
        font-size: 16px !important;
    }

    .img-placa {
        width: 260px !important;
        margin-top: 3px !important;
    }

    .info-text p {
        line-height: 1.7 !important;
    }

    .info-img {
        width: 100%;
        height: auto;
    }
}

.btn-success {
    background-color: #28B463;
    border: 0;
    border-radius: 40px !important;
}

label {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    line-height: 1;
    color: black;
    margin: 0 0 45px;
}

.form-control {
    background-color: #f8f9f9af !important;
    padding: 7px !important;
    border-radius: 5px !important;
    margin-bottom: 5px !important;
    margin-top: 4px !important;
}



.bg-footer {
    background-color: linear-gradient(to right, var(--main), var(--second)) !important;
    background-repeat: no-repeat;
}

.floating-button {
    bottom: 40px;
    right: 40px;
    position: fixed;
    z-index: 1000;
    font-size: 40px !important;
}

.video-container {
    width: 100%;
    height: 80vh;
    overflow: hidden;
    box-shadow: inset 0px -48px 85px -15px black;
}

.video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.8;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Cambia el valor alpha según lo oscuro que desees */
}
</style>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- SEO OPEN -->
    <title>placas Temporales</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Obtén placas temporales confiables y servicios de seguros en los Estados Unidos. Explora nuestras opciones asequibles y eficientes para asegurar tu vehículo.">
    <meta name="keywords"
        content="placas temporales, placas temporales en línea, smog, seguros, inspecciones de autos, títulos de autos, historial de verificación de smog">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="https://serviplatexpressusa.com">
    <link rel="alternate" hreflang="en" href="https://serviplatexpressusa.com/english">
    <link rel="alternate" hreflang="es" href="https://serviplatexpressusa.com">
    <meta name="title" content="placas temporales">
    <meta name="language" content="Español">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="placas Temporales">
    <meta property="og:locale" content="es">
    <meta property="og:type" content="website">
    <meta property="og:title" content="placas Temporales">
    <meta property="og:description"
        content="placas temporales cerca de mi, te facilitamos el proceso de obtención de placas temporales de manera fácil y rápida.">
    <meta property="og:image" content="https://serviplatexpressusa.com/img/track.png">
    <meta property="og:image:secure_url" content="https://serviplatexpressusa.com/img/track.png">
    <meta property="og:url" content="https://serviplatexpressusa.com/">
    <meta property="og:site_name" content="placas Temporales">
    <meta property="og:type" content="article" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="article:published_time" content="2023-02-16T01:19:34+00:00">
    <meta property="article:modified_time" content="2024-01-10T22:18:53+00:00">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="placas Temporales">
    <meta name="twitter:description" content="¿Necesitas placas temporales para tu vehículo? En nuestra página, te facilitamos el proceso de obtención de placas temporales del DMV de manera fácil y rápida.">
    <meta name="twitter:image" content="https://placastemporalesdmv.com/wp-content/uploads/2023/09/cropped-Sin-titulo-3-1.png">
    <meta name="twitter:label1" content="Escrito por">
    <meta name="twitter:data1" content="serviplatexpressusa.com">
    <meta name="twitter:label2" content="Tiempo de lectura">
    <meta name="twitter:data2" content="3 minutos">
    <link rel="icon" href="./img/logo.png" />
    <link rel="icon" href="https://serviplatexpressusa.com/img/track.png" sizes="32x32">
    <link rel="icon" href="https://serviplatexpressusa.com/img/track.png" sizes="192x192">

    <meta name="google-site-verification" content="oEzchOAbUOTxZwgusyuGkg25Xzptb8XOKkDR2-ObyrY" />
    <!-- SEO CLOSED -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- remixicons link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="js/controls.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
    " rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WRHGX2FHE7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-WRHGX2FHE7');
    </script>
    <script>
    const userLanguage = navigator.language || navigator.userLanguage;
    const currentUrl = window.location.href;

    if (userLanguage.toLowerCase().includes('es') && !currentUrl.includes('index')) {
        window.location.href = 'index'; // Reemplaza 'espanol' con la URL deseada para la versión en español
    } else if (userLanguage.toLowerCase().includes('en') && !currentUrl.includes('english')) {
        window.location.href = 'english'; // Reemplaza 'english' con la URL deseada para la versión en inglés
    }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H80T5PWMPV">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-H80T5PWMPV');
    </script>
</head>

<body>
    <header class="shadow-2 bg-white st-2">
        <a href="#" class="logo">Serviplates Express
            <span style="font-size: 18px;">U</span><span style="font-size: 18px;">S</span><span
                style="font-size: 18px;">A</span></a>
        <ul class="navlist2">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#about">Acerca</a></li>
            <li><a href="#examples">Ejemplos</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <header style="z-index: 100;">
        <ul class="navlist">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#about">Acerca</a></li>
            <li><a href="#examples">Ejemplos</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>
    </header>

    <a href="https://wa.me/+573222863938" target="_blank"
        class="btn btn-success shadow px-4 py-3 px-md-3 py-md-3 shadow  floating-button">
        <i class='bx bxl-whatsapp'></i>
    </a>


    <div class="video-container mb-md-2 position-relative st shadow" id="home">
        <video autoplay loop muted class="position-absolute top-0 left-0">
            <source src="./img/video.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <section>
            <div class="container pt-md-4 pb-8 px-2 position-relative z-index-1">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-7 pt-md-5">
                        <div class="info-text text-light">
                            <h1>placas temporales en los Estados Unidos</h1>
                            <p class="text-white">
                                Experimenta la conveniencia incomparable de ServiPlates Express, tu solución de
                                confianza para placas temporales
                                en los Estados Unidos. Navegar por las carreteras nunca ha sido tan fácil con nuestros
                                servicios sin complicaciones.
                                Ya sea que seas propietario de un vehículo nuevo, estés en proceso de registro de
                                vehículos o simplemente necesites
                                una solución temporal, estamos aquí para ayudarte.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-5 text-center">
                        <div class="info-img py-md-5 pb-8">
                            <img src="img/track.png" class="img-fluid rounded shadow-3 img-placa"
                                alt="placas temporales">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <section class="container-fluid py-md-5" id="about">
        <div class="container px-4 py-5">
            <div class="my-5 info-text2 py-5">
                <div class="row">
                    <div class="col-12 col-md-6" style="text-align: justify;">
                        <h2 class="mb-4">placas Temporales</h2>
                        <h3 class="mb-5 fs-6 fw-normal">Embárcate en una aventura sin problemas con nosotros, la principal autoridad en
                            la emisión de
                            placas temporales en todo Estados Unidos. Con un compromiso inquebrantable, nos dedicamos a
                            servir a comunidades
                            a nivel nacional con servicios transparentes y legalmente sólidos.</h3>
                        <h4 class="fs-6 fw-normal">Como pioneros en la industria, ofrecemos más que simples placas temporales; te brindamos
                            tranquilidad. Confía en
                            nosotros para una experiencia confiable, legal y libre de problemas. Nuestro compromiso va
                            más allá de proporcionar
                            placas temporales; contribuimos activamente a la reducción de la contaminación y promovemos
                            la responsabilidad
                            ambiental.</h4>
                    </div>
                    <div class="col-12 col-md-6 text-end info-img2 mr-5">
                        <div class="px-lg-3 py-4 py-md-2 mx-md-3 text-end ">
                            <img src="https://images.pexels.com/photos/193021/pexels-photo-193021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="img-fluid rounded shadow-3" alt="Company Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid pb-5 bg-light" id="examples">
        <div class="p-md-5 p-3" style="   background-image: url('https://themewagon.github.io/AI-html/img/footer.png') !important;
            background-size: cover !important;">
            <div class="col-12 mb-2 info-text2 py-5 pb-2">
                <h1 class="text-center">Embárcate en un Viaje de Diseños Únicos de placas Temporales</h1>
                <p class="text-center px-5">Descubre un mundo de placas temporales distintivas diseñadas para elevar tu
                    experiencia de
                    conducción. Sumérgete en lo extraordinario mientras fusionamos la innovación y el estilo de manera
                    perfecta.</p>

            </div>
            <div class="container">
                <div class="row gy-4 p-md-4 m-md-2 mt-0">
                    <div class="col-md-3 col-12">
                        <img class="bg-light w-100 h-100 rounded shadow-3"
                            src="https://www.serviplatesllc.com/images/truc1.png" alt="">
                    </div>
                    <div class="col-md-3 col-12">
                        <img class="bg-light w-100 h-100 rounded shadow-3"
                            src="https://www.serviplatesllc.com/images/truc2.png" alt="">
                    </div>
                    <div class="col-md-3 col-12">
                        <img class="bg-light w-100 h-100 rounded shadow-3"
                            src="https://www.serviplatesllc.com/images/truc3.jpeg" alt="">
                    </div>
                    <div class="col-md-3 col-12">
                        <img class="bg-light w-100 h-100 rounded shadow-3"
                            src="https://www.serviplatesllc.com/images/truc1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid pb-5 bg-white" id="plates">
        <div class="p-md-5 p-3">
            <div class="col-12 mb-2 info-text2 py-5 pb-0">
                <h1 class="text-center">Verificaciones de Smog e Inspecciones de Vehículos</h1>
            </div>
            <div class="container left">
                <div class="row mt-0 gx-4 gy-2">
                    <div class="col-md-4 col-12 p-4">
                        <div class="bg-light p-md-5 p-3 rounded shadow-3 h-100 w-100">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-car'></i></p>
                            <p class="text-center fs-4 fw-semibold">Verificaciones de Smog</p>
                            <p class="text-center">Asegúrate de que tu vehículo cumpla con las normas de emisiones
                                mediante nuestras
                                exhaustivas verificaciones de smog. Ofrecemos servicios eficientes para mantener tu
                                automóvil
                                respetuoso con el medio ambiente y en cumplimiento con las regulaciones.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 p-4">
                        <div class="bg-light p-md-5 p-3 rounded shadow-3 h-100 w-100">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-check-shield'></i></p>
                            <p class="text-center fs-4 fw-semibold">Inspecciones de Vehículos</p>
                            <p class="text-center">Asegura la seguridad y funcionalidad de tu vehículo mediante nuestras
                                exhaustivas
                                inspecciones de vehículos. Nuestros inspectores certificados proporcionan evaluaciones
                                detalladas para
                                garantizar la aptitud de tu vehículo para circular.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 p-4">
                        <div class="bg-light p-md-5 p-3 rounded shadow-3 h-100 w-100">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-expand-horizontal'></i></p>
                            <p class="text-center fs-4 fw-semibold">Innovaciones Futuras</p>
                            <p class="text-center">Mantente atento a futuras innovaciones mientras continuamos
                                expandiendo nuestra línea de
                                productos. Nos dedicamos a ofrecerte diseños y soluciones de vanguardia en el mundo de
                                las placas
                                de matrícula.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-info info-text pt-5 pb-2" id="states">
        <div class="py-md-5" style="
            background-image: url('https://themewagon.github.io/AI-html/img/footer.png') !important;
            background-size: cover !important;">
            <h5 class="text-center pt-5 pb-5 text-white mb-3">ESTADOS DONDE EXPEDIMOS pLACAS TEMPORALES</h5>
            <div class="container pb-4 p-0">
                <div class="row p-0">
                    <?php
                        include './php/locations.php';
                        foreach ($estados_usa as $estado) {
                            echo '<div class="col-6 col-md-2 text-white fs-6 pb-3"><i class="bx bx-location-plus"></i>'.$estado['estado'].'</div>';
                        }
                        ?>
                </div>

            </div>

        </div>
    </section>
    <div class="contianer-fluid py-md-5 px-md-5 px-lg-2 bg-light" id="contact">
        <div class="mb-lg-4 py-md-5 mx-lg-2 px-md-2">
            <form id="contactForm" method="POST"
                class="col-md-9 col-lg-6 col-xl-4 col-12 mx-auto bg-white py-5 px-5 rounded shadow-3 py-md-5">
                <h6 class="text-center fw-semibold fs-4">Contact Us</h6>
                <hr>
                <br>
                <div class="">
                    <div class="mb-3">
                        <label for="inputName" class="form-label fw-semibold">Name</label>
                        <input type="text" required class="form-control" id="inputName" name="inputName"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="inputEmail" class="form-label fw-semibold">Email address</label>
                        <input type="email" required class="form-control" id="inputEmail" name="inputEmail"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="inputPhone" class="form-label fw-semibold">Phone</label>
                        <input type="tel" required class="form-control" id="inputPhone" name="inputPhone"
                            aria-describedby="phoneHelp">
                        <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.
                        </div>
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="inputResidence" class="form-label fw-semibold">Residence</label>
                        <select class="form-control form-select" id="inputResidence" required name="inputResidence"
                            aria-describedby="residenceHelp">
                            <?php
                            foreach ($estados_usa as $estado) {
                                echo '<option value="' . $estado['estado'] . '">' . $estado['estado'] . '</option>';
                            }
                            ?>
                        </select>
                        <div id="residenceHelp" class="form-text">Choose your residence state.</div>
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="inputMessage" class="form-label fw-semibold">Message</label>
                        <textarea class="form-control" required id="inputMessage" name="inputMessage"
                            rows="3"></textarea>

                    </div>
                    <br>
                    <hr>
                    <button type="submit" class="btn btn-dark w-100 py-3 my-4">Send Form</button>
            </form>
        </div>
    </div>
    </div>

    <footer class="bg-info m-0 p-0 bg-footer">
        <div class="container text-white p-md-5 p-3 " style="
            background-image: url('https://themewagon.github.io/AI-html/img/footer.png') !important;
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center !important;
            background-size: 100%;">

            <div class="row pt-3">
                <div class="col-12">
                    <p class="fs-4 fw-semibold text-start">Serviplates Express</p>
                    <p style="text-align: justify;">Explora la conveniencia y eficiencia de nuestras placas temporales
                        en los
                        Estados Unidos. En ServiPlates, priorizamos la seguridad y satisfacción de nuestros clientes al
                        proporcionar
                        un proceso sin problemas para obtener placas temporales. Confía en nosotros para hacer que tu
                        viaje sea
                        libre de preocupaciones con nuestras soluciones de placas temporales rápidas, legales y
                        confiables.</p>
                </div>
            </div>

            <div class="row pt-5 mt-3">
                <div class="col-12">
                    <p class="text-start fs-5">© 2023 Todos los derechos reservados. SERVIPLATES Express USA.</p>
                    <p class="text-start p-0 m-0">Términos de servicio | Política de privacidad | Política de
                        tratamiento de datos</p>
                    <p class="text-start p-0 m-0">Todo el contenido y los derechos están reservados por IUTECK SERVICE.
                    </p>
                </div>
            </div>


        </div>
    </footer>



    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>