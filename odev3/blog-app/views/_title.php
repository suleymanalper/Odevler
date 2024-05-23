<?php
    $data = getData();
    $activeMovies = array_filter($data["movies"], function($movie) {
        return $movie["is-active"];
    });
    $ozet = count($data["categories"]) . ' kategoride ' . count($activeMovies) . ' film listelenmiştir';
    const BASLIK = "Popüler Filmler";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo BASLIK; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary"><?php echo BASLIK; ?></h1>
    
    <?php if(isset($data["categories"])): ?>
    <p class="text-muted text-center"><?php echo $ozet; ?></p>
    <?php endif; ?>

    <?php if (empty($activeMovies)): ?>
    <div class="alert alert-warning text-center" role="alert">
        Henüz film eklenmemiştir.
    </div>
    <?php endif; ?>  
</div>

</body>
</html>
