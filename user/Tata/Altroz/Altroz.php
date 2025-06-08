<!DOCTYPE html>
<html>
<head>
  <title>ALTROZ CAR DAETAILS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../../styles/all_cars.css">
</head>
<body>

<div class="car-images">
  <div>
    <img src="altroz-exterior-left-front-three-quarter.jpg" alt="Description of the second image">
    <!-- <p style="color: black; font-size: 18px; font-family: 'Times New Roman', serif;">LEFT FRONT</p> -->
  </div>
  <div>
    <img src="altroz-exterior-left-rear-three-quarter.jpg" alt="Hyundai Creta Right Front Three Quarter">
    <!-- <p style="color: black; font-size: 20px; font-family: 'Arial Black', sans-serif;">LEFT REAR</p> -->
  </div>
  <div>
    <img src="altroz-exterior-left-side-view.jpg" alt="Hyundai Creta Right Front Three Quarter">
    <!-- <p style="color: black; font-size: 18px; font-family: 'Times New Roman', serif;">LEFT</p> -->
  </div>
</div>

 
<h1 class="car-name">Tata Altroz</h1>
  
<div class="car-details">
  <div class="car-details-block">
    <h1>Price</h1>
    <p style="color: black; font-size: 18px; font-family: 'Times New Roman', serif;">₹ 6.65 - 10.80 Lakh</p>
  </div>
    
  <div class="car-details-block">
    <h1>Fuel</h1>
    <p style="color: black; font-size: 18px; font-family: 'Times New Roman', serif;">PETROL & CNG</p>
  </div>
    
  <div class="car-details-block">
    <h1>Milage</h1>
    <p style="color: black; font-size: 18px; font-family: 'Times New Roman', serif;">18.5 - 26.2 km/l</p>
  </div>
    
  <div class="car-details-block">
    <h1>Speed</h1>
    <p style="color: black; font-size: 18px; font-family: 'Times New Roman', serif;">180 kmph <i class="fas fa-tachometer-alt"></i></p>
  </div>
  
  <div class="warranty-safety">
  <div class="warranty-safety__item">
    <i class="fas fa-shield-alt warranty-safety__icon"></i>
    <span class="warranty-safety__text">Warranty: 3 Years or 100000 km</span>
  </div>
  <div class="warranty-safety__item">
    <i class="fas fa-star warranty-safety__icon"></i>
    <span class="warranty-safety__text">Safety Rating: 5 Star (Global NCAP)</span>
  </div>
</div>
</div>
<br><br>


<div class="emi-option">
  <h2>EMI Option</h2>
  <table class="emi-option__table">
    <tr>
      <th>Tenure (months)</th>
      <th>EMI Amount (per month)</th>
    </tr>
    <tr>
      <td>12</td>
      <td>Rs. 10,000</td>
    </tr>
    <tr>
      <td>24</td>
      <td>Rs. 5,500</td>
    </tr>
    <tr>
      <td>36</td>
      <td>Rs. 3,800</td>
    </tr>
  </table>
</div>
<br><br>
<div class="get-caller-option">
  <h2>Get a Caller from Dealer</h2>
  <form class="get-caller-form" action="Brezza.php" method="post">
    <?php
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $database = "car sales and service";

        $conn = mysqli_connect($servername,$username,$pass,$database);

        if(!$conn){
          die("error".mysqli_connect_error());


        } 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = $_POST["name"];
          $phoneno = $_POST["phone"];

          $sql = "INSERT INTO call_request (`name`, `phone no`) VALUES ('$name', '$phoneno')";
          $result = mysqli_query($conn, $sql);
          
          if ($result) {
              echo "You will receive a call within the next 24 hours.";
          } else {
              echo "Error: " . mysqli_error($conn);
          }
          
          
        }
        ?>
    <input type="text" name="name" id = "name" placeholder="Your Name">
    <input type="tel" name="phone" id ="phone" placeholder="Your Phone Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number">

    <input type="submit" value="Request a Call">
  </form>
</div>



</body>
</html>
