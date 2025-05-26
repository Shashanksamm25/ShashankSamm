<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";
}

// Assuming the connection to the database is established
if(isset($_GET['id'])) {
    $car_id = $_GET['id'];

    // Change your SQL query to use prepared statements
    $sqli = "SELECT * FROM cars WHERE id = ?";
    $stmt1 = $conn->prepare($sqli);
    $stmt1->bind_param("i", $car_id); // 'i' indicates integer type
    $stmt1->execute();
    $result = $stmt1->get_result();
   
} else {
    echo "Invalid car ID<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Cars</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<style>

form {
            margin: 20px auto;
            max-width: 500px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="date"] {
            width: calc(80% - 5px);
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #priceDisplay {
            margin-top: 20px;
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 16px; /* Adjust font size as needed */

        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td a {
            color: #007bff;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        .btn-edit {
            background-color: #28a745;
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-edit:hover, .btn-delete:hover {
            opacity: 0.8;
        }

        .admin-dashboard img {
            max-width: 800px; /* Adjust the maximum width as needed */
            height: auto;
        }

        .admin-dashboard {
            display: flex;
            align-items: center; /* Vertically align contents */
            max-width: 1000px; /* Adjust maximum width as needed */
            margin: auto;
            padding: 20px;
        }

        .car-image1 {
            width:550px;
            flex: 0 0 auto; /* Don't grow or shrink */
            margin-right: 200px; /* Adjust margin as needed */
        }

        .car-details {
            flex: 1; /* Grow to fill remaining space */
        }

        .car-details h1 {
            font-size: 40px;
            margin-top: 0;
        }

        .car-details p {
            font-size: 20px;
        }
    </style>
</head>
<body>
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="#" class="logo"> <span>Dream</span>Carz</a>

<nav class="navbar">
    <a href="dashboard.php">Home</a>
    <!-- <div class="dropdown">
            <a href="">Usedcars</a>
            <div class="dropdown-content">
               <ul><li> <a href="add_salecar.php">Add Car</a></li>
               <li> <a href="manage_salecar.php">Manage Cars</a></li>
                <li><a href="view_request.php">View Requests</a></li>
</ul>
            </div>
        </div>   -->
        <a href="car_view.php">Used Cars</a>
        <a href="service_view.php">Services </a>
        <a href="rent_car_view.php">Rental Cars </a>

    <!-- <div class="dropdown">
            <a href="">services</a>
            <div class="dropdown-content">
               <ul><li> <a href="add_service.php">Add Service</a></li>
               <li> <a href="manage_service.php">Manage Service</a></li>
                <li><a href="view_srequest.php">View Requests</a></li>
</ul>
            </div>
        </div> 
    <div class="dropdown">
            <a href="">Rental Cars</a>
            <div class="dropdown-content">
               <ul><li> <a href="add_car.php">Add Car</a></li>
               <li> <a href="manage_car.php">Manage Cars</a></li>
                <li><a href="view_booking.php">View Bookings</a></li>
</ul>
            </div>
        </div>     -->
    <a href="add_review.php">reviews</a>
</nav>


<div id="login-btn">
   <a href="logout.php"><button class="btn">Logout</button></a>
    <i class="far fa-user"></i>
</div>

</header><section class="home">
<div class="admin-dashboard">
        <?php
        if ($result->num_rows > 0) {
            // Output data of the selected car
            $car = $result->fetch_assoc();
            // Display car image and details
            echo "<div class='car-image1'><img src='image/" . $car['car_image'] . "' alt='" . $car['car_name'] . "' width='800px'></div>";
            echo "<div class='car-details'>";
            echo "<h1 style='font-size:30px;'>" . $car['car_name'] . "</h1>";
            echo "<b><p style='font-size:20px;'>Brand: " . $car['brand'] . "</p>";
            echo "<p style='font-size:20px;color:red;'> ₹" . $car['price_per_day'] . " / Day</p></b>";
            ?>
            <!-- Date selection for start and end dates -->
            <form id="bookingForm" action="process_booking.php" method="POST">
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="start_date" required>
                <br>
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="end_date" required>
                <br>
                <!-- Hidden input fields to store car details -->
                <input type="hidden" id="carId" name="car_id" value="<?php echo $car['id']; ?>">
                <input type="hidden" id="carName" name="car_name" value="<?php echo $car['car_name']; ?>">
                <input type="hidden" id="carPrice" name="car_price" value="<?php echo $car['price_per_day']; ?>">
                <input type="hidden" id="carImage" name="car_image" value="<?php echo $car['car_image']; ?>">
                <!-- Display the calculated price -->
                <div id="priceDisplay"></div><br>
                <!-- Submit button -->
                <input type="submit" name="submit" value="Book Now">
            </form>
            <?php
            echo "</div>";
            // Add more details as needed
        } else {
            echo "Car not found";
        }
        ?>
    </div>
    </section>

<footer class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">Vehicles</a>
            <a href="#">Services</a>
            <a href="#">Featured</a>
            <a href="#">Reviews</a>
            <a href="#">Contact</a>
        </div>
        <div class="box">
            <h3>Contact Info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-222-3333</a>
            <a href="#">hellofreewebsitecode@gmail.com</a>
            <a href="#">City - Country - 000000</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Linkedin</a>
            <a href="#">Pinterest</a>
        </div>
    </div>
    <div class="credit">All Rights Reserved From 2015 By Dream Carz</div>
</footer>
<script>
        // Function to calculate the price based on selected dates
        function calculatePrice() {
            // Get car price and selected dates
            var carPrice = parseFloat(document.getElementById('carPrice').value);
            var startDate = new Date(document.getElementById('startDate').value);
            var endDate = new Date(document.getElementById('endDate').value);

            // Calculate the number of days between start and end dates
            var timeDiff = endDate.getTime() - startDate.getTime();
            var numDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

            // Calculate total price
            var totalPrice = carPrice * numDays;

            // Display the total price
            document.getElementById('priceDisplay').innerText = 'Total Price: ₹' + totalPrice.toFixed(2);
        }

        // Add event listeners to date inputs to recalculate price when dates are changed
        document.getElementById('startDate').addEventListener('change', calculatePrice);
        document.getElementById('endDate').addEventListener('change', calculatePrice);

        // Initially calculate the price when the page loads
        calculatePrice();
    </script>
</body>
</html>

<?php
$conn->close();
?>

