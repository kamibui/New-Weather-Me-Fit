


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@400;700&display=swap" rel="stylesheet"> 
    
  <style>
 
 body {
        height: 100vh;
        margin: 0; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        background-color: #EDEDD7; 
      }
  
  h1 {
    font-family: 'Gluten', cursive;
    font-size:4rem;
  }

  .output {
    font-size: 1.5rem;
    margin-top: 20px;
  }

  </style>

    <title>Weather Me Fit</title>

  </head>

  <body>

    <form method="post">

  <div class="container text-center my-4">
      <h1>Weather Me Fit</h1>
     <div class = "row mt-3">

     </form>

      <?php

  include "form.php"; 
  
  // this is to get output from api.php
  ob_start();
  include "api.php";
  $api_output = ob_get_clean();

  // if api.php cannot output then it will show the empty.php
  if (!empty(trim($api_output))){
    echo "<div class = 'ouput'>$api_output</div>";
  }else {
   
      include "empty.php";
  }
  
  ?> 

</div>

</div>
</form>

  </body>
</html>