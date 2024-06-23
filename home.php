<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
    <body>
    <style>
    body{
        background-image: url('');
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height:100vh;
    }

    .carousel-inner {
                height:32rem;
            }
    
    #container_top  {
        margin-top:6rem;
    }

   </style>
        <div id="navigation">
            <nav class="navbar navbar-expand-md bg-body">
                <div class="container-fluid">
                    <a class="navbar-logo">Logo</a>
                    <div id="navcol-1" class="collapse navbar-collapse fw-semibold text-center">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" href="#">Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" href="#">Manage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" href="#">Destinations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" href="#">Dashboard</a>
                            </li>
                        </ul>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link disabled fw-semibold" href="#">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled fw-semibold" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/nastya-dulhiier-3Ze88tZX-p0-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/adrien-olichon-QRtym77B6xk-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/bao-menglong--FhoJYnw-cg-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col pt-6 p-3">
                    <div id="container_top" class="container px-4 text-center">
                        <div class="col-sm-6 col-md-7">     
                            <div class="card text-center">
                                    <div class="card text-center">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" aria-current="true" href="#">Book</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Check in</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Flight status</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-6 col-md-4"></div>
                    </div>
                </div>
                </div>
            </div>      

            <div class="grid text-center">
                <div class="g-col-6 g-col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="g-col-6 g-col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="g-col-6 g-col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container px-4 text-center">
            <div class="col-sm-6 col-md-12">
                <div class="card text-center">
                        <div class="card text-center">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="true" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-6 col-md-4">.col-6 .col-md-4</div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
    </body>
</html>