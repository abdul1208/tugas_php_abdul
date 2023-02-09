<?php
    include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT penerbit.*, judul, nama_pengarang, nama_penerbit, qty_stok, katalog.nama as nama_katalog 
                                        FROM penerbit
                                        LEFT JOIN  buku ON buku.id_penerbit = penerbit.id_penerbit 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY nama_penerbit ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    </head>
 
<body>

<center>
    <a href="index.php">Buku</a> |
    <a href="#">Penerbit</a> |
    <a href="#">Pengarang</a> |
    <a href="#">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Penerbit</a><br/><br/>
 
    <table class="table table-striped" width='80%' border=1>
 
    <tr>
        <th>ID Penerbit</th> 
        <th>Nama Penerbit</th> 
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Judul Buku</th>
        <th>Katalog</th>
        <th>Nama Pengarang</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($penerbit_data = mysqli_fetch_array($penerbit)) {         
            echo "<tr>";
            echo "<td>".$penerbit_data['id_penerbit']."</td>";
            echo "<td>".$penerbit_data['nama_penerbit']."</td>";
            echo "<td>".$penerbit_data['email']."</td>";  
            echo "<td>".$penerbit_data['telp']."</td>";
            echo "<td>".$penerbit_data['alamat']."</td>";
            echo "<td>".$penerbit_data['judul']."</td>";         
            echo "<td>".$penerbit_data['nama_katalog']."</td>";    
            echo "<td>".$penerbit_data['nama_pengarang']."</td>";     
            echo "<td><a href='edit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a href='delete.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>