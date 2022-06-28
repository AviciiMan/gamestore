<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStore</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: dodgerblue;
        }
    </style>
</head>

<body>
    <img src="img/logo.jpg" width="10%">
    <h2></h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="loginVend.php">Login Vendedor</a>
        <a href="frmCliente.php">Cadastre-se</a>
        <a href="frmVendedor.php">Cadastre-se Como Vendedor</a>
    </div>
</body>

</html>