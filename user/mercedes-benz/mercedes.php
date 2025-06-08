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
    <h1>Mercedes-Benz</h1>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "cars";
    
    $conn = mysqli_connect($servername,$username,$pass,$database);
    
    if(!$conn){
        die("error" .mysqli_connect_error());
    
    }
    
    $sql ="SELECT * FROM `mercedes-benz`";
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

<div id="inquiry-form" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeInquiryForm()">&times;</span>
        <h2>Inquire about <span id="car-model"></span></h2>
        <form action="submit_inquiry.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="hidden" id="car-model-input" name="car_model">
            <button type="submit">Submit Inquiry</button>
       </form>
    </div>
</div>

<script src="Maruti suzuki\script.js"></script>

</body>
</html>
    

