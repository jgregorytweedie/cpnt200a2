<?php

    include("includes/config.php");

    // let's get the ID 
    $id = $_GET["id"];

    $sql = "SELECT * from customer WHERE id='$id'";

    // get the result set
    $result = mysqli_query($conn, $sql);

    // let's fetch customer as an array
    $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Personal Info</title>

    <link>
    <link>
</head>
<body>
    <div class="customer-name">
        <h3>
            <?php echo $customers[0]["first_name"]; ?>,
            <?php echo $customers[0]["last_name"]; ?>
        </h3>
    </div>

    <div class="customers">
    <!-- I want to explain what's going on below here, because I often times forget this. 
    What I'm doing is I am "console logging" specific items within the array object. 
    So, in item 0, I want to bring in the date of birth, 
    phone number, email, and driver license number. So i do echo to "console log" each part within the object of 0.-->
        <ul>
            <li>Date of Birth: <?php echo $customers[0]["dob"]; ?></li>
            <li>Email: <?php echo $customers[0]["email"]; ?></li>
            <li>Phone: <?php echo $customers[0]["phone"]; ?></li>
            <li> Driver License number: <?php echo $customers[0]["driver_license_number"]; ?></li>
        </ul>
        <a href="index.php"><button class="btn">Back</button></a>
    </div>

</body>
</html>