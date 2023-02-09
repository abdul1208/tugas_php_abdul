<?php
$servername = "localhost";
$database = "perpustakaan_1";
$username = "root";
$password ="";

//create conection

$conn = mysqli_connect($servername, $username, $password, $database);
 //ceck connection

 if (!$conn) {
    die("connection failed : " . mysqli_error());

 }

 //echo "connected sucsesfullly";
 //mysqli_close($conn);

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data eah row
    while($row = $result->fetch_assoc()) {
        echo "Buku : " . $row["isbn"]. " " . $row["judul"]. " " . $row["tahun"]. $row["qty_stok"]. " " . $row["harga_pinjam"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();




?>