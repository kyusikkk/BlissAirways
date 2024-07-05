<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $stmt = $conn->prepare("INSERT INTO booking (firstname, lastname, title, email, mobilenum, nationality, passNum, passExp, payment, flyingFrom, flyingTo, outboundDate, returnDate, adults, children, infants, itenary, cabinClass, users_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssssssi", $firstname, $lastname, $title, $email, $mobilenum, $nationality, $passNum, $passExp, $payment, $flyingFrom, $flyingTo, $outboundDate, $returnDate, $adults, $children, $infants, $itenary, $cabinClass, $user_id);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $mobilenum = $_POST['mobilenum'];
    $nationality = $_POST['nationality'];
    $passNum = $_POST['passNum'];
    $passExp = $_POST['passExp'];
    $payment = $_POST['payment'];
    $flyingFrom = $_POST['flyingFrom'];
    $flyingTo = $_POST['flyingTo'];
    $outboundDate = $_POST['outboundDate'];
    $returnDate = $_POST['returnDate'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $infants = $_POST['infants'];
    $itenary = $_POST['itenary'];
    $cabinClass = $_POST['cabinClass'];
    $user_id = $_SESSION["user_id"];

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliss Airways | Book</title>
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="book.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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

<div class="main-container">    
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                    <form  method="POST">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h3 class="fw-normal mb-5" style="color: #020617;">Personal Information</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplev2" name="firstname" class="form-control form-control-lg" autocomplete="off" required/>
                                                <label class="form-label" for="form3Examplev2">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplev3" name="lastname" class="form-control form-control-lg" autocomplete="off" required/>
                                                <label class="form-label" for="form3Examplev3">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <select data-mdb-select-init class="form-select" name="title" required>
                                            <option value="1">Title</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Ms">Ms</option>
                                        </select>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <div data-mdb-input-init class="form-outline" >
                                            <input type="text" id="form3Examplev4" name="email" class="form-control form-control-lg" autocomplete="off" required/>
                                            <label class="form-label" for="form3Examplev4">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
                                            <div data-mdb-input-init class="form-outline" >
                                                <input type="text" id="form3Examplev5" name="mobilenum" class="form-control form-control-lg" autocomplete="off" name="mobile-num" required/>
                                                <label class="form-label" for="form3Examplev5">Mobile Number</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplev3" name="nationality" class="form-control form-control-lg" autocomplete="off" required/>
                                                <label class="form-label" for="form3Examplev3">Nationality</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplev5" name="passNum" class="form-control form-control-lg" name="mobile-num" autocomplete="off" required/>
                                                <label class="form-label" for="form3Examplev5">Passport Number</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="date" id="passport" name="passExp" class="form-control form-control-lg" autocomplete="off" required/>
                                                <label class="form-label" for="outboundDate">Passport Expiry</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                                <select class="form-select" id="payment" autocomplete="off" name="payment" required>
                                                    <option value="" selected="">Select Payment Method</option>
                                                    <option value="Credit Card">Credit Card </option>
                                                    <option value="Debit Card">Debit Card</option>
                                                    <option value="PayPal">PayPal</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                </select>
                                                <label for="flyingTo">Payment Method</label>
                                            </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 bg-indigo text-white">
                                <div class="p-5">
                                    <h3 class="fw-normal mb-5">Flight Details</h3>
                                    <div class="mb-4 pb-2">
                    
                                        <div data-mdb-input-init class="form-outline form-white">
                                            <div class="form-floating">
                                                <select class="form-select" id="flyingFrom" name="flyingFrom" autocomplete="off" required>
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
                                                <label for="flyingFrom">Flying From</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <div data-mdb-input-init class="form-outline form-white">
                                            <div class="form-floating">
                                                <select class="form-select" id="flyingTo" name="flyingTo" autocomplete="off" required>
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
                                                <label for="flyingTo">Flying To</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <div data-mdb-input-init class="form-outline form-white">
                                            <input type="date" id="departureDate" name="outboundDate" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="outboundDate">Outbound Date</label>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <div data-mdb-input-init class="form-outline form-white">
                                            <input type="date" id="returnDate" name="returnDate" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="returnDate">Return Date</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="number" id="adults" name="adults" class="form-control form-control-lg" min="1" max="9" required/>
                                                <label class="form-label" for="adults">Adults</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="number" id="children" name="children" class="form-control form-control-lg" min="0" max="9"/>
                                                <label class="form-label" for="children">Children</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="number" id="infants" name="infants" class="form-control form-control-lg" min="0" max="9"/>
                                                <label class="form-label" for="infants">Infants</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row g-2 ">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="itinerary" name="itenary">
                                                                    <option value="Round trip">Round trip</option>
                                                                    <option value="One Way">One Way</option>
                                                                    <option value="Multi City">Multi City</option>
                                                                </select>
                                                                <label for="itinerary">Itinerary</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="cabinClass" name="cabinClass">
                                                                    <option value="Economy">Economy</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="First">First</option>
                                                                </select>
                                                                <label for="cabinClass">Cabin Classes</label>
                                                            </div>
                                                        </div>
                                                    </div>                         
                                        <div class="mb-4">
                                        <div class="form-check d-flex justify-content-start mt-3 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required/>
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                                            </label>
                                        </div>
                                        <input class="btn btn-light btn-lg" type="submit" value="Book Flight">
                                        <button class="btn btn-light btn-lg" type="button" onclick="calculateCost()">Check Total Cost</button>
                                    </div>
                                    <div id="totalCost" class="text-white"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     document.addEventListener('DOMContentLoaded', (event) => {

        const itinerary = localStorage.getItem('itinerary');
        const cabinClass = localStorage.getItem('cabinClass');
        const flyingFrom = localStorage.getItem('flyingFrom');
        const flyingTo = localStorage.getItem('flyingTo');
        const departureDate = localStorage.getItem('departureDate');
        const returnDate = localStorage.getItem('returnDate');


        document.getElementById('itinerary').value = itinerary;
        document.getElementById('cabinClass').value = cabinClass;
        document.getElementById('flyingFrom').value = flyingFrom;
        document.getElementById('flyingTo').value = flyingTo;
        document.getElementById('departureDate').value = departureDate;
        document.getElementById('returnDate').value = returnDate;
        });
    const routeCosts = {
    'Amsterdam, AMS-London, LHR': 200,
    'Amsterdam, AMS-Athens, ATH': 250,
    'Amsterdam, AMS-Hong Kong, HKG': 500,
    'Amsterdam, AMS-Moscow, SVO': 300,
    'Amsterdam, AMS-Sydney, SYD': 700,
    'Amsterdam, AMS-Paris, CDG': 150,
    'Amsterdam, AMS-Abu Dhabi, AUH': 450,
    'Amsterdam, AMS-New York, JFK': 600,
    'Amsterdam, AMS-Manila, MNL': 550,
    'London, LHR-Amsterdam, AMS': 200,
    'London, LHR-Athens, ATH': 250,
    'London, LHR-Hong Kong, HKG': 450,
    'London, LHR-Moscow, SVO': 300,
    'London, LHR-Sydney, SYD': 550,
    'London, LHR-Paris, CDG': 100,
    'London, LHR-Abu Dhabi, AUH': 400,
    'London, LHR-New York, JFK': 500,
    'London, LHR-Manila, MNL': 600,
    'Athens, ATH-Amsterdam, AMS': 300,
    'Athens, ATH-London, LHR': 250,
    'Athens, ATH-Hong Kong, HKG': 500,
    'Athens, ATH-Moscow, SVO': 350,
    'Athens, ATH-Sydney, SYD': 600,
    'Athens, ATH-Paris, CDG': 200,
    'Athens, ATH-Abu Dhabi, AUH': 450,
    'Athens, ATH-New York, JFK': 650,
    'Athens, ATH-Manila, MNL': 700,
    'Hong Kong, HKG-Amsterdam, AMS': 400,
    'Hong Kong, HKG-London, LHR': 450,
    'Hong Kong, HKG-Athens, ATH': 500,
    'Hong Kong, HKG-Moscow, SVO': 550,
    'Hong Kong, HKG-Sydney, SYD': 800,
    'Hong Kong, HKG-Paris, CDG': 350,
    'Hong Kong, HKG-Abu Dhabi, AUH': 600,
    'Hong Kong, HKG-New York, JFK': 700,
    'Hong Kong, HKG-Manila, MNL': 750,
    'Moscow, SVO-Amsterdam, AMS': 350,
    'Moscow, SVO-London, LHR': 300,
    'Moscow, SVO-Athens, ATH': 350,
    'Moscow, SVO-Hong Kong, HKG': 550,
    'Moscow, SVO-Sydney, SYD': 750,
    'Moscow, SVO-Paris, CDG': 250,
    'Moscow, SVO-Abu Dhabi, AUH': 500,
    'Moscow, SVO-New York, JFK': 600,
    'Moscow, SVO-Manila, MNL': 650,
    'Sydney, SYD-Amsterdam, AMS': 800,
    'Sydney, SYD-London, LHR': 550,
    'Sydney, SYD-Athens, ATH': 600,
    'Sydney, SYD-Hong Kong, HKG': 800,
    'Sydney, SYD-Moscow, SVO': 750,
    'Sydney, SYD-Paris, CDG': 700,
    'Sydney, SYD-Abu Dhabi, AUH': 850,
    'Sydney, SYD-New York, JFK': 900,
    'Sydney, SYD-Manila, MNL': 950,
    'Paris, CDG-Amsterdam, AMS': 150,
    'Paris, CDG-London, LHR': 100,
    'Paris, CDG-Athens, ATH': 200,
    'Paris, CDG-Hong Kong, HKG': 350,
    'Paris, CDG-Moscow, SVO': 250,
    'Paris, CDG-Sydney, SYD': 700,
    'Paris, CDG-Abu Dhabi, AUH': 400,
    'Paris, CDG-New York, JFK': 550,
    'Paris, CDG-Manila, MNL': 600,
    'Abu Dhabi, AUH-Amsterdam, AMS': 450,
    'Abu Dhabi, AUH-London, LHR': 400,
    'Abu Dhabi, AUH-Athens, ATH': 450,
    'Abu Dhabi, AUH-Hong Kong, HKG': 600,
    'Abu Dhabi, AUH-Moscow, SVO': 500,
    'Abu Dhabi, AUH-Sydney, SYD': 850,
    'Abu Dhabi, AUH-Paris, CDG': 400,
    'Abu Dhabi, AUH-New York, JFK': 700,
    'Abu Dhabi, AUH-Manila, MNL': 750,
    'New York, JFK-Amsterdam, AMS': 600,
    'New York, JFK-London, LHR': 500,
    'New York, JFK-Athens, ATH': 650,
    'New York, JFK-Hong Kong, HKG': 700,
    'New York, JFK-Moscow, SVO': 600,
    'New York, JFK-Sydney, SYD': 900,
    'New York, JFK-Paris, CDG': 550,
    'New York, JFK-Abu Dhabi, AUH': 700,
    'New York, JFK-Manila, MNL': 800,
    'Manila, MNL-Amsterdam, AMS': 550,
    'Manila, MNL-London, LHR': 600,
    'Manila, MNL-Athens, ATH': 700,
    'Manila, MNL-Hong Kong, HKG': 750,
    'Manila, MNL-Moscow, SVO': 650,
    'Manila, MNL-Sydney, SYD': 950,
    'Manila, MNL-Paris, CDG': 600,
    'Manila, MNL-Abu Dhabi, AUH': 750,
    'Manila, MNL-New York, JFK': 800
};
function calculateCost() {
    const adults = parseInt(document.getElementById('adults').value) || 0;
    const children = parseInt(document.getElementById('children').value) || 0;
    const infants = parseInt(document.getElementById('infants').value) || 0;
    const flyingFrom = document.getElementById('flyingFrom').value;
    const flyingTo = document.getElementById('flyingTo').value;

    const adultCost = 100; 
    const childCost = 50; 
    const infantCost = 25; 

    if (!flyingFrom || !flyingTo) {
        document.getElementById('totalCost').innerText = 'Please select both departure and destination locations.';
        return;
    }

    const routeKey = `${flyingFrom}-${flyingTo}`;
    const routeCost = routeCosts[routeKey];

    if (!routeCost) {
        document.getElementById('totalCost').innerText = 'No cost available for the selected route.';
        return;
    }

    const totalCost = (adults * adultCost) + (children * childCost) + (infants * infantCost) + routeCost;

    document.getElementById('totalCost').innerText = 'Total Cost: $' + totalCost;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-qBTxbpcGJ2qz41atne6Zqj5fiSIB44mcjdawe9mVy5VvYyUR2K23LOB/pHU5N9cE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-N4dd+tmWEdkxFnBvXZ8YYp9k1jVD9U3H1GnQ5u2rEXWp3lk6c5ozT4cC1NfTXtr0" crossorigin="anonymous"></script>
</body>
</html>
