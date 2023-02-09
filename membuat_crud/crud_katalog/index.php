<?php
    include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT katalog.*, judul, nama_penerbit, nama_pengarang, tahun, katalog.nama as nama_katalog FROM katalog 
                                        LEFT JOIN  buku ON buku.id_katalog = katalog.id_katalog  
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        ORDER BY nama_katalog ASC");
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

<a href="add.php">Add New Katalog</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Katalog</th> 
        <th>Nama Katalog</th> 
        <th>Judul Buku</th> 
        <th>Penerbit</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($katalog_data = mysqli_fetch_array($katalog)) {         
            echo "<tr>";
            echo "<td>".$katalog_data['id_katalog']."</td>";
            echo "<td>".$katalog_data['nama_katalog']."</td>";
            echo "<td>".$katalog_data['judul']."</td>";    
            echo "<td>".$katalog_data['nama_penerbit']."</td>";    
            echo "<td>".$katalog_data['nama_pengarang']."</td>";    
            echo "<td>".$katalog_data['tahun']."</td>";        
            echo "<td><a href='edit.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a href='delete.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>