<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple shop</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            .item {
                padding: 20px;
                transition: all .4s;
                -webkit-transition: all .4s;
            }
            .item:hover {
                transform: scale(1.05);
                -ms-transform: scale(1.05);
                -webkit-transform: scale(1.05);
                box-shadow: 0 0 20px #888;
                background-color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 item text-center">
                    <img src="img/Apple_iPhone.png" alt="">
                </div>
                <div class="col-md-4 item text-center">
                    <img src="img/Eten_G500.png" alt="">
                </div>
                <div class="col-md-4 item text-center">
                    <img src="img/HP_Ipaq_111.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 item text-center">
                    <img src="img/HP_Ipaq_211.png" alt="">
                </div>
                <div class="col-md-4 item text-center">
                    <img src="img/HP_iPaq_hx2495.png" alt="">
                </div>
                <div class="col-md-4 item text-center">
                    <img src="img/HTC_Apache.png" alt="">
                </div>
            </div>
        </div>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
