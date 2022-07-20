<?php

$countries = ['Turkey', 'Cuba', 'India', 'Korea', 'Japan', 'Brasil', 'Argentina', 'Uganda', 'Egypt',"Iran"];
$currency = ["Turkish Lira", "Cuban Peso", "Indian rupee", "South Korean won", "Japanese yen", "Brazilian real", "Argentine peso", "Ugandan shilling", "Egyptian pound", 'Iranian rial'];
$amount_euro = ['0.057', '0.03827', '0.01213', '0.00074', '0.00703', '0.18367', '0.00765', '0.00025', '0.05081', '0.00002'];
$currency_per_country = array_combine($countries, $currency);
$currency_in_euro = array_combine($countries, $amount_euro);


 if (isset($_GET['countries']) and isset($_GET['amount'])){
    $result = ($currency_in_euro[$_GET['countries']])*$_GET['amount'];
}
 

 if (isset($_GET['countries']) and isset($_GET['euro'])) {
    $result_reverse = $_GET['euro']/($currency_in_euro[$_GET['countries']]);
 }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Currency Converter</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <style>
            body {
                background-color: #2F4F4F;
                color: white;
                padding: 20px;
                font-size: 20px;
            }
        </style>
    </head> 
    <body>
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-11 text-center pb-1 pt-5 fs-1 fw-bold pb-1">
            <h1>Currency Converter</h1>
            <h2>Make your dream easier</h2>
        </br></br>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-lg-5 pt-3 pb-5 pb-lg-1 mr-lg-5 mt-lg-1 light border">  
    
            <h3>TO LOCAL CURRENCY</h3>
            </br> 
            <form  method="get" action="">
                <label class="form-label" for="countries">Where are you?:</label>
                <select id="countries" name="countries" class="form-select" aria-label="form-select country">
                </br>
                <option selected>Select country</option>
                <?php
                foreach($currency_per_country as $country => $currency){ ?>
                <option value= <?php echo ($country);?>> <?php echo ($country); ?></option>
                <?php }
                ?>
                </select>
                </br></br>
                <label class="form-label" for="amount"> Your amount in local currency is:</label>
                </br>
	            <input type="" name="amount">
                </br></br>
                <input type="submit" name="submit" value="submit">
            </form>  
            </br></br>
            <p>You have: <?php
                echo ($_GET['amount']." ");
                echo ($currency_per_country[$_GET['countries']]);        
                ?></p>
            <p> <h4> <i class="bi bi-arrow-right-square"> </i><?php echo $result; ?> €</h4</p>
        </div>

        <div class="col-12 col-lg-5 pt-3 ml-lg-5 mt-5 mt-lg-1 pb-1 light border">
        <h3>TO EURO</h3>
         </br>
            <form  method="get" action="">
                <label class="form-label" for="countries">Where are you?:</label>
                <select id="countries" name="countries" class="form-select"  aria-label="form-select country">
                </br>
                <option selected>Select country</option>
                <?php
                foreach($currency_per_country as $country => $currency){ ?>
                <option value= <?php echo ($country);?>> <?php echo ($country); ?></option>
                <?php }
                ?>
                </select>
                </br></br>
                <label class="form-label" for="euro">Your amount in euro:</label>
                </br>
                <input type="" name="euro">
                </br></br>
                <input type="submit" name="submit" value="submit">
            </form>  
                 </br></br>
            <p>You have: <?php
                echo ($_GET['euro']." €");
            ?></p>
            <p><h4> <i class="bi bi-arrow-right-square"></i> <?php echo $result_reverse." ";
                echo ($currency_per_country[$_GET['countries']]);
            ?></h4></p>
        </div>    
                </div>
                </div>        
    

</body>
</html>
