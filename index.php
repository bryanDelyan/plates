<style>
/* 

BLUE 
0f98f8
2d97e2

GREEN 
#229954
#27AE60
*/
:root {
    --main: #117A65;
    --second: #27AE60;
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
    padding: 25px 9%;
}

.logo {
    font-size: 30px;
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
    color: black;
    margin-left: 60px;
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: 600;
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
    padding-top: 15vh !important;
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
    line-height: 1.9;
    text-align: justify;
    margin-bottom: 40px;

}

.st-2 {
    color: var(--main) !important;
}

.info-text a {
    display: inline-block;
    color: white;
    background: #000000;
    /*o tranparent */
    border: 1px solid transparent;
    padding: 12px 30px;
    line-height: 1.4;
    font-size: 14px;
    font-weight: 500;
    border-radius: 30px;
    text-transform: uppercase;
    transition: all .55s ease;

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
    padding-top: 18vh;
}

@media (max-width : 1535px) {
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

    .info-text h1,
    .info-text2 h1 {
        font-size: 34px !important;
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
        top: -350% !important;
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
        top: 75 !important;
        transition-duration: 0.5s;
    }

    .logo {
        padding-left: 5%;
    }
}

@media (max-width : 680px) {
    .info-img {
        width: 100%;
        height: auto;
    }
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
    right: 50px;
    position: fixed;
    z-index: 1000;
}



</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css link -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Boxicons link -->
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
    <title>Plates</title>

</head>

<body>
    <header class="shadow-2 bg-white st-2">

        <a href="#" class="logo">SERVI PLATES</a>
        <ul class="navlist2">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#examples">Examples</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <header style="z-index: 100;">
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#examples">Examples</a></li>
        </ul>
    </header>
    <a href="https://wa.me/+573222863938" target="_blank" class="btn btn-success rounded-fill fs-2 btn-lg floating-button">
        <i class='bx bxl-whatsapp'></i>
    </a>
    <section class="pb-5 bg-info st" id="home">
        <div class="container py-4 px-3" style="   background-image: url('https://themewagon.github.io/AI-html/img/footer.png') !important;
            background-size: cover !important;">
            <div class="row">
                <div class="col-md-6 col-12 px-md-3">
                    <div class="info-text">
                        <h1>Temporary License Plates</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptate, tenetur
                            laudantium
                            illo id
                            in, ad sunt ab esse, quisquam sed inventore beatae laboriosam autem dignissimos iure quas
                            ea.
                            Non?
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-12 p-md-3 text-center">
                    <div class="info-img py-md-5">
                        <img src="img/track.png" class="img-fluid rounded shadow-3" alt="">
                    </div>
                </div>
            </div>
        </div>



    </section>
    <section class="container-fluid py-5" id="about">
        <div class="container px-4 py-5">
            <div class="my-5 info-text2 py-5">
                <div class="row">
                    <div class="col-12 col-md-6 text-start ">
                        <h1 class="mb-4">About Us</h1>
                        <p>We are the main company in charge of issuing temporary plates throughout the US, we have
                            more
                            than 10 years of experience and service for the entire community of the country. With a
                            transparent and reliable legal service.</p>
                        <p>We are the main company in charge of issuing temporary plates throughout the US, we have
                            more
                            than 10 years of experience and service for the entire community of the country. With a
                            transparent and reliable legal service.</p>

                    </div>
                    <div class="col-12 col-md-6 text-end info-img2 p-3">
                        <img src="https://s7d2.scene7.com/is/image/TWCNews/es_forged_temp_licenseplatespk117085059920"
                            class="img-fluid rounded shadow-3" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid pb-5 bg-light" id="examples">
        <div class="p-5" style="   background-image: url('https://themewagon.github.io/AI-html/img/footer.png') !important;
            background-size: cover !important;">
            <div class="col-12 mb-2 info-text2 py-5 pb-2">
                <h1 class="text-center">Examples Temporary license plates</h1>
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
        <div class="p-5">
            <div class="col-12 mb-2 info-text2 py-5 pb-2">
                <h1 class="text-center">Generation and marketing of the product</h1>
            </div>
            <div class="container">
                <div class="row mt-0 gx-4 gy-2">
                    <div class="col-md-4 col-lg-3 col-12 p-4">
                        <div class="bg-light p-5 rounded shadow-3">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-expand-horizontal'></i></p>
                            <p class="text-center fs-4">100 Plates sold</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 p-4">
                        <div class="bg-light p-5 rounded shadow-3">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-expand-horizontal'></i></p>
                            <p class="text-center fs-4">100 Plates sold</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 p-4">
                        <div class="bg-light p-5 rounded shadow-3">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-expand-horizontal'></i></p>
                            <p class="text-center fs-4">100 Plates sold</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 p-4">
                        <div class="bg-light p-5 rounded shadow-3">
                            <p class="text-center fw-semibold fs-4"><i class='bx bx-expand-horizontal'></i></p>
                            <p class="text-center fs-4">100 Plates sold</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-info info-text pt-5 pb-2" id="states">
        <div style="
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
                            echo '<div class="col-6 col-md-2 text-white fs-6 pb-3">'.$estado['estado'].'</div>';
                        }
                        ?>
                </div>

            </div>

        </div>
    </section>
    <section id="vision" class="py-md-5 bg-blue d-none">
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-md-6 col-12 ">
                    <div class="row">
                        <div class="col-md-3 col-12 text-center">
                            <img src="https://www.serviplatesllc.com/images/why1.png" class="w-75" alt="">
                        </div>
                        <div class="col-8">
                            <h1 class="text-start mt-4">Our Vission</h1>
                        </div>
                    </div>
                    <div class="p-4">
                        <p>For our company, the most important thing is the safety of our clients, that is why our most
                            important goal is to reduce risk and issue temporary plates easily, quickly and legally.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 ">
                    <div class="row">
                        <div class="col-md-3 col-12 text-center">
                            <img src="https://www.serviplatesllc.com/images/why1.png" class="w-75" alt="">
                        </div>
                        <div class="col-8">
                            <h1 class="text-start mt-4">Our Vission</h1>
                        </div>
                    </div>
                    <div class="p-4">
                        <p>For our company, the most important thing is the safety of our clients, that is why our most
                            important goal is to reduce risk and issue temporary plates easily, quickly and legally.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contianer-fluid py-md-5 px-md-5 bg-light" id="contact">
        <div class="mb-lg-4 py-lg-5 mx-lg-5 px-md-5 ">
            <form class="col-md-9 col-lg-6 col-12 mx-auto bg-white py-5 px-5 rounded shadow-3">
                <div class="mb-3">
                    <h1 class="text-center fw-semibold fs-3 mb-5">Contact Us</h1>
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Telefono</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Residencia</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <button type="submit" class="btn btn-dark w-100 py-3 my-4">Submit</button>
            </form>

        </div>
    </div>
    <footer class="bg-info m-0 p-0 bg-2">
        <div class="container text-white p-5 " style="
            background-image: url('https://themewagon.github.io/AI-html/img/footer.png') !important;
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center !important;
            background-size: 100%;">

            <div class="row pt-3">
                <div class="col-md-4 col-12">
                    <p class="fs-4 fw-semibold text-start">ServiPlates</p>
                    <p class="text-justify">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu
                        diam amet diam eteos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit.
                        Sanctus clita duojusto et tempor</p>
                </div>
                <div class="col-md-4 col-12 text-md-center text-start">
                    <p class="fw-semibold">Title Content</p>
                    <p><i class='bx bx-current-location'></i> Element</p>
                    <p><i class='bx bx-current-location'></i> Element</p>
                    <p><i class='bx bx-current-location'></i> Element</p>
                </div>
                <div class="col-md-4 col-12 text-md-center text-start">
                    <p class="fw-semibold">Title Content</p>
                    <p><i class='bx bx-current-location'></i> Element</p>
                    <p><i class='bx bx-current-location'></i> Element</p>
                    <p><i class='bx bx-current-location'></i> Element</p>
                </div>
            </div>

            <h1 class="fs-5 pt-5 mt-3 text-start">© 2023 All Rights Reserved. SERVIPLATES LLC USA.</h1>


        </div>
    </footer>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>
</body>

</html>