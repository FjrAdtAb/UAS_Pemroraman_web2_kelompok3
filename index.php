<html>
    <head>
        <title> pantauan covid 19 </title>
    </head>
    <body>
        <center>
            <h1>
                <?php
                $Sekarang = getdate();
                $bulan = $Sekarang['month'];
                $hari = $Sekarang ['mday'];
                $tahun = $Sekarang ['year'];
                $jam = $Sekarang ['hours'];
                ?>
            </h1>
            <h2> REKAPITULASI PENERIMAAN BANTUAN SOSIAL COVID-19 
                <form action="action.php"  method="POST">
            
        </form>
            <a href="insert.php">Tambah Data</a>
            <h3> Per <?php date_default_timezone_set('Asia/Jakarta');
            echo date("d F Y H:i:s");
            ?></h3>
           
            <table border="1">
            <thead>
                <tr>
                <th>No</th>
                <th>alokasi</th>
                <th>Jumlah Transaksi</th>
                <th>Jumlah Dana</th>
                </tr>
                </thead>
                <tbody>
                <?php
    include 'koneksi.php';
    $conn = mysqli_query($conn, "SELECT * from tbl_data");
    $no=1;
    foreach ($conn as $row){
        echo "<tr>
            <td>$no</td>
            
            <td>".$row['jumlah_transaksi']."</td>
            <td>".$row['jumlah_dana']."</td>
       
              </tr>";
        $no++;
    }
    ?>
            </tbody>

            </table>
            
                
            
        </center>
    </body>
</html>