<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("header2.php"); ?>
    <div id="carrossel" class="carrossel" data-bs-ride="carrossel">
        <div class="carrossel">
            <div class="carrossel">
                <img src="img/carrossel.jpg" class="carrossel" alt="...">
            </div>
            <div class="carrossel">
                <img src="img/carrossel2.jpg" class="carrossel" alt="...">
            </div>
            <div class="carrossel">
                <img src="img/carrossel3.jpg" class="carrossel" alt="...">
            </div>
        </div>
        <button class="carrossel-control-prev" type="button" data-bs-target="#carrosselExampleControls" data-bs-slide="prev">
            <span class="carrossel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carrossel-control-next" type="button" data-bs-target="#carrosselExampleControls" data-bs-slide="next">
            <span class="carrossel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <button class="carrossel-control-next" type="button" data-bs-target="#carrosselExampleControls" data-bs-slide="next">
            <span class="carrossel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <img src="img/fundo.jpg" width="100%">
</body>

</html>