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
    <header>
        <a href="#" class="logo">SERVI PLATES </a>

        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Examples</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon">

        </div>
    </header>
    <section class="info">
        <div class="info-text">
            <h1>Temporary License Plates</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptate, tenetur laudantium illo id
                in, ad sunt ab esse, quisquam sed inventore beatae laboriosam autem dignissimos iure quas ea. Non?
            </p>
            <a href="#">Watch</a>
        </div>

        <div class="info-img">
            <img src="img/track.png" alt="">
        </div>
    </section>
    <section class="container-fluid" id="about">
        <div class="my-5 info-text2">
            <div class="row ">
                <div class="col-12 col-md-4 text-end info-img2">
                    <img src="https://www.serviplatesllc.com/images/banner.png" class="w-50 h-100 " alt="">
                </div>
                <div class="col-12 col-md-6 text-start">
                    <h1 class="mb-4">About Us</h1>
                    <p>We are the main company in charge of issuing temporary plates throughout the US, we have more
                        than 10 years of experience and service for the entire community of the country. With a
                        transparent and reliable legal service.</p>
                    <a href="fw-semibold">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid pb-5" id="plates">
        <div class="p-5">
            <div class="col-12 mb-2 info-text2">
                <h1 class="text-center">Examples Temporary license plates</h1>
            </div>
            <div class="container">
                <div class="row p-4 m-2 mt-0">
                    <div class="col-3">
                        <img class="bg-light w-100 h-100" src="https://www.serviplatesllc.com/images/truc1.png" alt="">
                    </div>
                    <div class="col-3">
                        <img class="bg-light w-100 h-100" src="https://www.serviplatesllc.com/images/truc2.png" alt="">
                    </div>
                    <div class="col-3">
                        <img class="bg-light w-100 h-100" src="https://www.serviplatesllc.com/images/truc3.jpeg" alt="">
                    </div>
                    <div class="col-3">
                        <img class="bg-light w-100 h-100" src="https://www.serviplatesllc.com/images/truc1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-info rounded-10 info-text pt-5 pb-2" id="states">
        <h1 class="text-center pt-5 pb-2">
            STATES WHERE WE ISSUE TEMPORARY PLATES
        </h1>
        <div class="container pb-4">
            <div class="row">
                <?php
            include './php/locations.php';
            foreach ($estados_usa as $estado) {
                echo '<div class="col-2 text-white fs-5 pb-3">'.$estado['estado'].'</div>';
            }
            ?>
            </div>

        </div>

    </section>
    <section id="vision">
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">
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
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">
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
    <section class="contianer-fluid py-5" id="form">
        <div class="pb-5 mb-4">
            <div class="row">
                <div class="col-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.112224213352!2d-72.48746368996581!3d7.918237006177162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e664512e5666415%3A0x82aac6383afa10be!2sPeugeot%20Automarcol%20C%C3%BAcuta!5e0!3m2!1ses-419!2sco!4v1699973708187!5m2!1ses-419!2sco"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-6">
                    <form class="py-3 px-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label">Telefono</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label">Residencia</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 p-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-info m-0 p-0">
        <div class="container info-text p-5 text-center">
            <h1 class="fs-5">© 2023 All Rights Reserved. SERVIPLATES LLC USA.</h1>
        </div>
    </footer>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>
</body>

</html>