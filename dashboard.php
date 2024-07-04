<?php
session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
            font-family: 'Poppins' , sans-serif
        }
        .navbar {
            background-color: #141C24;
            color: #C69963;
        }
        .navbar-logo {
            font-size: 1.5em;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .flight-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            cursor: pointer;
        }
        .flight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .modal-content {
            background-color: #f9f9f9;
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .modal-header {
            background-color: #2C3E50;
            color: #fff;
            border-bottom: none;
        }
        .modal-title {
            color: #fff;
        }
        .modal-body {
            font-size: 1.1em;
        }
        .modal-footer {
            border-top: none;
        }
        img{
            height: 22rem;
        }
        .flight-card{
            border: none;
        }
        .logo{
            height: 60px;
            cursor: pointer;
            margin-left: 10px;
        }
      
    </style>
</head>
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
                            <a class="nav-link active fw-semibold" href="dashboard.php" >Dashboard</a>
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
    <div class="container">
        <h1 class="mt-4 mb-4 text-center">Flight Dashboard</h1>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<div class="alert alert-info">' . htmlspecialchars($_SESSION['message']) . '</div>';
                unset($_SESSION['message']);
                }
         ?>

        <div class="table-responsive mb-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Flight Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Return</th>
                        <th scope="col">Flight</th>
                    </tr>
                </thead>
                <tbody>
               <?php
                    if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT id, firstname, lastname, flyingFrom, flyingTo, outboundDate, returnDate FROM booking WHERE users_id = ? ORDER BY id";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $index = 0;
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            $index++;
                            echo '<td>' . $index . '</td>';
                            echo '<td>' . htmlspecialchars($row['firstname']) ." " .htmlspecialchars($row['lastname']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['flyingFrom']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['flyingTo']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['returnDate']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['outboundDate']) . '</td>';
                            echo '<td><button class="btn btn-danger btn-sm cancel-flight" data-id="' . htmlspecialchars($row['id']) . '">Cancel</button></td>';
                            echo '</tr>';
                        }

                        $stmt->close();
                    }
                ?>
                
                </tbody>
            </table>
        </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal1">
                    <img src="assets/Amsterdam.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body" >
                        <h5 class="card-title">Flight ABC123</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Amsterdam, AMS</p>
                        <p class="card-text">Departure: 10:00 AM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal2">
                    <img src="assets/londoneye.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight DEF456</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: London, LHR</p>
                        <p class="card-text">Departure: 11:30 AM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal3">
                    <img src="assets/Athens (1).jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight GHI789</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Athens, ATH</p>
                        <p class="card-text">Departure: 1:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal4">
                    <img src="assets/Hong_Kong.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight JKL012</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Hong Kong, HKG</p>
                        <p class="card-text">Departure: 2:45 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal5">
                    <img src="assets/Moscow.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight MNO345</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Moscow, SVO</p>
                        <p class="card-text">Departure: 4:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal6">
                    <img src="assets/Syd.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight PQR678</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Sydney, SYD</p>
                        <p class="card-text">Departure: 5:30 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal7">
                    <img src="assets/Paris (1).jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight STU901</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Paris, CDG</p>
                        <p class="card-text">Departure: 6:45 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal8">
                    <img src="assets/dovlet-hojayev-mrsxNu1molw-unsplash.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight VWX234</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: Abu Dhabi, AUH</p>
                        <p class="card-text">Departure: 8:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card flight-card" data-bs-toggle="modal" data-bs-target="#flightModal9">
                    <img src="assets/zachary-shakked-dB2KMeg-5jk-unsplash.jpg" class="card-img-top" alt="Flight image">
                    <div class="card-body">
                        <h5 class="card-title">Flight YZA567</h5>
                        <p class="card-text">From: Manila, MNL</p>
                        <p class="card-text">To: New York, JFK</p>
                        <p class="card-text">Departure: 9:30 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="flightModal1" tabindex="-1" aria-labelledby="flightModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel1">Flight ABC123</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> ABC123</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Amsterdam, AMS</p>
                    <p><strong>Departure Time:</strong> 10:00 AM</p>
                    <p><strong>Gate:</strong> A1</p>
                    <p><strong>Duration:</strong> 13 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal2" tabindex="-1" aria-labelledby="flightModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel2">Flight DEF456</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> DEF456</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> London, LHR</p>
                    <p><strong>Departure Time:</strong> 11:30 AM</p>
                    <p><strong>Gate:</strong> B3</p>
                    <p><strong>Duration:</strong> 14 hours</p>
                    <p><strong>Status:</strong> Delayed</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal3" tabindex="-1" aria-labelledby="flightModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel3">Flight GHI789</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> GHI789</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Athens, ATH</p>
                    <p><strong>Departure Time:</strong> 1:00 PM</p>
                    <p><strong>Gate:</strong> C2</p>
                    <p><strong>Duration:</strong> 12 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal4" tabindex="-1" aria-labelledby="flightModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel4">Flight JKL012</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> JKL012</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Hong Kong, HKG</p>
                    <p><strong>Departure Time:</strong> 2:45 PM</p>
                    <p><strong>Gate:</strong> D4</p>
                    <p><strong>Duration:</strong> 2 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal5" tabindex="-1" aria-labelledby="flightModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel5">Flight MNO345</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> MNO345</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Moscow, SVO</p>
                    <p><strong>Departure Time:</strong> 4:00 PM</p>
                    <p><strong>Gate:</strong> E1</p>
                    <p><strong>Duration:</strong> 10 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal6" tabindex="-1" aria-labelledby="flightModalLabel6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel6">Flight PQR678</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> PQR678</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Sydney, SYD</p>
                    <p><strong>Departure Time:</strong> 5:30 PM</p>
                    <p><strong>Gate:</strong> F5</p>
                    <p><strong>Duration:</strong> 8 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal7" tabindex="-1" aria-labelledby="flightModalLabel7" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel7">Flight STU901</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> STU901</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Paris, CDG</p>
                    <p><strong>Departure Time:</strong> 6:45 PM</p>
                    <p><strong>Gate:</strong> G3</p>
                    <p><strong>Duration:</strong> 13 hours</p>
                    <p><strong>Status:</strong> Delayed</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal8" tabindex="-1" aria-labelledby="flightModalLabel8" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel8">Flight VWX234</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> VWX234</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> Abu Dhabi, AUH</p>
                    <p><strong>Departure Time:</strong> 8:00 PM</p>
                    <p><strong>Gate:</strong> H2</p>
                    <p><strong>Duration:</strong> 9 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="flightModal9" tabindex="-1" aria-labelledby="flightModalLabel9" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightModalLabel9">Flight YZA567</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Flight Number:</strong> YZA567</p>
                    <p><strong>Origin:</strong> Manila, MNL</p>
                    <p><strong>Destination:</strong> New York, JFK</p>
                    <p><strong>Departure Time:</strong> 9:30 PM</p>
                    <p><strong>Gate:</strong> I4</p>
                    <p><strong>Duration:</strong> 15 hours</p>
                    <p><strong>Status:</strong> On Time</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

    <script>
    $(document).ready(function() {
        $('.cancel-flight').on('click', function() {
            var flight_id = $(this).data('id');
            if (confirm('Are you sure you want to cancel this flight?')) {
                $.ajax({
                    url: 'cancel_flight.php',
                    method: 'POST',
                    data: { flight_id: flight_id },
                    success: function(response) {
                        alert(response);
                        location.reload(); 
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            }
        });
    });
</script>
</body>
</html>