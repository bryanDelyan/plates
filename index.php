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
        margin-top: 6px !important;
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
<html lang="en-us">

<head>
    <!-- SEO OPEN -->
    <title>ServiPlates Express USA - Placas Temporales, Smog, Inspecciones y Seguros</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Get reliable temporary plates and insurance services in the United States. Explore our affordable and efficient options for securing your vehicle.">
    <meta name="keywords"
        content="placas temporales, placas temporales en línea, temporary plates, como sacar placas temporales en texas, texas plates usa, plates services, smog, seguros, placas temporales, car inspections, titulos de auto, car titles,smog check history">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="ServiplatexpressUSA">
    <meta property="og:description"
        content="Get reliable temporary plates and insurance services in the United States.">
    <meta property="og:image" content="https://serviplatexpressusa.com/img/track.png">
    <meta property="og:url" content="https://serviplatexpressusa.com/">
    <meta name="title" content="ServiplatexpressUSA">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="ServiplatexpressUSA">
    <meta property="og:type" content="article" />
    <link rel="icon" href="./img/logo.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
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
    <!-- Hotjar Tracking Code for https://serviplatexpressusa.com/ -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3800497,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <header class="shadow-2 bg-white st-2">

        <a href="#" class="logo">Serviplates Express
            <span style="font-size: 18px;">U</span><span style="font-size: 18px;">S</span><span
                style="font-size: 18px;">A</span></a>
        <ul class="navlist2">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#examples">Examples</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <header style="z-index: 100;">
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#examples">Examples</a></li>
            <li><a href="#contact">Contact</a></li>
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
            <div class="container py-md-4 px-3 position-relative z-index-1">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-7 pt-md-5">
                        <div class="info-text text-light">
                            <h1>Discover Temporary License Plates in the USA</h1>
                            <p class="text-white">
                                Experience the unparalleled convenience of ServiPlates Express, your go-to solution for
                                temporary license plates in the USA. Navigating the roads has never been easier with our
                                hassle-free services. Whether you're a new car owner, in the process of vehicle
                                registration, or simply in need of a temporary solution, we've got you covered.
                            </p>


                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-5 text-center">
                        <div class="info-img py-md-5">
                            <img src="img/track.png" class="img-fluid rounded shadow-3 img-placa"
                                alt="Temporary License Plates Image">
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
                        <h1 class="mb-4">Welcome to Our Journey</h1>
                        <p class="mb-5">Embark on a seamless adventure with us – the leading authority in issuing
                            temporary plates across the United States. With unwavering commitment, we dedicate ourselves
                            to serving communities nationwide with transparent and legally sound services.</p>
                        <p>As pioneers in the industry, we offer more than just temporary plates; we bring you peace of
                            mind. Trust us for a reliable, legal, and hassle-free experience. Our commitment extends
                            beyond providing temporary plates – we actively contribute to reducing smog and promoting
                            environmental responsibility.</p>
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
                <h1 class="text-center">Embark on a Journey of Unique License Plate Designs</h1>
                <p class="text-center px-5">Uncover a world of distinctive temporary license plates crafted to elevate
                    your
                    driving experience. Dive into the extraordinary as we blend innovation and style seamlessly. </p>
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
                <h1 class="text-center">Smog Checks and Auto Inspections</h1>
            </div>
            <div class="container left">
                <div class="row mt-0 gx-4 gy-2">
                    <div class="col-md-4 col-12 p-4">
                        <div class="bg-light p-md-5 p-3 rounded shadow-3 h-100 w-100">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-car'></i></p>
                            <p class="text-center fs-4 fw-semibold">Smog Checks</p>
                            <p class="text-center">Ensure your vehicle meets emissions standards with our comprehensive
                                smog checks. We provide efficient services to keep your car environmentally friendly and
                                compliant with regulations.</p>
                        </div>
                    </div>
                    <div class="col-md-4  col-12 p-4">
                        <div class="bg-light p-md-5 p-3 rounded shadow-3 h-100 w-100">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-check-shield'></i></p>
                            <p class="text-center fs-4 fw-semibold">Auto Inspections</p>
                            <p class="text-center">Ensure the safety and functionality of your vehicle through our
                                thorough auto inspections. Our certified inspectors provide detailed assessments to
                                guarantee your vehicle's roadworthiness.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 p-4">
                        <div class="bg-light p-md-5 p-3 rounded shadow-3 h-100 w-100">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-expand-horizontal'></i></p>
                            <p class="text-center fs-4 fw-semibold">Future Innovations</p>
                            <p class="text-center">Stay tuned for future innovations as we continue to expand our
                                product line. We are dedicated to bringing you cutting-edge designs and solutions in the
                                world of license plates.</p>
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

            <h1 class="text-center pt-5 pb-2">
                STATES WHERE WE ISSUE TEMPORARY PLATES
            </h1>
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
    <section id="vision" class="py-md-5 bg-blue ">
        <div class="container py-5 right">
            <div class="row pt-5 gy-3">
                <div class="col-md-6 col-12 py-5">
                    <div class="row">
                        <div class="col-md-3 col-12 text-center">
                            <svg class="w-50 h-50 mx-auto mt-4 text-gray-800 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div class="col-8">
                            <h1 class="text-md-start mt-4 text-center">Our Vision</h1>
                        </div>
                    </div>
                    <div class="p-4">
                        <p style="text-align: justify !important;">At ServiPlates, we envision a future where every road
                            journey begins with confidence and
                            security. Our commitment is to redefine safety standards by providing innovative and
                            efficient solutions for issuing temporary plates. We strive to be pioneers in reducing
                            risks, ensuring the well-being of our clients through the seamless and legal acquisition of
                            temporary plates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 py-5">
                    <div class="row">
                        <div class="col-md-3 col-12 text-center">
                            <svg class="w-50 h-50 mx-auto mt-4 text-gray-800 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div class="col-8">
                            <h1 class="text-md-start mt-4 text-center">Our Mission</h1>
                        </div>
                    </div>
                    <div class="p-4" style="text-align: justify !important;">
                        <p>Driven by a passion for safety, our mission at ServiPlates is to empower our clients with the
                            means to navigate the roads securely. We are dedicated to minimizing risks by facilitating
                            the swift and legal issuance of temporary plates. Our mission is rooted in ensuring the
                            safety and satisfaction of our clients, providing a foundation for worry-free journeys and
                            promoting responsible road practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="contianer-fluid py-md-5 px-md-5 px-lg-2 bg-light" id="contact">
        <div class="mb-lg-4 py-md-5 mx-lg-2 px-md-2">
            <form id="contactForm" method="POST"
                class="col-md-9 col-lg-6 col-xl-4 col-12 mx-auto bg-white py-5 px-5 rounded shadow-3 py-md-5">
                <h1 class="text-center fw-semibold fs-3">Contact Us</h1>
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
                    <p style="text-align: justify;">Explore the convenience and efficiency of our temporary license
                        plates in
                        the United States. At ServiPlates, we prioritize the safety and satisfaction of our clients by
                        providing a seamless process for obtaining temporary plates. Trust us to make your journey
                        worry-free with our quick, legal, and reliable temporary plate solutions.</p>
                </div>
            </div>


            <div class="row pt-5 mt-3">
                <div class="col-12">
                    <p class="text-start fs-5">© 2023 All Rights Reserved. SERVIPLATES Express USA.</p>
                    <p class="text-start p-0 m-0">Terms of Service | Privacy Policy | Data Treatment Policy</p>
                    <p class="text-start p-0 m-0">All content and rights are reserved by IUTECK SERVICE.</p>
                </div>
            </div>

        </div>
    </footer>



    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>