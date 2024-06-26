<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="assets/plane.png">
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

                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col">
                                <div id="container_top" class="container px-4 text-center">
                                    <div class="col-sm-6 col-md-7">     
                                        <div class="card text-center ">
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
                                                        <div class="row g-2 mt-2">
                                                            <div class="col-md">
                                                                <div class="form-floating">
                                                                <select class="form-select" id="floatingSelectGrid">
                                                                    <option value="1">Round trip</option>
                                                                    <option value="2">One Way</option>
                                                                    <option value="3">Multi City</option>
                                                                </select>
                                                                <label for="floatingSelectGrid">Itinerary</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="form-floating">
                                                                <select class="form-select" id="floatingSelectGrid">
                                                                    <option value="1">Economy</option>
                                                                    <option value="2">Business</option>
                                                                    <option value="3">First</option>
                                                                </select>
                                                                <label for="floatingSelectGrid">Cabin Classes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-2 mt-1 mb-2">
                                                            <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                                                                        <label for="floatingInputGrid">Fying From</label>
                                                                    </div>
                                                            </div>   
                                                            <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                                                                        <label for="floatingInputGrid">Fying To</label>
                                                                    </div>
                                                            </div>       
                                                        </div>   
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <p class="card-text h4 text-start">Amsterdam - $1,259</P>
                                    <p class="card-text text-start">Fly to Amsterdam: Where every journey lands in a masterpiece.</p>
                                </div>
                            </div>     
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem">
                                    <img src="assets/charles-postiaux-Q6UehpkBSnQ-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">London - $1,169</P>
                                    <p class="card-text text-start">London awaits: Your gateway to timeless charm and modern wonders.</p>
                                </div>
                            </div>         
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem;">
                                    <img src="assets/matthew-waring-dM_e5u-SM0U-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Athens - $1,559</P>
                                    <p class="card-text text-start">Soar to the cradle of civilization and uncover ancient wonders.</p>
                                </div>
                            </div>         
                        </div>
                    </div>
                </div>
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                    <img src="assets/artem-beliaikin-1K8pWXiRyIA-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Moscow - $2,459</P>
                                    <p class="card-text text-start">Elevate your journey to the heart of Russia's grand heritage</p>
                                </div>
                            </div>     
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem">
                                    <img src="assets/manson-yim-4vf1KEkD7Gc-unsplash.jpg" style="height: 16.7rem" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Hong Kong - $1,200</P>
                                    <p class="card-text text-start">Where East meets innovation and tradition amidst a skyline of dreams.</p>
                                </div>
                            </div>         
                        </div>
                        <div class="col-4">
                        <div class="card" style="width: 25rem;">
                                    <img src="assets/dan-freeman-7Zb7kUyQg1E-unsplash.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Sydney - $1,999</P>
                                    <p class="card-text text-start">Sydney: Where adventure meets the horizon in every flight.</p>
                                </div>
                            </div>         
                        </div>
                    </div>
                </div>
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-7 ">
                            <div class="card mb-3" style="max-width: 44rem;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="assets/anthony-delanoix-Q0-fOL2nqZc-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">Unlock benefits with our PARIS2024 offer</h5>
                                            <p class="card-text text-start">Sign up and save up to 10% on Economy and up to 5% on Business tickets.  </p>
                                            <p class="card-text text-start">Valid for new bookings from 1 June 2023 to 30 June 2024, for travel until 30 June 2024.  </p>
                                            <a href="#" class="btn btn-outline-primary">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 44rem;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="assets/christoph-schulz-7tb-b37yHx4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">Free Abu Dhabi stopover</h5>
                                            <p class="card-text text-start">Break up a long flight with a free stopover in Abu Dhabi. Turn one holiday into two and stay for free for up to two nights at your choice of hotel in the bustling capital of the UAE. </p>
                                            <a href="#" class="btn btn-outline-primary">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="card" style="width: 32rem">
                                <img src="assets/alexa-west-OOTEpsO2eV0-unsplash.jpg" style="height: 45rem" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title text-start text-white fw-bold">Island Deals</h5>
                                    <p class="card-text text-start text-white">Unwind in paradise with our island getaways—where sun, sand, and serenity await at unbeatable prices!</p>
                                </div>
                            </div>
                        </div>     
                    </div> 
                </div>
                <div class="container mb-5">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Bliss Airaways Lounge
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <strong>Lounges at Charles de Gaulle Airport </strong> Search our airport lounges around the world – the perfect place to switch off before you take off. Help yourself to complimentary food and drinks, and rest, work or play before your flight.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Upgrades and extras
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>Extra legroom, extra space or just extra easy?</strong> Whatever’s important to you when you travel, we’ve got a choice of extras to make flying with us even more comfortable and convenient.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Wi-Fi on board: Free chat and unlimited data
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>Connect to Wi-Fi on board</strong> Keep in touch with family and friends while you fly, work from your seat or surf on social media. All Bliss Guest members receive access to a free Chat package for the duration of the flight. If you’re travelling in First or are an Bliss Guest Platinum member, you’ll receive complimentary Wi-Fi access on board. Bliss Guest Gold members will receive a 25% discount on retail packages
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <div class="container">
            <footer class="py-5">
                <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Detination and flights</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Book flights</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Destinations</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">International flights</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Discover Europe</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Fare finder</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>About Bliss Airways</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Corporate profile</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Careers</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Our sponsorships</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Ethics and compliance</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sustainability</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Useful links</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">All extras and upgrades</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Baggage</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Payment Options</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Our Mobile Apps</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Tax refund</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    </form>
                </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2024 Bliss Airways Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
                </div>
            </footer>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
    </body>
</html>