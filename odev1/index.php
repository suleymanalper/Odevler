<?php

define ("baslik","Film Listesi");

$kategori1 = "Macera";
$kategori2 = "Dram";
$kategori3 = "Komedi";
$kategori4 = "Korku";

$film_baslik1 = "Paper Lives";
$film_ozet1 = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
$film_ozet1 = substr($film_ozet1, 0, 50) . "...";
$film_resim1 = "1.jpeg";
$film_yorumSayisi1 = "Yorum: 55";
$film_begeniSayisi1 = "Beğeni: 85";
$film_vizyon1 = "Vizyonda: Evet";

$film_baslik2 = "Walking Dead";
$film_ozet2 = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
$film_ozet2 = substr($film_ozet2, 0, 50) . "...";
$film_resim2 = "2.jpeg";
$film_yorumSayisi2 = "Yorum: 55";
$film_begeniSayisi2 = "Beğeni: 85";
$film_vizyon2 = "Vizyonda: Evet";


$film_url1 = str_replace(' ', '-', strtolower($film_baslik1)) . '.html';
$film_url2 = str_replace(' ', '-', strtolower($film_baslik2)) . '.html';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori1 ?></li>
                    <li class="list-group-item"><?php echo $kategori2 ?></li>
                    <li class="list-group-item"><?php echo $kategori3 ?></li>
                    <li class="list-group-item"><?php echo $kategori4 ?></li>
                </ul>
            </div>
            <div class="col-9">
                <h1><?php echo baslik; ?></h1>
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$film_resim1}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php echo $film_url1 ?>"><?php echo $film_baslik1 ?></a></h5>
                                <p class="card-text"><?php echo ucfirst(strtolower($film_ozet1)) ?></p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $film_yorumSayisi1 ?></span>
                                    <span class="badge bg-success"><?php echo $film_begeniSayisi1 ?></span>
                                    <span class="badge bg-success"><?php echo $film_vizyon1 ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$film_resim2}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php echo $film_url2 ?>"><?php echo $film_baslik2 ?></a></h5>
                                <p class="card-text"><?php echo ucfirst(strtolower($film_ozet2)) ?></p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $film_yorumSayisi2 ?></span>
                                    <span class="badge bg-success"><?php echo $film_begeniSayisi2 ?></span>
                                    <span class="badge bg-success"><?php echo $film_vizyon2 ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>