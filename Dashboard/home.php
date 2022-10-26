<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link href="./assets/css/home.css" rel="stylesheet">
    <style>
        body {
            display: grid;
            place-items: center;
            background-image: url('./assets/img/home.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body style="margin-left: 8em;">
    <main class="page-content">
        <div class="card">
            <div class="content">
                <h2 class="title">Churn Dataset</h2>
                <p class="copy">You can download a cleaned customer churn dataset here.</p><button class="btn"><a href="./data/dataset.csv" download>Download</a></button>
            </div>
        </div>
        <div class="card" style="margin-left: 6em;">
            <div class="content">
                <h2 class="title">Dashboard</h2>
                <p class="copy">You can visit to a interactive dashboard here.</p><button class="btn"><a href="https://app.powerbi.com/reportEmbed?reportId=a503c536-9bf6-4594-83c3-6886cfa14075&autoAuth=true&ctid=aac0c564-6c5e-4b05-8dc3-408087f77f76&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D">Visit</a></button>
            </div>
        </div>
        <div class="card" style="margin-left: 12em;">
            <div class="content">
                <h2 class="title">Predict Churn</h2>
                <p class="copy">You can predict churn or not churn for a new customer here.</p><button class="btn"><a href="./prediction.php">Make Prediction</a></button>
            </div>
        </div>
    
    </main>

</body>

</html>