<?php
 include 'config.php';
?>
<HTML>
<HEAD>
<TITLE>Menampilkan Daftar Penduduk</TITLE>
</HEAD>
<BODY>
<?php
 $query = "SELECT * FROM penduduk";
 $sql = mysqli_query ($conn,$query);
 echo "<h3>Daftar penduduk</h3>";
 echo "<table border='1' cellpadding='0' cellspacing='0'>";
 echo "<tr bgcolor='yellow'>
            
            <td width=40%>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
        </tr>";
 while ($hasil = mysqli_fetch_array ($sql)) {
 
 $nama =  ($hasil['nama']);
 $tanggal = ($hasil['tanggal']);
 $alamat = $hasil['alamat'];
 
 //tampilkan Supplier
 echo "<tr bgcolor='cyan'> 
 
 <td align='left' width=40%>$nama</td>
 <td align='left'>$tanggal</td>
 <td align='right'>$alamat</td>";
 }
 echo "</table>";
?>
</BODY>
</HTML> 