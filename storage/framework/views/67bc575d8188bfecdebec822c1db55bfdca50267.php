<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        span {
            font-weight: bold;
            color: red;

            animation: blinker 1s linear infinite;
        }

        @keyframes  blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                 

        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6"
                style="background-color: rgba(26, 146, 146, 0.24);margin-top: 20px;box-shadow: 10px 10px 10px rgb(228, 229, 235);border-radius: 30px;">
                <center style="margin-top: 20px;">
                    <h1>WELCOME TO DASHBOARD</h1>
                    <hr>
                </center>
                <table class="table">
                    <tr>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                     
                    <tr>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td><a href="logout">LOGOUT</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</body>

</html><?php /**PATH G:\Laravel\CustomerAuth\resources\views/dashboard.blade.php ENDPATH**/ ?>