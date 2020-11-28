<?php
    include("includes/config.php");

    //Let's write the query
    $sql = "Select * FROM customer";

    // let's get the result 
    $result = mysqli_query($conn, $sql);

    // Now, we must Fetch the result as an array
    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link>
    <link>
    <link>
</head>

<body>
    <div class="header">
        <h2>Customer list</h2>
    </div>

    <main class="wrapper">
        <?php foreach($customers as $customer): ?>

            <div class="customer-container">
                <a id="name" href="customers.php?id=<?php echo $customer["id"]; ?>">
                    <p>
                        <?php echo $customer["last_name"]; ?>,
                        <?php echo $customer["first_name"]; ?>
                    </p>
                </a>
                <ul>
                    <li>Phone #: <?php echo $customer["phone"]; ?></li>
                    <li>Email: <?php echo $customer["email"]; ?></li>
                </ul>
            </div>

        <?php endforeach; ?>
    </main>
</body>

</html>
