<?php
 include 'config.php';
?>
<HTML>
<HEAD>
<TITLE>Menampilkan Layanan Surat Online</TITLE>
</HEAD>
<BODY>
<?php
 $query = "SELECT * FROM user";
 $sql = mysqli_query ($conn,$query);
 echo "<h3>Daftar Layanan Surat Online</h3>";
 echo "<table border='1' cellpadding='0' cellspacing='0'>";
 echo "<tr bgcolor='yellow'>
            <td width=10%>id</td>
            <td width=40%>username</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Pesan</td>
        </tr>";
 while ($hasil = mysqli_fetch_array ($sql)) {
 $id = $hasil['id'];
 $username =  ($hasil['username']);
 $email = ($hasil['email']);
 $phone = ($hasil['phone']);
 $pesan = ($hasil['pesan']);
 
 //tampilkan Supplier
 echo "<tr bgcolor='cyan'> 
 <td align='center' width=10%>$id</td>
 <td align='left' width=40%>$username</td>
 <td align='left'>$email</td>
 <td align='left'>$phone</td>
 <td align='right'>$pesan</td>";
 
 }
 echo "</table>";
?>
</BODY>
</HTML> 