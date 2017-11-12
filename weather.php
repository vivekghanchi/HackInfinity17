<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weather App</title>
    <style>
        body{
            width: 960px;
            margin: 0 auto ;
        }
        .userForm{
            padding-top: 50px;
        }
    </style>
</head>
<body>

    <form class="userForm" name="weatherForm" action="weather.php" method="GET">
        <h1>Weather</h1>
        City: <input type="text" name="city" placeholder="city"/><br/>
        Country: <input type="text" name="country" placeholder="country"/><br/>
        <input type="submit" name="submit" value="submit"/>
    </form>

        <br/>
        <hr/>

<?php
    if(isset($_GET)){
        //-------Get the user input
        $user_city = $_GET['city'];
        $user_country = $_GET['country'];
        //-------get the user input

        //-------connect to api and get info
        $api_url = "http://api.openweathermap.org/data/2.5/forecast?id=524901&APPID={APIKEY}" . $user_city . "," . $user_country;
        $weather_data = file_get_contents($api_url);
        $json = json_decode($weather_data, TRUE);
        //--------connect to api and get info

        //---------get requested info from the api
        $user_temp = $json['main']['temp']; //temperature
        $user_humidity = $json['main']['humidity']; //Humidity
        $user_conditions = $json['weather'][0]['main']; //weather conditions
        $user_wind = $json['wind']['speed']; //wind speed
        $user_direction = $json['wind']['deg']; //wind direction
        //---------get requested info from the api

        //--------output to the user
        echo "<strong> City : <strong>" . $user_city . "<br />";
        echo "<strong> Country : <strong>" . $user_country . "<br />";
        echo "<strong> Humidity : <strong>" . $user_humidity . "<br />";
        echo "<strong> Current Conditions : <strong>" . $user_conditions . "<br />";
        echo "<strong> Wind Speed : <strong>" . $user_wind . "<br />";
        echo "<strong> Wind Direction : <strong>" . $user_direction . "<br />"; 
        echo "<strong> Current Temperature : <strong>" . $user_temp . "<br />";
        //--------output to the user

    };        
?>

<?php
    //--------saving users input
    if(isset($_GET['submit'])) {
        $data = "data.json";
        $json_string = json_encode($_GET, JSON_PRETTY_PRINT);
        file_put_contents($data, $json_string , FILE_APPEND); 
    };
    //-------saving users input
?>
</body>
</html>