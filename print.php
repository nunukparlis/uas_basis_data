<?php include("config.php");?>

			<?php include("header.php"); ?>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-success'>					
						<div class='panel-heading'>
            </div>
						
						
						<div class='panel-body'>
							<center>
								<h3></h3>
								<h3>Laporan Data Transaksi </h3>
								<p>&nbsp;</p>
							</center>

							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th>No</th>
								  <th>ID Transaksi</th>
								  <th>Nama Pembeli</th>
								  <th>NO Telp</th>
								  <th>Nama Produk </th>
								  
								  <th>Kategori</th>
                  <th>Harga</th>
                                  <th>Jumlah Beli</th>
                                  <th>Tanggal Bayar</th>
								  <th>Total Harga</th>
								</tr>
							  </thead>
							  <tbody> 
<?php
$query=mysqli_query($conn, "SELECT id_transaksi,nama_pembeli,no_telp,nama_produk,kategori,harga,jumlah_beli,tgl_bayar,total_bayar 
FROM transaksi_cost
CROSS JOIN produk_cost ON transaksi_cost.id_produk = produk_cost.id_produk 
CROSS JOIN pembeli_cost ON transaksi_cost.id_pembeli = pembeli_cost.id_pembeli")or die (mysqli_error($conn)); 


$j=0; 
while ($row=mysqli_fetch_array($query)) {     
    echo "<tr><td align='left' bgcolor='#657FFF'>";
    echo $j+1;
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["id_transaksi"];
    echo"</font>";
    echo"</td>";  
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["nama_pembeli"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["no_telp"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["nama_produk"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["kategori"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["harga"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["jumlah_beli"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["tgl_bayar"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["total_bayar"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>"; 
} ?>
</tbody>
</table><br>
<div class='pull-right'>
							Cikarang Pusat, 03 juli 2021 <br>
							<b><center>Manager Marketing</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
                            <p>&nbsp;</p>
							<b><center>NUNUK PANCA WULAN</center></b>
							</div>
                        </div>
                    </div>
                    <script>
		window.print();
	</script>
        </div>
    </body>
</html>