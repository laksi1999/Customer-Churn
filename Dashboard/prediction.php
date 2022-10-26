<?php
$has_predict = array_key_exists('predict', $_POST);
if ($has_predict) {
    unset($_POST['predict']);
    $new_customer = json_encode($_POST);
    $command = escapeshellcmd('python3 ./app/demo.py '.$new_customer.' 2>&1');
    $is_churn = shell_exec($command);
}
else {
    $is_churn = 404;
    //header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Predict Customer Churn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./assets/css/prediction.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <style>
        body {
            display: grid;
            place-items: center;
            background-color: #213b52;
            background-image: url('./assets/img/prediction.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
      
</head>
<body>
    <div class="register-form">
    
        <div class="row col-12" style="margin: 0px;">
            <div class="col-md-4 d-none d-md-block" style="background-color: #ABB2B9;">
                <h1 class="text-center" style="font-family: 'Sofia', sans-serif;">Will It Be A Churn?<br></h1>
                <?php 
                if ($has_predict == 0) {  
                ?>
                    <img src="./assets/img/try.jpg" class="result-img" alt="">
                <?php 
                }
                elseif ($is_churn == 1) {
                ?>
                    <img src="./assets/img/churn.gif" class="result-img" alt="">
                    <h1 class="text-center" style="font-family: 'Sofia', sans-serif; color:#803250">Churn<br></h1>
                <?php 
                }
                elseif ($is_churn == 0) {
                ?>
                    <img src="./assets/img/not-churn.gif" class="result-img" alt="">
                    <h1 class="text-center" style="font-family: 'Sofia', sans-serif; color:#1C6286">Not Churn<br></h1>
                <?php 
                }
                ?>
            </div>
            <div class="col-md-8" style="background-color: #2E4053;">
                <form method="POST" class="p-4 mt-5 text-white row">
                    <div class="col-md-6">
                        <label for="account_length" class="form-label">Account Length</label>
                        <input type="number" class="form-control" id="account_length" min='1' name='account_length'>
                    </div>
                    <div class="col-md-6">
                        <label for="location_code" class="form-label" style="margin-right: 35px;">Location Code</label>
                        <select id="location_code" class="form-select" name='location_code'>
                            <option value='' selected>Choose...</option>
                            <option value='445'>445</option>
                            <option value='452'>452</option>
                            <option value='547'>547</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="international_plan" class="form-label" style="margin-right: 35px;">International Plan</label>
                        <select id="international_plan" class="form-select" name='international_plan'>
                            <option value='' selected>Choose...</option>
                            <option value='1'>Yes</option>
                            <option value='0'>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="voice_mail_plan" class="form-label" style="margin-right: 35px;" >Voice Mail Plan</label>
                        <select id="voice_mail_plan" class="form-select" name='voice_mail_plan'>
                            <option value='' selected>Choose...</option>
                            <option value='1'>Yes</option>
                            <option value='0'>No</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="number_vm_messages" class="form-label">Number of Voice Mail Messages</label>
                        <input type="number" class="form-control" id="number_vm_messages" min='0' name='number_vm_messages'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_day_min" class="form-label">Total Day Minutes</label>
                        <input type="number" class="form-control" id="total_day_min" min='0' name='total_day_min'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_day_calls" class="form-label">Total Day Calls</label>
                        <input type="number" class="form-control" id="total_day_calls" min='0' name='total_day_calls'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_day_charge" class="form-label">Total Day Charge</label>
                        <input type="number" class="form-control" id="total_day_charge" min='0' name='total_day_charge'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_eve_min" class="form-label">Total Evening Minutes</label>
                        <input type="number" class="form-control" id="total_eve_min" min='0' name='total_eve_min'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_eve_calls" class="form-label">Total Evening Calls</label>
                        <input type="number" class="form-control" id="total_eve_calls" min='0' name='total_eve_calls'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_eve_charge" class="form-label">Total Evening Charge</label>
                        <input type="number" class="form-control" id="total_eve_charge" min='0' name='total_eve_charge'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_night_minutes" class="form-label">Total Night Minutes</label>
                        <input type="number" class="form-control" id="total_night_minutes" min='0' name='total_night_minutes'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_night_calls" class="form-label">Total Night Calls</label>
                        <input type="number" class="form-control" id="total_night_calls" min='0' name='total_night_calls'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_night_charge" class="form-label">Total Night Charge</label>
                        <input type="number" class="form-control" id="total_night_charge" min='0' name='total_night_charge'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_intl_minutes" class="form-label">Total International Minutes</label>
                        <input type="number" class="form-control" id="total_intl_minutes" min='0' name='total_intl_minutes'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_intl_calls" class="form-label">Total International Calls</label>
                        <input type="number" class="form-control" id="total_intl_calls" min='0' name='total_intl_calls'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="total_intl_charge" class="form-label">Total International Charge</label>
                        <input type="number" class="form-control" id="total_intl_charge" min='0' name='total_intl_charge'>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="customer_service_calls" class="form-label">Customer Service Calls</label>
                        <input type="number" class="form-control" id="customer_service_calls" min='0' name='customer_service_calls'>
                    </div>

                    <button type="submit" class="btn btn-warning mx-2 mt-4 col-12"  id="predict" name='predict'>Predict</button>
                    <button type="submit" class="btn btn-link mx-2 mt-2 col-12"  id="home" name='home'><a href="./home.php">Home</a></button>
                </form>
            </div>
        </div>
    </div>
 
</body>
</html>