<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMMEL - Coming soon</title>
</head>
<body>
    <style>
        body{
            margin:0px;
            background-size: cover;
            background-color: whitesmoke;
        }
        .main-container{
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .image{
            width: 50%;
        }
        @media only screen and (max-width: 600px) {
            .image{
                width: 70%;
            }
        }
    </style>
    <div class="main-container">
        <div style="flex-grow:1; display: flex; flex-direction: column; justify-content: center; align-items: center; height: max-content;">
            <img src="/img/logo.png" alt="SEMMEL" class="image">
            <img src="/img/refill_comingsoon.png" class="image">
        </div>
    </div>
</body>
</html>