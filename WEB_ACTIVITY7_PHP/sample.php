<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SAMPLE</title>
</head>
<body>
    <h1>PHP SAMPLE</h1>
    <?php
    $name = "BSIS";
    $campus = 2024;
    $college = "COLLEGE OF INFORMATION AND COMPUTING SCIENCES";
    
    
    $fullname = (isset($_GET['fullname'])) ?$_GET['fullname'] : "";
    $age = (isset($_GET['age'])) ? $_GET['age'] : 0;

    ?>
    <h2><?php echo $name;?></h2>
    <h1><?php echo $campus;?></h1>
    <h3><?php echo $college;?></h3>


<!--
    $GET METHOD - sends data by URL
    * data is visibile to everyone in the URL
    $POST METHOD - sends data by HTTP POST
    * data is not shown in the URL

-->

<form action="" method="get">
    <label for="">Name:</label>
    <input type="text" name="fullname">
    <label for="">Age:</label>
    <input type="text" name="age">
    <button type="submit">Submit</button>
</form>

<?php
    echo "Fullname: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
?>
    
</body>
</html>