<?php
include 'config.php'; // Include database configuration

$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Movie List</title>
</head>
<body>
    <h1>Movie List</h1>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='item'>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p>Price: $" . $row["price"] . "</p>";

            if ($row["rating"] >= 4.0) {
                echo "<p class='high-rating'>Rating: " . $row["rating"] . "</p>";
            } else {
                echo "<p class='low-rating'>Rating: " . $row["rating"] . "</p>";
            }

            echo "<p>Release Date: " . $row["release_date"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No movies found.";
    }

    $conn->close(); // Close connection
    ?>
</body>
</html>
