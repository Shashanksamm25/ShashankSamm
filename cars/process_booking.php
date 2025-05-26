<?php
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Check if the username is set in the session
    if (isset($_SESSION['username'])) {
        // Include your database connection file
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "car";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Get username from session
        $username = $_SESSION['username'];

        // Get form data
        $car_id = $_POST['car_id'];
        $car_name = $_POST['car_name'];
        $car_price = $_POST['car_price'];
        $car_image = $_POST['car_image'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        // Calculate total price based on selected dates
        $start_timestamp = strtotime($start_date);
        $end_timestamp = strtotime($end_date);
        $num_days = ceil(abs($end_timestamp - $start_timestamp) / (60 * 60 * 24)); // Calculate number of days
        $total_price = $num_days * $car_price;

        // Prepare and execute SQL statement to insert booking details into the database
        $sql = "INSERT INTO rbookings (car_id, username, car_name, car_price, car_image, start_date, end_date) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssss", $car_id, $username, $car_name, $total_price, $car_image, $start_date, $end_date);
        if ($stmt->execute()) {
            echo "<script>alert('Rental Request Sent Successfully');</script>";
            // Redirect to the rent_car_view.php page after successful booking
            echo "<script>window.location = 'rent_car_view.php'</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "<script>alert('Session username not set.');</script>";
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
}
?>
