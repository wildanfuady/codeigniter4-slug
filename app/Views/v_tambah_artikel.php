<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
</head>
<body>
    <h1>Form Tambah Artikel</h1>
    <form action="<?= base_url('artikel/simpan') ?>" method="post">
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" placeholder="Judul Artikel" style="width:100%"></td>
        </tr>
        <tr>
            <td>Isi Artikel</td>
            <td><textarea type="text" name="content" rows="5" placeholder="Isi Artikel" style="width:100%"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
    </table>
    </form>
</body>
</html>