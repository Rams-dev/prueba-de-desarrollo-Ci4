<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de desarrollo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/a95c03cc29.js"></script>
</head>
<body>
    <div class="container mt-3">
            <!-- message correct -->
            <?php
                if(session()->has("success")){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="text-center"><?= session("success");  ?></h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>
            
            <!-- message incorrect -->
            <?php
                if(session()->has("error")){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="text-center"><?= session("error"); ?></h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>

            <?= $this->renderSection('content') ?>
    </div>
</body>
</html>