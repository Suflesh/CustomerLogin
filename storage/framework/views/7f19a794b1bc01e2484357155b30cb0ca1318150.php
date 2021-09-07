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
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">REGISTRATION</a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="navbar-brand" aria-current="page" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">ABOUT US</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6"
                style="background-color: rgba(26, 146, 146, 0.24);margin-top: 20px;box-shadow: 10px 10px 10px rgb(228, 229, 235);border-radius: 30px;">
                <center style="margin-top: 20px;">
                    <h1>CUSTOMER REGISTER HERE</h1>
                    <hr>
                    <?php if($message=Session::get('success')): ?>
                    <div class="alert alert-success"><?php echo e($message); ?></div>
                    <?php endif; ?>
                </center>
                <form action="customer" method="post">
                    <?php echo csrf_field(); ?>
                    USERNAME:<span><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    <input type="text" name="username" class="form-control" placeholder="USERNAME.."
                        style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;"><br>
                    EMAIL:<span><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    <input type="email" name="email" class="form-control" placeholder="EMAIL.."
                        style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;"><br>
                    PASSWORD:<span><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    <input type="password" name="password" class="form-control" placeholder="PASSWORD.."
                        style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;"><br>
                    <input type="submit" class="btn btn-success" value="REGISTER"><br><br>
                    <a href="#">Already Register!!</a>
                    <a href="login">Login Here</a><br><br>
                    
                </form>

                
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</body>

</html><?php /**PATH G:\Laravel\CustomerAuth\resources\views/register.blade.php ENDPATH**/ ?>