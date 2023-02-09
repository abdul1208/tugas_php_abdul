<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
        <table boder = "1" table class="table table-striped bg-warning">
        <td>
        <head>Daftar Nilai</head>
        </td>
        </table>
<html>
    <body>
    <div class = "row">
        <div class = "container col-md-9">
            <table border = "1" class="table table-striped">
            <tr>
                <th >No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Nilai</th>
                <th>Hasil</th>
            </tr>
        </div> 
    </div>
<?php
    $array = file_get_contents('array_json.json');
    $array_json = json_decode($array, true);
?>
<?php foreach ($array_json as $item): 

?>
<tr>
     <td ><?php echo $item['no'] ?></td>
     <td><?php echo $item['nama'] ?></td>
     <td><?php echo $item['tanggal_lahir'] ?></td>
     <td><?php echo $item['umur'] ?></td>
     <td><?php echo $item['alamat'] ?></td>
     <td><?php echo $item['kelas'] ?></td>
     <td><?php echo $item['nilai'] ?></td>
     <td><?php echo $item['hasil']?></td>
    </tr>


<?php endforeach; ?>

</body>
</html>

