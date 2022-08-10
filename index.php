<?php require 'autoloader.php'; ?>
<?Php $Controller = new Controller; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            outline: initial;
            <?php
            if ($data['current']['is_day'] == 'yes') {
            ?>background-color: #fff;
            <?php
            } else {
            ?>background-color: #000;
            <?php } ?>
        }
    </style>
</head>

<body>

    <div id="weather_wrapper">
        <div class="weatherCard">
            <div class="currentTemp">
                <span class="temp"><?php echo $data['current']['temperature']; ?></span>
                <span class="location"><?php echo $data['location']['country'] . ", " . $data['location']['region'] . "," . $data['location']['name']; ?></span>
            </div>
            <div class="currentWeather">
                <span class="conditions"><img src="<?php echo $data['current']['weather_icons'][0]; ?>" alt=""></span>
                <div class="info">
                    <span class="rain"><?php echo $data['current']['precip'] . ' <br>%'; ?></span>
                    <span class="wind"><?php echo $data['current']['wind_speed'] . ' km'; ?></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>