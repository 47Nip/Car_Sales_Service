<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sale Page</title>
    <link rel="stylesheet" href="../marutisuzuki.css">
</head>

<body>

<div class="container">
    <h1>Skoda</h1>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "cars";
    
    $conn = mysqli_connect($servername,$username,$pass,$database);
    
    if(!$conn){
        die("error" .mysqli_connect_error());
    
    }
    
    $sql = "SELECT * from skoda";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='car'>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<a href='../submit_inquary.php?car=" . urlencode($row["name"]) . "'>";

echo "<button type='submit'>Inquire</button>";
echo "</a>";
            echo "<a href='" . $row["car_link"] . "'>";
            echo "<img src='images/" . $row["img_url"] . "' alt='" . $row["name"] . "'>";
           
            echo "</a>";
            echo "<a href='" .$row["test_drive"]. "'>";
            echo "<button type='submit'>Test Drive Book</button>";
            echo "</a>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </div>


</body>
</html>
    

