<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "dbff";

$koneksi = new mysqli($host, $user, $password, $db);

$ql = "SELECT * FROM barang";

$hasil = mysqli_query($koneksi, $ql);

var_dump($hasil);

echo "<table border=2px>
<thead>
        <tr>
    <th>
        barang
    </th>
    <th>
        harga
    </th>
        </tr>
</thead>
<tbody>";
while ($row = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
}

echo "</tbody>
    </table>";

//pelanggan

$sql = "SELECT * FROM pelanggan";
$hasil = mysqli_query($koneksi, $sql);

echo "<table border=2px>
<thead>
    <tr>
        <th>
            pelanggan
        </th>
        <th>
            alamat
        </th>
        <th>
            telepon
        </th>
    </tr>
</thead>
<tbody>";

while ($row = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
};
echo "</tbody>
</table>";
