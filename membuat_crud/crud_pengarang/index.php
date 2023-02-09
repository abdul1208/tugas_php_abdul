<?php
    include_once("connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT pengarang.*, isbn, judul, nama_penerbit, katalog.nama as nama_katalog FROM pengarang 
                                        LEFT JOIN  buku ON buku.id_pengarang = pengarang.id_pengarang  
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY nama_pengarang ASC");
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

<a href="add.php">Add New Pengarang</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Pengarang</th> 
        <th>Nama pengarang</th> 
        <th>Email</th> 
        <th>Telepon</th>
        <th>alamat</th>
        <th>Judul Buku</th>
        <th>Penerbit</th>
        <th>Katalog</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($pengarang_data = mysqli_fetch_array($pengarang)) {         
            echo "<tr>";
            echo "<td>".$pengarang_data['id_pengarang']."</td>";
            echo "<td>".$pengarang_data['nama_pengarang']."</td>";
            echo "<td>".$pengarang_data['email']."</td>";    
            echo "<td>".$pengarang_data['telp']."</td>";    
            echo "<td>".$pengarang_data['alamat']."</td>";    
            echo "<td>".$pengarang_data['judul']."</td>";    
            echo "<td>".$pengarang_data['nama_penerbit']."</td>";    
            echo "<td>".$pengarang_data['nama_katalog']."</td>";    
            echo "<td><a href='edit.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a href='delete.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>