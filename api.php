<?php

// i followed a youtube video for this part

$gallery = []; // 


if (!isset($_POST["city"]) || empty($_POST["city"])) {

      echo "Set Location";

    }else{
      $city = $_POST["city"];
      $city = ucwords(strtolower($city)); // added this for aesthetics, it capitalizes the first letter of city names, i got this from php.net
      $api_key = "8d1d21bcf433da11d638661753a0c4d7";
      $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key&units=metric";//added unit & metrics to change my temp info to Celsius instead of Kelvin (kelvin is the api's)
      $api_data = file_get_contents($api);


      if ($api_data === false) {
        echo "No weather data available. Try again later.";
    } else {
        $weather = json_decode($api_data, true);

        if (isset($weather["cod"]) && $weather["cod"] == 200) {
            $description = $weather["weather"][0]["description"]; // Gives weather description like cloudy, snowy, etc.
            $temperature = $weather["main"]["temp"]; 

            $rounded_temperature = round($temperature); // Round up the temperature to avoid decimals 

            if ($rounded_temperature > -100 && $rounded_temperature < 100) {
                
              echo "<div style='max-width: 1200px; margin: 0 auto; padding: 50px; margin-top: 1200px;'>";
                echo "<h3><strong>$city</strong> has <strong>$description</strong> with a temperature of <strong>{$rounded_temperature}°C</strong>.</h3>";

                // shows outfits based on temperature ranges
                if ($rounded_temperature < 0) {
                    
                  echo "<div style='margin-bottom: 40px;'>";
                    echo "<h4>Outfits for Cold Weather:</h4>";
                    
                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Cute-Comfy</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coldCute1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldCute2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldCute3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    
                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Casual</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coldCasual1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldCasual2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldCasual3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;'></div>";
                    
                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Going Out</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coldGO1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldGO2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldGO3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";

                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Professional</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coldPro1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldPro2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coldPro3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto; margin-bottom: 10px;'></div>";

                } elseif ($rounded_temperature >= 0 && $rounded_temperature <= 20) {
                  
                  echo "<div style='margin-bottom: 40px;'>";
                  echo "<h4>Outfits for Cooler Weather:</h4>";
                    
                  echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Cute-Comfy</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coolCute1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolCute2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolCute3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "</div>"; 
                    echo "</div>"; 

                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Casual</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coolCasual1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolCasual2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolCasual3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "</div>"; 
                    echo "</div>"; 

                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Going Out</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coolGO1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolGO2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolGO3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "</div>"; 
                    echo "</div>";

                    echo "<div style='margin-bottom: 20px;'>";
                    echo "<strong>Professional</strong>";
                    echo "<div style='display: flex; justify-content: space-between; flex-wrap: wrap; margin: 10px; padding: 10px;'>";
                    echo "<div><img src='images/coolPro1.jpg' alt='Cold Weather Outfit' style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolPro2.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "<div><img src='images/coolPro3.jpg' alt='Cold Weather Outfit'style = 'width: 250px; height: auto;margin-bottom: 10px;'></div>";
                    echo "</div>"; 
                    echo "</div>";
                } 
                echo "</div>";

            } else {
                echo "Invalid temperature data. Please try again.";
            }
        } else {
            echo "Cannot find the location. Please try again.";
        }
    }
}
?>