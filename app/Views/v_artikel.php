<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Artikel</title>
</head>
<body>
    <a href="<?= base_url('artikel/tambah') ?>">Tambah Artikel</a>
    <?php 
    if(count($articles) == 0){
        echo "<br>";
        echo "Belum Ada Data";
    }
    foreach($articles as $data){ ?>
    <h1><a href="<?= base_url('artikel/'.$data['slug']) ?>"><?= $data['title'] ?></a></h1>
    <hr>
    <p><?= substr($data['content'], 0, 100) ?>... <a href="<?= base_url('artikel/'.$data['slug']) ?>">Selengkapnya</a></p>
    
    <?php } ?> 
</body>
</html>