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
    <h1>Jaguar</h1>
    
    <?php
    
    $cars = [
        ['F-Pace', 'f-pace-exterior-right-front-three-quarter-2.jpg', 'http://localhost/Jaguar/F-Pace/F-Pace.php'],
        ['F-Type', 'jaguar-f-type-right-front-three-quarter18.jpg', 'http://localhost/Jaguar/F-Type/F-Type.php'],
        ['I-Pace', 'i-pace-exterior-right-front-three-quarter.jpg', 'http://localhost/Jaguar/I-Pace/I-Pace.php'],
    ];
    ?>

    <?php
    if (!empty($cars)) {
        foreach ($cars as $car): ?>
            <div class="car">
                <h2><?php echo $car[0]; ?></h2>
                <button onclick="showInquiryForm('<?php echo $car[0]; ?>')">Inquire</button> 
                <a href="<?php echo isset($car[2]) ? $car[2] : '#'; ?>">
                    <img src="images/<?php echo $car[1]; ?>" alt="<?php echo $car[0]; ?>">
                    Click here to visit <?php echo $car[0]; ?> car 
                </a>
            </div>
        <?php endforeach;
    } else {
        echo "No cars available.";
    }
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

<script src="script.js"></script>

</body>
</html>
    

