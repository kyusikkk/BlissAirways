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
        opacity: 90%;
        width: 90rem;
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
                        <img src="assets/vidar-nordli-mathisen-ZYDhBqxJnJ8-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/redd-f-nTBW1cOY1qI-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col pt-6 p-3">
                    <div id="container_top" class="container px-4 text-center">
                        <div class="col-sm-6 col-md-7">     
                            <div class="card text-center">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Book</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Manage</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Check in</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Flight Status</button>
                                            </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-text">.00</span>
                                                 </div>

                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                    <span class="input-group-text">@</span>
                                                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-text">With textarea</span>
                                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                                </div>
                                            </div>



                                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-6 col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>      

        <section id="packages" class="pt-md-5">
            <div class="grid text-center">
                <h2 class="text-center my-2">Top Deals</h2>

                <div class="container mt-3 mb-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                    <img src="assets/adrien-olichon-QRtym77B6xk-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Amsterdam</P>
                                    <p class="card-text h6 text-start">$1,259</P>
                                </div>
                            </div>     
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem">
                                    <img src="assets/charles-postiaux-Q6UehpkBSnQ-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">London</P>
                                    <p class="card-text h6 text-start">$1,159</P>
                                </div>
                            </div>         
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem;">
                                    <img src="assets/matthew-waring-dM_e5u-SM0U-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Athens</P>
                                    <p class="card-text h6 text-start">$1,559</P>
                                </div>
                            </div>         
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                    <img src="assets/adrien-olichon-QRtym77B6xk-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>     
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem">
                                    <img src="assets/charles-postiaux-Q6UehpkBSnQ-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>         
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem;">
                                    <img src="assets/matthew-waring-dM_e5u-SM0U-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>         
                        </div>
                    </div>
                </div>
        </section>

        <div class="container px-4 text-center">
            <div class="col-sm-6 col-md-12">
                
            </div>
            <div class="col-6 col-md-4"></div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
    </body>
</html>