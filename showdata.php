<?php
    $city = $_POST["linn"];
    
    $json_string1 = file_get_contents("http://autocomplete.wunderground.com/aq?query=$city&c=EE");
    $parsed_json1 = json_decode($json_string1, true);
    $arr = $parsed_json1["RESULTS"];
    $linn = $arr[0]["l"];
    
    $json_string2 = file_get_contents("http://api.wunderground.com/api/c4671c7df1daeee9/geolookup/conditions/lang:ET$linn.json");
    $parsed_json2 = json_decode($json_string2);
    
    $location = $parsed_json2->{'location'}->{'city'};
    $weather = $parsed_json2->{'current_observation'}->{'weather'};
    $temp_c = $parsed_json2->{'current_observation'}->{'temp_c'};
    $observation_time = $parsed_json2->{'current_observation'}->{'observation_time'};
    $wind_kph = $parsed_json2->{'current_observation'}->{'wind_kph'};
    $windchill_c = $parsed_json2->{'current_observation'}->{'windchill_c'};
    $image = $parsed_json2->{'current_observation'}->{'icon_url'};
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Veebiteenus</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    </head>
    <body>
        <div class="container container-relative flex-container centering">
            <div class="section-content">
                <div class="showdata">
                    <p><h1><?php echo "${location}";?></h1></p>
                    <br>
                    <p><h4><?php echo "${weather}" ; echo '<br>'; echo '<img src="'.$image.'"/>';?></h4></p>
                    <br>
                    <p><?php echo "Temperatuur: ${temp_c} °C" ;?></p>
                    <p><?php echo "Tuul: ${wind_kph} kph" ;?></p>
                    <p><?php echo "Tundub nagu: ${windchill_c} °C" ;?></p>
                    <br><br>
                    <p><?php echo "${observation_time}" ;?></p>
                    <p><a class="buttons buttons-top btn btn-primary" href="index.php">Return</a></p>
                </div>
            </div>
            <div class="footer centering">
                <p>
                    <a href="https://github.com/silverpiir" target="_blank"><img src="img/github.png" /></a>
                    <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="img/linkedin-logo.png" /></a>
                    <a href="mailto:silverpiir@gmail.com"><img src="img/mail.png" /></a>
                </p>
                <p>2018 Silver Piir.</p>
            </div> 
        </div>
    </body>
</html>