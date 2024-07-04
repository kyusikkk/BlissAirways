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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
        body {
            background: #f5f5f5;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #141C24;
        }
        .navbar-logo {
            font-size: 1.5em;
            color: #fff;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .logo{
            height: 60px;
            cursor: pointer;
            margin-left: 10px;
        }
 
    </style>
    <body>
    <div id="navigation">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <a href="home.php"><img class="logo" src="assets/final.png" ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcol-1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navcol-1" class="collapse navbar-collapse fw-semibold text-center">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" href="book.php">Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" href="dashboard.php">Dashboard</a>
                        </li>
                    </ul>
                    <ul class="nav justify-content-end">
                        <?php
                            session_start();
                            if (isset($_SESSION['user_id'])) {
   
                                echo '<li class="nav-item">
                                        <a class="nav-link fw-semibold" href="logout.php" style="color: white;">Logout</a>
                                      </li>';
                            } else {
                
                                echo '<li class="nav-item">
                                        <a class="nav-link fw-semibold" href="login.php" style="color: white;">Login</a>
                                      </li>';
                            }
                        ?>
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

                    <div class="container text-center style">
                        <div class="row align-items-start">
                            <div class="col">
                                <div id="container_top" class="container px-4 text-center">
                                    <div class="col-sm-6 col-md-7">     
                                        <div class="card text-center " style="height:22rem">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Book</button>
                                                </li>
                                
                                                </ul>

                                                <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                <form id="bookingForm">
                                                    <div class="row g-2 mt-2">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="itinerary">
                                                                    <option value="Round trip">Round trip</option>
                                                                    <option value="One Way">One Way</option>
                                                                    <option value="Multi City">Multi City</option>
                                                                </select>
                                                                <label for="itinerary">Itinerary</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="cabinClass">
                                                                    <option value="Economy">Economy</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="First">First</option>
                                                                </select>
                                                                <label for="cabinClass">Cabin Classes</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2 mt-2">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="flyingFrom" name="flyingFrom">
                                                                <option value="" selected>Select destination</option>
                                                                <option value="Amsterdam, AMS">Amsterdam, AMS</option>
                                                                <option value="London, LHR">London, LHR</option>
                                                                <option value="Athens, ATH">Athens, ATH</option>
                                                                <option value="Hong Kong, HKG">Hong Kong, HKG</option>
                                                                <option value="Moscow, SVO">Moscow, SVO</option>
                                                                <option value="Sydney, SYD">Sydney, SYD</option>
                                                                <option value="Paris, CDG">Paris, CDG</option>  
                                                                <option value="Abu Dhabi, AUH">Abu Dhabi, AUH</option>
                                                                <option value="New York, JFK">New York, JFK</option>
                                                                <option value="Manila, MNL">Manila, MNL</option>
                         
                                                                </select>
                                                                <label for="flyingFrom">Flying from</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="flyingTo" name="flyingTo">
                                                                    <option value="" selected>Select destination</option>
                                                                    <option value="Amsterdam, AMS">Amsterdam, AMS</option>
                                                                    <option value="London, LHR">London, LHR</option>
                                                                    <option value="Athens, ATH">Athens, ATH</option>
                                                                    <option value="Hong Kong, HKG">Hong Kong, HKG</option>
                                                                    <option value="Moscow, SVO">Moscow, SVO</option>
                                                                    <option value="Sydney, SYD">Sydney, SYD</option>
                                                                    <option value="Paris, CDG">Paris, CDG</option>  
                                                                    <option value="Abu Dhabi, AUH">Abu Dhabi, AUH</option>
                                                                    <option value="New York, JFK">New York, JFK</option>
                                                                    <option value="Manila, MNL">Manila, MNL</option>
                                                                </select>
                                                                <label for="flyingTo">Flying to</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2 mt-2">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <input type="date" class="form-control" id="departureDate">
                                                                <label for="departureDate">Departure Date</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <input type="date" class="form-control" id="returnDate">
                                                                <label for="returnDate">Return Date</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 mt-2">
                                                        <button class="btn btn-primary" type="button" id="bookButton" style="border: none; background-color: #141C24;">Book Now</button>
                                                    </div>
                                                </form>
                                            </div>
                                                <div class="tab-pane fade" id="manage-tab-pane" role="tabpanel" aria-labelledby="manage-tab" tabindex="0" style="height:20rem"></div>
                                                <div class="tab-pane fade" id="checkin-tab-pane" role="tabpanel" aria-labelledby="checkin-tab" tabindex="0"></div>
                                                <div class="tab-pane fade" id="flighstatus-tab-pane" role="tabpanel" aria-labelledby="flighstatus-tab" tabindex="0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
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
                            <div class="card" style="border: none; width: 25rem;">
                                    <a href="dashboard.php"><img src="assets/adrien-olichon-QRtym77B6xk-unsplash.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Amsterdam - $1,259</P>
                                    <p class="card-text text-start">Fly to Amsterdam: Where every journey lands in a masterpiece.</p>
                                </div>
                            </div>     
                        </div>
                        <div class="col-4">
                        <div class="card" style="border: none; width: 25rem">
                        <a href="dashboard.php"><img src="assets/charles-postiaux-Q6UehpkBSnQ-unsplash.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <p class="card-text h4 text-start">London - $1,169</P>
                                    <p class="card-text text-start">London awaits: Your gateway to timeless charm and modern wonders.</p>
                                </div>
                            </div>         
                        </div>
                        <div class="col-4">
                        <div class="card" style="border: none; width: 25rem;">
                        <a href="dashboard.php"><img src="assets/matthew-waring-dM_e5u-SM0U-unsplash.jpg" class="card-img-top" alt="..."></a>
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
                            <div class="card" style="border: none; width: 25rem;">
                            <a href="dashboard.php"><img src="assets/artem-beliaikin-1K8pWXiRyIA-unsplash.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Moscow - $2,459</P>
                                    <p class="card-text text-start">Elevate your journey to the heart of Russia's grand heritage</p>
                                </div>
                            </div>     
                        </div>
                        <div class="col-4">
                        <div class="card" style="border: none; width: 25rem">
                        <a href="dashboard.php"><img src="assets/manson-yim-4vf1KEkD7Gc-unsplash.jpg" style="height: 16.7rem" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <p class="card-text h4 text-start">Hong Kong - $1,200</P>
                                    <p class="card-text text-start">Where East meets innovation and tradition amidst a skyline of dreams.</p>
                                </div>
                            </div>         
                        </div>
                        <div class="col-4">
                        <div class="card" style="border: none; width: 25rem;">
                        <a href="dashboard.php"><img src="assets/dan-freeman-7Zb7kUyQg1E-unsplash.jpg" class="card-img-top" alt="..."></a>
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
                            <div class="card mb-3" style="border: none; max-width: 44rem;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <a href="dashboard.php"><img src="assets/anthony-delanoix-Q0-fOL2nqZc-unsplash.jpg" class="img-fluid rounded-start" alt="..."></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">Unlock benefits with our PARIS2024 offer</h5>
                                            <p class="card-text text-start">Sign up and save up to 10% on Economy and up to 5% on Business tickets.  </p>
                                            <p class="card-text text-start">Valid for new bookings from 1 June 2023 to 30 June 2024, for travel until 30 June 2024.  </p>
                                            <a href="#" class="btn btn-outline-primary" style="color:white; border: none; background-color: #141C24;">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="border: none; max-width: 44rem;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <a href="dashboard.php"><img src="assets/christoph-schulz-7tb-b37yHx4-unsplash.jpg" class="img-fluid rounded-start" alt="..."></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">Free Abu Dhabi stopover</h5>
                                            <p class="card-text text-start">Break up a long flight with a free stopover in Abu Dhabi. Turn one holiday into two and stay for free for up to two nights at your choice of hotel in the bustling capital of the UAE. </p>
                                            <a href="#" class="btn btn-outline-primary" style="color:white; border: none; background-color: #141C24;">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="card" style="border: none; width: 32rem">
                            <a href="dashboard.php"><img src="assets/alexa-west-OOTEpsO2eV0-unsplash.jpg" style="height: 45rem" class="card-img" alt="..."></a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bookButton').click(function() {
                let itinerary = $('#itinerary').val();
                let cabinClass = $('#cabinClass').val();
                let flyingFrom = $('#flyingFrom').val();
                let flyingTo = $('#flyingTo').val();
                let departureDate = $('#departureDate').val();
                let returnDate = $('#returnDate').val();

                localStorage.setItem('itinerary', itinerary);
                localStorage.setItem('cabinClass', cabinClass);
                localStorage.setItem('flyingFrom', flyingFrom);
                localStorage.setItem('flyingTo', flyingTo);
                localStorage.setItem('departureDate', departureDate);
                localStorage.setItem('returnDate', returnDate);

                window.location.href = 'book.php';
            });
        });
    </script>
    </body>
</html>